<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'posts';
    
    /*
     * softDeleteの有効化
     *
     * @var string
     */
    protected $dates = ['deleted_at'];
}
