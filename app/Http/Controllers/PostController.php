<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Repositories\Post\PostRepositoryInterface;

class PostController extends Controller
{
    public function __construct
    (
        PostRepositoryInterface $post_repository,
        Request $request
    ) {
        $this->post = $post_repository;
    }
    
    public function getSelfPostList(Request $request) {
        $user_id = intval($request->input('user_id'));

        return $this->post->getSelfPostListByUserId($user_id);
    }

    public function createapi(Request $request) {
        $user_id = intval($request->input('user_id'));
        $title = $request->input('title');
        $content = $request->input('content');

        $this->post->createPost($user_id, $title, $content);
    }
    
    public function editapi(Request $request) {
        $id = intval($request->input('id'));
        $user_id = intval($request->input('user_id'));
        $title = $request->input('title');
        $content = $request->input('content');

        $this->post->editPost($id, $user_id, $title, $content);
    }
    
    public function deleteapi(Request $request) {
        $id = $request->input('id');
        $user_id = $request->input('user_id');

        $this->post->deletePost($id);
    }
}
