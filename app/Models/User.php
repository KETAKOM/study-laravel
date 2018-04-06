<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;
    
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'users';
    
    /*
     * softDeleteの有効化
     *
     * @var string
     */
    protected $dates = ['deleted_at'];
}
