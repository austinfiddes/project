<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {
    	/*$data = [
    		'name' => 'austin',
		    'email' => 'elon@test.com',
		    'password' => 'password',
	    ];*/
    	/*User::create($data);*/

    	// 'create' method/mass assignment
    	/*$data = [
    		'name' => 'austin',
		    'email' => 'austin@test.com',
		    'password' => bcrypt('password'),
	    ];
    	User::create($data);*/

    	// eloquent insert with password encryption
    	/*$user = new User();
    	$user->name = 'Austin';
    	$user->email = 'austin@agfinity.com';
    	$user->password = bcrypt('password123');
    	$user->save();*/

	    // eloquent delete
	    /*User::where('id', 2)->delete();*/

	    // eloquent update
	    /*User::where('id', 3)->update(['name' => 'Austinnnn']);*/

	    // eloquent select
	    /*$user = User::all();
	    return $user;*/

    	// insert
	    /*DB::table('users')->insert([
	    	'name' => 'Austin',
		    'email' => 'austin@agfinity.com',
		    'password' => 'password123'
	    ]);*/

	    // update
	    /*DB::table('users')
		    ->where('id', 1)
		    ->update(['password' => 'password']);*/

	    // delete
	    /*DB::table('users')->where('name', '=', 'Austin')->delete();*/

	    // select
	    /*$users = DB::table('users')
		    ->select('*')
		    ->get();
	    return $users;*/

	    // truncate table
	    /*DB::table('users')->truncate();*/

    	return view('home');
    }
}
