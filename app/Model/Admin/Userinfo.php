<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
    //
    protected $table = 'userinfo';

    protected $primaryKey = 'id';

    public $timestamps= false;

    // protected $fillable = ['uname','password','age','class'];
    
    protected $guarded = [];
}
