<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'profession_id',
        'location_id',
        'service_id',
        'nationality_id'
    ];

    public function profession(){
        return $this->belongsTo(Profession::class);
    }

    public function location(){
        return $this->belongsTo(Location::class);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function nationality(){
        return $this->belongsTo(Nationality::class);
    }
}
