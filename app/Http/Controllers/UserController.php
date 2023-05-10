<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users= User::all();
        // return $users ;
        return view('Dashboard.User.Users' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Dashboard.User.CreateUser');
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
        $user_img = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/Images',$user_img);
        var_dump($request->file('upload_file'));

        // insert user
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->phone = $request->phone;
        $users->address = $request->address;
        $users->password = Hash::make($request->password);
        // $users->password = $request->password;
        $users->User_image = $user_img;
        $users->Role = $request->role;
        $users->save();
        // return view('Users');
        return redirect('user');
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
        $user = User::find($id);
        if (! $user) {
            return redirect('user');
        }
        return view('Dashboard.User.UpdateUser',compact('user'));

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
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        // $user->password = $request->password;
        // $user->User_Image = $user_img;

        if ($request->hasFile('image')) {
            $user_img = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/Images',$user_img);
            $user->User_image = $user_img;
        }
        // $user->role = $request->role;
        $user->save();
        return redirect('Account');
        // return view('Dashboard.ProfileAdmin');


        // if (auth()->user()->Role!='Admin'){
        //     return view('Website.ProfileUser');
        // }else{
        //     return view('Dashboard.ProfileAdmin');
        // };

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
        $user = User::find($id);
        $user->delete();
        // return back()->with('success','User deleted successfully');
        // return redirect(route('user'));
        return redirect()->route('user.index');
        // return redirect('user');
        // return view('Users');
    }
}
