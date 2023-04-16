<?php

namespace App\Http\Controllers;

use App\Models\GymService;
use Illuminate\Http\Request;

class GymServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $GymServices = GymService::all();
        return view('Dashboard.Services.GymServices.GymServices' , compact('GymServices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Dashboard.Services.GymServices.CreateGymService');
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
        $GymService_img = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/Images',$GymService_img);
        var_dump($request->file('upload_file'));

        // insert user
        $GymService = new GymService();
        $GymService->GymId = $request->Gym_id;
        $GymService->ServiceName = $request->Service_name;
        $GymService->ServiceDescription = $request->Service_description;
        $GymService->ServicePrice = $request->Service_price;
        $GymService->ServiceTime = $request->Service_time;
        $GymService->ServiceImage= $GymService_img;
        $GymService->save();
        return redirect('GymServices');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GymService  $gymService
     * @return \Illuminate\Http\Response
     */
    public function show(GymService $gymService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GymService  $gymService
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $GymService = GymService::find($id);
        return view('Dashboard.Services.GymServices.UpdateGymService',compact('GymService'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GymService  $gymService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $GymService = GymService::findOrFail($id);
        $GymService->GymId = $request->Gym_id;
        $GymService->ServiceName = $request->Service_name;
        $GymService->ServiceDescription = $request->Service_description;
        $GymService->ServicePrice = $request->Service_price;
        $GymService->ServiceTime = $request->Service_time;
        if ($request->hasFile('image')) {
            $GymService_img = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/Images',$GymService_img);
            $GymService->ServiceImage = $GymService_img;
        }

        $GymService->save();

        return redirect('GymServices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GymService  $gymService
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $GymService = GymService::findorfail($id);
        $GymService->delete();
        return redirect()->route('GymServices.index');
    }
}
