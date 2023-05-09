<?php

namespace App\Http\Controllers;

use App\Models\PersonalTrainerService;
use App\Models\TrainerReservation;
use App\Models\PersonalTrainer;
use App\Models\Discount;

use Illuminate\Http\Request;

class UserTrainerBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $services = PersonalTrainerService::all();

        // return view('admin.Reservation.salonReservation.create',['services'=>$services]);
        return view('Website.TrainerBook',compact('services'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function sale($ServicePrice,$code)
      {

    //       $discount = Discount::where('code', $code)->first();

    //       if ($discount) {
    //           $discounted_price = $ServicePrice - ($ServicePrice * ($discount->discount_percentage / 100));
    //       } else {
    //           $discounted_price = $ServicePrice;
    //       }
    //   return $discounted_price;
        }


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
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phoneNumber' => ['required', 'max:10', 'min:10'],
            'res_date' => ['required'],
        ]);



        $code=$request->code;
        $data = PersonalTrainerService::findOrFail($request->TrainerServiceId);
        // $price = $this->sale($data->ServicePrice,$code);
        $price = $data->ServicePrice;

// dd($request->services_id);
        $user = $request->user_id;
        $reservation=new TrainerReservation();
        $reservation->first_name=$request->first_name;
        $reservation->last_name=$request->last_name;
        $reservation->phoneNumber=$request->phoneNumber;
        $reservation->email=$request->email;
        $reservation->UserId=$user;
        $reservation->TrainerServiceId=$request->TrainerServiceId;
        $reservation->status='Pending';
        $reservation->code=$request->code;
        $reservation->comment=$request->comment;
        $reservation->res_date=$request->res_date;
        $reservation->TrainerName=$request->TrainerName;
        $reservation->price=$price;
        $reservation->save();
        return redirect('TrainerUser')->with('success', 'Reservation Successful,thank you for booking.');
        // return redirect()->route('/SalonUser')->with('success', 'Reservation Successful,thank you for booking.');][]


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $PersonalTrainer = PersonalTrainer::find($id);
        // $services = PersonalTrainerService::all();
        $services = PersonalTrainerService::where('TrainerId', $id)->get();
        // dd($salon);
        return view('Website.TrainerBook',compact('PersonalTrainer','services'));
        // dd($salon);
        // return view('Website.TrainerBook',compact('PersonalTrainer','services'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
