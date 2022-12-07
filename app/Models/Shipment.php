<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    /**
     * Class Shipment
     *
     * @property string $id
     * @property Carbon $date_created
     * @property Carbon $last_update
     */

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'last_update';

    use HasFactory;
    protected $guarded = [];
    protected $table = 'shipments';
}
