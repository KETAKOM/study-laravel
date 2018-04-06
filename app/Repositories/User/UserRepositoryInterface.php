<?php

namespace App\Repositories\User;

interface UserRepositoryInterface
{
    /**
     * IDで1レコードを取得
     *
     * @var int $id
     * @return object
     */
    public function getUserFirstById($id);
    
    /**
     * User一覧を取得
     *
     * @var string $name
     * @return object
     */
    public function getUserList();
    
    /**
     * User情報登録
     *
     * @var string $name
     * @return object
     */
    public function CreateUser($name);
    
    /**
     * User情報編集
     *
     * @var string $name
     * @return object
     */
    public function EditUser($id, $name);
    
    /**
     * User情報削除
     *
     * @var string $name
     * @return object
     */
    public function DeleteUser($id);
}