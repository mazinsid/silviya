<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\details;
class offers extends Model
{
    use SoftDeletes;
    protected $fillable = ['name_ar','name_en','name_es','type_ar','type_en','type_es',
        'node_ar','node_en','node_es','price','image'];
    use HasFactory;

    public function details()
    {
        return $this->hasMany(details::class);
    }
    public function orders()
    {
        return $this->hasMany(orders::class);
    }

}
