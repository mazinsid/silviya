<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\offers;

class details extends Model
{
    protected $fillable = ['title_ar' ,'title_en' ,'title_es'
        , 'description_ar' , 'description_en' , 'description_es' , 'offer_id' ];
    use HasFactory;

    public function offer()
    {
        return $this->belongsTo(offers::class);
    }
}
