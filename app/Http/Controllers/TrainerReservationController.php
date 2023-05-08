<?php

namespace App\Http\Controllers;

use App\Models\TrainerReservation;
use Illuminate\Http\Request;

class TrainerReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reservations = TrainerReservation::all();

        $data = [];

        foreach ($reservations as $reservation) {
            $data[] = [
                'first_name' => $reservation->first_name,
                'last_name' => $reservation->last_name,
                'email' => $reservation->email,
                'phoneNumber' => $reservation->phoneNumber,
                'comment' => $reservation->comment,
                'res_date' => $reservation->res_date,
                'status' => $reservation->status,
                'TrainerName' => $reservation->HomeServicesName,
                // 'service_name' => isset($reservation->service) ? $reservation->service->name : "",
                'TrainerServiceId' => isset($reservation->service) ? $reservation->service->id : "",


            ];
        }
        return view('Dashboard.Reservation.TrainerReservation.TrainerReservation',compact('reservations'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TrainerReservation  $trainerReservation
     * @return \Illuminate\Http\Response
     */
    public function show(TrainerReservation $trainerReservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrainerReservation  $trainerReservation
     * @return \Illuminate\Http\Response
     */
    public function edit(TrainerReservation $trainerReservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TrainerReservation  $trainerReservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $data = TrainerReservation::findOrFail($id);

        $data->status = $request->status;

        $data->save();
        //-------------------------------
        // return view('admin.Reservation.homeReservation.index',compact('reservations'));

        // return redirect('/HomeServicesReservation');
        return redirect('TrainerReservation');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrainerReservation  $trainerReservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrainerReservation $trainerReservation)
    {
        //
    }
}
