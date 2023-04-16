<?php

namespace App\Http\Controllers;

use App\Models\PersonalTrainerService;
use Illuminate\Http\Request;

class PersonalTrainerServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $TrainerServices = PersonalTrainerService::all();
        return view('Dashboard.Services.PersonalTrainerServices.TainerServices' , compact('TrainerServices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Dashboard.Services.PersonalTrainerServices.CreateTrainerService');
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
        $TrainerService_img = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/Images',$TrainerService_img);
        var_dump($request->file('upload_file'));

        // insert user
        $TrainerService = new PersonalTrainerService();
        $TrainerService->TrainerId = $request->Trainer_id;
        $TrainerService->ServiceName = $request->Service_name;
        $TrainerService->ServiceDescription = $request->Service_description;
        $TrainerService->ServicePrice = $request->Service_price;
        $TrainerService->ServiceTime = $request->Service_time;
        $TrainerService->ServiceImage= $TrainerService_img;
        $TrainerService->save();
        return redirect('TrainerServices');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonalTrainerService  $personalTrainerService
     * @return \Illuminate\Http\Response
     */
    public function show(PersonalTrainerService $personalTrainerService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonalTrainerService  $personalTrainerService
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $TrainerService = PersonalTrainerService::find($id);
        return view('Dashboard.Services.PersonalTrainerServices.UpdateTrainerService',compact('TrainerService'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PersonalTrainerService  $personalTrainerService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $TrainerService = PersonalTrainerService::findOrFail($id);
        $TrainerService->TrainerId = $request->Trainer_id;
        $TrainerService->ServiceName = $request->Service_name;
        $TrainerService->ServiceDescription = $request->Service_description;
        $TrainerService->ServicePrice = $request->Service_price;
        $TrainerService->ServiceTime = $request->Service_time;
        if ($request->hasFile('image')) {
            $TrainerService_img = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/Images',$TrainerService_img);
            $TrainerService->ServiceImage = $TrainerService_img;
        }

        $TrainerService->save();

        return redirect('TrainerServices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonalTrainerService  $personalTrainerService
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $TrainerService = PersonalTrainerService::findorfail($id);
        $TrainerService->delete();
        return redirect()->route('TrainerServices.index');
    }
}
