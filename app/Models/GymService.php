<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Gym;

class GymService extends Model
{
    use SoftDeletes;
    use HasFactory;

    public function Gym(){
        return $this->belongsTo(Gym::class);
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
