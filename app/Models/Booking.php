<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function driver()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function services()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function fleet()
    {
        return $this->belongsTo(Fleet::class, 'fleet_id');
    }
}
