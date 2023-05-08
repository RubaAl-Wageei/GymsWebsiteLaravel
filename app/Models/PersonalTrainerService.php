<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\PersonalTrainer;
use App\Models\TrainerReservation;


class PersonalTrainerService extends Model
{
    use SoftDeletes;
    use HasFactory;

    public function PersonalTrainer(){
        return $this->belongsTo(PersonalTrainer::class);
    }

    public function TrainerReservation(){
        return $this->hasMany(TrainerReservation::class);
}

    protected $fillable = [
        'TrainerId',
        'ServiceName',
        'ServiceDescription',
        'ServicePrice',
        'ServiceTime',
        'ServiceImage',

    ];
}
