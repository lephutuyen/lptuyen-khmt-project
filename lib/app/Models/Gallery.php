<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'vp_gallery';
    protected $primaryKey = 'gal_id';
    protected $guarded =[];
}
