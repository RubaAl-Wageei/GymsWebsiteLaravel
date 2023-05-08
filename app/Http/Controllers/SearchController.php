<?php

namespace App\Http\Controllers;

use App\Models\Gym;
use App\Models\PersonalTrainer;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function searchGym(Request $request)
    {
        $search = $request->search;
        $Gyms = Gym::where('name', 'like', '%'.$search.'%')
            ->orWhere('Description', 'like', '%'.$search.'%')
            ->get();
            return view('Website.SearchGym',compact('Gyms'));
        // return view('user.Salonat', ['collection' =>$salons]);
    }


    public function searchTrainer(Request $request)
    {
        $search = $request->search;
        $PersonalTrainers = PersonalTrainer::where('name', 'like', '%'.$search.'%')
            ->orWhere('Description', 'like', '%'.$search.'%')
            ->get();
        return view('Website.SearchTrainer',compact('PersonalTrainers'));
}


}
