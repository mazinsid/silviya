<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class orders extends Model
{
    protected $fillable =[
        'name' , 'email', 'country' , 'phone' , 'start' , 'node' , 'offer_id'
    ];
    use SoftDeletes;
    use HasFactory;


    public function offer()
    {
        return $this->belongsTo(offers::class);
    }
}
