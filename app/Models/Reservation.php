<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GymService;
use App\Models\User;

class Reservation extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = ['first_name', 'last_name', 'UserId','phoneNumber','email','res_date','price','status','comment','GymServiceId','GymName','code'];


    public function GymServices()
    {
        return $this->belongsTo(GymService::class,'GymServiceId');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
}
}
