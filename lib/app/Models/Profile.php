<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'vp_profile';
    protected $primaryKey = 'prol_id';
    protected $guarded =[];
}
