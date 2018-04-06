<?php

namespace App\Repositories\User;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    protected $user;

    /**
    * @param object $user
    */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * IDで1レコードを取得
     *
     * @var $id
     * @return object
     */
    public function getUserFirstById($id)
    {
        $user = $this->user
            ->where('id', $id)
            ->first();
    }
    
    /**
     * User一覧を取得
     *
     * @var string $name
     * @return object
     */
    public function getUserList()
    {
        return $this->user->all();
    }
    
    /**
     * User情報登録
     *
     * @var string $name
     * @return object
     */
    public function CreateUser($name)
    {
        $user = new User;
        $user->name = $name;
        $user->save();
    }
    
    /**
     * User情報編集
     *
     * @var string $name
     * @return object
     */
    public function EditUser($id, $name)
    {
        $user = $this->user->find($id);
        $user->name = $name;
        $user->save();
    }
    
    /**
     * User情報削除
     *
     * @var string $name
     * @return object
     */
    public function DeleteUser($id)
    {
        $user = $this->user->find($id);
        $user->delete();
    }
}