<?php

namespace App\Http\Controllers;
use App\Models\PersonalTrainer;
use Illuminate\Http\Request;

class TrainerUserController extends Controller
{
    //
    public function index()
    {
         $Trainers=PersonalTrainer::all();

         return view('Website.PersonalTrainers',compact('Trainers'));


}
}
