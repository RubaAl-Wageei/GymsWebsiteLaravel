<?php

namespace App\Http\Controllers;

use App\Models\PersonalTrainer;
use Illuminate\Http\Request;

class PersonalTrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Trainers=PersonalTrainer::all();
        return view('Dashboard.PersonalTrainer.Trainers',compact('Trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Dashboard.PersonalTrainer.CreateTrainer');
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
        $trainer_img = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/Images',$trainer_img);
        var_dump($request->file('upload_file'));

        // insert user
        $trainer = new PersonalTrainer();
        $trainer->Name = $request->name;
        $trainer->Email = $request->email;
        $trainer->Phone = $request->phone;
        $trainer->Description = $request->description;
        $trainer->WorkHour = $request->work_hours;
        $trainer->Image= $trainer_img;
        $trainer->save();
        return redirect('Trainers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonalTrainer  $personalTrainer
     * @return \Illuminate\Http\Response
     */
    public function show(PersonalTrainer $personalTrainer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonalTrainer  $personalTrainer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $trainer = PersonalTrainer::find($id);
        return view('Dashboard.PersonalTrainer.UpdateTrainer',compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PersonalTrainer  $personalTrainer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $trainer = PersonalTrainer::findOrFail($id);
        $trainer->Name = $request->name;
        $trainer->Email = $request->email;
        $trainer->Phone = $request->phone;
        $trainer->Description = $request->description;
        $trainer->WorkHour = $request->work_hours;
        if ($request->hasFile('image')) {
            $trainer_img = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/Images',$trainer_img);
            $trainer->Image = $trainer_img;
        }

        $trainer->save();

        return redirect('Trainers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonalTrainer  $personalTrainer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $trainer = PersonalTrainer::findorfail($id);
        $trainer->delete();
        return redirect()->route('Trainers.index');

    }
}
