<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\PersonalTrainerService;

class PersonalTrainer extends Model
{
    use SoftDeletes;
    use HasFactory;


    public function PersonalTrainerService(){
        return $this->hasMany(PersonalTrainerService::class);
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
