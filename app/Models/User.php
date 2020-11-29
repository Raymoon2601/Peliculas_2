<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table='user';
    protected $fillable =['name','email','password','status_id','role_id'];
    protected $guarded =['id'];
    public $timestamps = false;
}
