<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Model\User;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        
        if (View::exists('user')) {
            return view('user')->with('users', $users);
        } else {
            echo 'viewが見つかりませんでした。';
        }
        
    }
}
