<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class type_statuses extends Model
{
    protected $table='type_statuses';
    protected $fillable =['name'];
    protected $guarded =['id'];
    public $timestamps = false;
}
