<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'last_update';

    use HasFactory;
    protected $guarded = [];
    protected $table = 'shipments';
}
