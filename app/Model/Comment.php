<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //1.关联的数据表
    public $table = 'comment';

    //2.主键
    public $primaryKey = 'id';

    //3.允许批量操作的字段
//    public $fillable = ['user_name','user_pass','phone'];
    public $guarded = [];
//    4.是否维护crated_at和updated_at字段
    public $timestamps = false;
}
