<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Status
 * @package App\Models
 */
class Status extends Model
{
    //

    protected $fillable = ['content'];

    
    //一对一关联用户表

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
