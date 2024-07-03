<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispensor extends Model
{
    use HasFactory;

    protected $fillable = [
        'serialNumber',
        'productName',
        'productDescription',
        'productPrice',
        'productPhotoFilename',
        'productPhoto'
    ];

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }

    // attribute can_dispense = if any session is in course
    public function getCanDispenseAttribute()
    {
        return $this->sessions()->where('status', 'in-course')->exists();
    }

}
