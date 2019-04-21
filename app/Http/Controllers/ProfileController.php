<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\User;

class ProfileController extends Controller
{
    public function index($slug){

     return view('profile.index');

 }


// public function task($slug){

//      return view('profile.task');

//  }











public function store()
{
        // dd(request()->all());
        // if ($data['gender'] == 'male') {

        //     $pic_path='male.ico';

        //  }
        //  else
        //  {
        //      $pic_path='female.ico';

        //  }
    User::create([
        'name' => request('name'),
        'email' => request('email'),
            // 'pic' => $pic_path,
        'password' => bcrypt(request('password'))
        ]);

    return redirect('/');

}
}
