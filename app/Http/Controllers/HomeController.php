<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Gym;
use App\Models\GymService;
use App\Models\Reservation;
use App\Models\PersonalTrainer;
use App\Models\PersonalTrainerService;
use App\Models\TrainerReservation;
use App\Models\Contact;
use Carbon\Carbon;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {

        $totalAllUser = User::count();
        $totalUser = User::where('role', 'User')->count();
        $totalAdmin = User::where('role', 'Admin')->count();
        $totalCategory =Category::count();
        $totalGym =Gym ::count();
        $totalGymService =GymService::count();
        $totalContact = Contact::count();
        $totalTrainer = PersonalTrainer::count();
        $totalTrainerService = PersonalTrainerService::count();

        $todayDate = Carbon::now()->format('d-m-Y');
        $thisMonth = Carbon::now()->format('m');

        $totalGymReservation = Reservation::count();
        $todayGymReservation = Reservation::whereDate('created_at', $todayDate)->count();
        $thisMonthGymReservation = Reservation::whereMonth('created_at', $thisMonth)->count();

        $totalTrainerReservation = TrainerReservation::count();
        $todayTrainerReservation = TrainerReservation::whereDate('created_at', $todayDate)->count();
        $thisMonthTrainerReservation = TrainerReservation::whereMonth('created_at', $thisMonth)->count();

        // dd($totalAllUser);

        return view('Dashboard.index',
         ['totalUser' => $totalUser,
          'totalAllUser' => $totalAllUser,
          'totalAdmin' => $totalAdmin,
          'totalCategory' => $totalCategory,
          'totalGym' => $totalGym,
          'totalGymService' => $totalGymService,
          'totalContact' => $totalContact,
          'totalTrainer' => $totalTrainer,
          'totalTrainerService' => $totalTrainerService,
          'totalGymReservation' => $totalGymReservation,
          'todayGymReservation' => $todayGymReservation,
          'thisMonthGymReservation' => $thisMonthGymReservation,
          'totalTrainerReservation' => $totalTrainerReservation,
          'todayTrainerReservation' => $todayTrainerReservation,
          'thisMonthTrainerReservation' => $thisMonthTrainerReservation
        ]);

}

}
