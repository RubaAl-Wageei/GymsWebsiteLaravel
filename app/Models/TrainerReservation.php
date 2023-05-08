<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PersonalTrainerService;
use App\Models\User;
class TrainerReservation extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['first_name', 'last_name', 'UserId','phoneNumber','email','res_date','price','status','comment','TrainerServiceId','TrainerName','code'];

    public function PersonalTrainerService()
    {
        return $this->belongsTo(PersonalTrainerService::class,'TrainerId');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
}

}
