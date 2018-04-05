<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Repositories\User\UserRepositoryInterface;

class UserController extends Controller
{
    public function __construct(UserRepositoryInterface $user_repository) {
      $this->user = $user_repository;
    }
    
    public function index() {
        $users = $this->user->getFirstRecordByName('test');
        
        if (View::exists('user')) {
            return view('user')->with('users', $users);
        } else {
            echo 'viewが見つかりませんでした。';
        }
        
    }
}
