<?php

namespace App\Http\Controllers;

use App\Models\UserDetails;
use Illuminate\Http\Request;

class UserDetailsController extends Controller
{
    public function save(Request $request)
    {
        //dd($request->all());
        $userDetails = new UserDetails;
        $userDetails->fullnames = $request->fullnames;
        $userDetails->id_number = $request->id_number;
        $userDetails->dob = $request->dob;

        $userDetails->save();
        return back()->with(['success' => 'Saved']);
    }
    public function show()
    {
        return view('welcome')->with(['data' => UserDetails::all()]);
    }
    public function edit($id)
    {
        return view('edit')->with(['user' => UserDetails::where('id', $id)->get()]);
    }
    public function saveEdit(Request $request)
    {
        $user = UserDetails::where('id', $request->id)->first();
        if ($user) {
            $user->fullnames = $request->fullnames;
            $user->dob = $request->dob;
            $user->id_number = $request->id_number;

            $user->save();


            return redirect('/')->with('data', UserDetails::all());
        }
    }
    public function delete($id)
    {
        $user = UserDetails::where('id', $id);
        $user->delete();
        return redirect('/')->with('data', UserDetails::all());
    }
}
