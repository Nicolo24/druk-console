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
}
