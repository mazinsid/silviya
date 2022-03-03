<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class tourisms extends Model
{
    protected $fillable = ['name_ar','name_en','name_es' , 'description_ar' , 'description_en' , 'description_es','image'];
    use HasFactory;
    use SoftDeletes;
}
