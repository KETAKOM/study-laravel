<?php

namespace App\Repositories\Post;

interface PostRepositoryInterface
{
    /**
     * 自分の投稿情報取得(ユーザーIDごと)
     *
     * @var int $user_id
     * @return object
     */
    public function getSelfPostListByUserId($user_id);

    /**
     * Post情報登録
     *
     * @var int $user_id
     * @var string $name
     * @var string $content
     * @return object
     */
    public function createPost($user_id, $title, $content);

    /**
     * Post情報編集
     *
     * @var int $id
     * @var int $user_id
     * @var string $title
     * @var string $content
     * @return object
     */
    public function editPost($id, $user_id, $title, $content);

    /**
     * Post情報削除
     *
     * @var int $id
     * @return object
     */
    public function deletePost($id);
}