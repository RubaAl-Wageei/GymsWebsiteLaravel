<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\GymService;

class Gym extends Model
{
    use SoftDeletes;
    use HasFactory;


    public function GymService(){
        return $this->hasMany(GymService::class);
    }

    protected $fillable = [
        'Name',
        'Email',
        'Phone',
        'Description',
        'Work Hour',
        'Image',
    ];
}
