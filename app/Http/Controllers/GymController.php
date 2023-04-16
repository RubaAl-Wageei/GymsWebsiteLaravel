<?php

namespace App\Http\Controllers;

use App\Models\Gym;
use Illuminate\Http\Request;

class GymController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $gyms=Gym::all();

        //  return view('user.Salonat',compact('salons'));

        return view('Dashboard.Gym.Gyms',compact('gyms'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Dashboard.Gym.CreateGym');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $gym_img = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/Images',$gym_img);
        var_dump($request->file('upload_file'));

        // insert user
        $gym = new Gym();
        $gym->Name = $request->name;
        $gym->Email = $request->email;
        $gym->Phone = $request->phone;
        $gym->Description = $request->description;
        $gym->WorkHour = $request->work_hours;
        $gym->Image= $gym_img;
        $gym->save();
        return redirect('Gym');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gym  $gym
     * @return \Illuminate\Http\Response
     */
    public function show(Gym $gym)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gym  $gym
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $gym = Gym::find($id);
        return view('Dashboard.Gym.UpdateGym',compact('gym'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gym  $gym
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $gym = Gym::findOrFail($id);
        $gym->Name = $request->name;
        $gym->Email = $request->email;
        $gym->Phone = $request->phone;
        $gym->Description = $request->description;
        $gym->WorkHour = $request->work_hours;
        if ($request->hasFile('image')) {
            $gym_img = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/Images',$gym_img);
            $gym->Image = $gym_img;
        }

        $gym->save();

        return redirect('Gym');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gym  $gym
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $gym = Gym::findorfail($id);
        $gym->delete();
        return redirect()->route('Gym.index');

    }
}
