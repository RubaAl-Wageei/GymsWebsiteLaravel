<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Gym;
use App\Models\Reservation;


class GymService extends Model
{
    use SoftDeletes;
    use HasFactory;

    public function Gym(){
        return $this->belongsTo(Gym::class);
    }

    public function GymReservation(){
        return $this->hasMany(Reservation::class);
}

    protected $fillable = [
        'GymId',
        'ServiceName',
        'ServiceDescription',
        'ServicePrice',
        'ServiceTime',
        'ServiceImage',

    ];




}
