<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\PersonalTrainer;

class PersonalTrainerService extends Model
{
    use SoftDeletes;
    use HasFactory;

    public function PersonalTrainer(){
        return $this->belongsTo(PersonalTrainer::class);
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
