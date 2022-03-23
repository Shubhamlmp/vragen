<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AddQue;
use App\Models\AddAns;
use Session;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function registration()
    {
        return view("auth.registration");
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:5|max:12'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();

        if ($res) {
            return back()->with('success', 'You have registered successfully');
        } else {
            return back()->with('fail', 'Something wrong');
        }
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginID', $user->user_id);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'Wrong password');
            }
        } else {
            return back()->with('fail', 'Email not Registered.');
        }
    }

    public function dashboard()
    {
        // $data = array();
        // if (Session::has('loginID')) {
        //     $data = User::where('id', '=', Session::get('loginID'))->first();
        // }
        // return view('dashboard', compact('data'));
        return view('dashboard');
    }

    public function logout()
    {
        if (session()->has('loginID')) {
           session()->forget('loginID');
            return redirect('/login');
        }
    }

    public function view(Request $request){
        $search = $request['search'] ?? "";
        if($search != ""){
            $Questions = AddQue::where('add_question', 'LIKE', "%search%")->get();
        }
        else{
            $Questions = AddQue::all();
        }
        $data = compact('Questions', 'search');
        return view('questions-view')->with($data);
    }
}
