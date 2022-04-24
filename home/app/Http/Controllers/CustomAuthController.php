<?php

namespace App\Http\Controllers;

use App\Notifications\WelcomeEmailNotification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Question;
use App\Models\Answer;
use App\Models\User;
use Carbon\Carbon;
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
            $user->notify(new WelcomeEmailNotification($user));
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
                $request->session()->put('loginID', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'Wrong password');
            }
        } else {
            return back()->with('fail', 'Email not Registered.');
        }
    }

    public function dashboard(Request $request)
    {

        return view('dashboard')->with('Questions',Question::simplePaginate(5));
    }

    public function logout()
    {
        if (session()->has('loginID')) {
            session()->forget('loginID');
            return redirect('/login');
        }
    }

    public function search(Request $request)
    {
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the add_question table
        $Questions = Question::query()
            ->where('add_question', 'LIKE', "%{$search}%")
            ->simplePaginate(5);

        // Return the search view with the resluts compacted
        return view('dashboard', compact('Questions'));
    }

    public function answer($que_id)
    {

        Question::find($que_id)->increment('views');
        // $id = $request->input('$que_id');
        // $Answers = AddAns::all();
        // return view('answer', compact('Answers'));
        // return view('answer')->with('Answers',AddAns::simplePaginate(1));
        $queA = Question::select('add_question')
                ->where('que_id', $que_id)
                ->first();

        $Answers = Answer::where('ans_Que_id', $que_id)->get();
        return view('answer', compact('Answers', 'queA'));
        // return view('answer')->with('Answers');
        // dd($queA);
    }
}
