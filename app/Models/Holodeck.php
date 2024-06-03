<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holodeck extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'serial_no', 'sw_version'];
}
