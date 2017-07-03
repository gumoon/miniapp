<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //指定表
    protected $table = 'shops';

    //指定主键
    protected $primaryKey = 's_id';

    const CREATED_AT = 's_createTime';
    const UPDATED_AT = 's_updateTime';

}
