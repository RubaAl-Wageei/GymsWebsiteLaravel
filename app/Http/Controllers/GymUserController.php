<?php

namespace App\Http\Controllers;
use App\Models\Gym;
use Illuminate\Http\Request;

class GymUserController extends Controller
{
    //
    public function index()
    {
         $Gyms=Gym::all();

         return view('Website.Gyms',compact('Gyms'));


}

}
