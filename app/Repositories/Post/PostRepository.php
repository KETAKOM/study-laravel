<?php

namespace App\Repositories\Post;
use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{
    protected $post;

    /**
    * @param object $post
    */
    public function __construct(Post $post)
    {
        $this->$post = $post;
    }

    /**
     * 自分の投稿情報取得(ユーザーIDごと)
     *
     * @var string $name
     * @return object
     */
    public function getSelfPostListByUserId($user_id)
    {
        return Post::query()
            ->where('user_id', $user_id)
            ->where('deleted_at', NULL)
            ->orderBy('updated_at', 'desc')
            ->get();
    }

    /**
     * Post情報登録
     *
     * @var string $name
     * @return object
     */
    public function createPost($user_id, $title, $content)
    {
        $post = new Post;
        $post->user_id = $user_id;
        $post->title = $title;
        $post->content = $content;
        $post->save();
    }

    /**
     * Post情報編集
     *
     * @var string $name
     * @return object
     */
    public function editPost($id, $user_id, $title, $content)
    {
        $post = Post::find($id);
        $post->title = $title;
        $post->content = $content;
        $post->save();
    }

    /**
     * Post情報削除
     *
     * @var string $name
     * @return object
     */
    public function deletePost($id)
    {
        $post = Post::find($id);
        $post->delete();
    }
}