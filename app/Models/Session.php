<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $fillable = [
        'dispensor_id',
        'user_id',
        'qty_approved',
        'qty_dispensed',
        'status'
    ];

    public function dispensor()
    {
        return $this->belongsTo(Dispensor::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sessionLogs()
    {
        return $this->hasMany(SessionLog::class);
    }

}
