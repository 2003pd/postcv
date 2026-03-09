<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CandidateContact extends Model
{
    protected $fillable = [
        'candidate_id',
        'company_name',
        'email',
        'phone'
    ];


public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
    
}
