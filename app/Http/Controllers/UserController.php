<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Repositories\User\UserRepositoryInterface;

class UserController extends Controller
{
    public function __construct
    (
        UserRepositoryInterface $user_repository,
        Request $request
    ) {
        $this->user = $user_repository;
    }
    
    public function index() {
        $users = $this->user->getUserList();
        
        if (View::exists('User.user')) {
            return view('User.user')->with('users', $users);
        } else {
            echo 'viewが見つかりませんでした。';
        }
    }
    
    public function create() {
        $users = $this->user->getUserList();
        
        if (View::exists('User.user')) {
            return view('User.create')->with('users', $users);
        } else {
            echo 'viewが見つかりませんでした。';
        }
    }
    
    public function edit() {
        $users = $this->user->getUserList();
        
        if (View::exists('User.user')) {
            return view('User.edit')->with('users', $users);
        } else {
            echo 'viewが見つかりませんでした。';
        }
    }
    
    public function delete() {
        $users = $this->user->getUserList();
        
        if (View::exists('User.user')) {
            return view('User.delete')->with('users', $users);
        } else {
            echo 'viewが見つかりませんでした。';
        }
    }
    
    public function createapi(Request $request) {
        $name = $request->input('name');
        $this->user->CreateUser($name);
    }
    
    public function editapi(Request $request) {
        $id = $request->input('id');
        $name = $request->input('name');
        $this->user->EditUser($id, $name);
    }
    
    public function deleteapi(Request $request) {
        $id = $request->input('id');
        $this->user->DeleteUser($id);
    }
}
