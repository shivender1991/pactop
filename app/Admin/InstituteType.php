<?php

namespace App\admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class InstituteType extends Model
{
    protected $fillable = [
        'name', 'code', 'status', 'created_by', 'updated_by'
       ];
}
