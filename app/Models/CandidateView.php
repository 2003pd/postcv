<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CandidateView extends Model
{
    protected $fillable = [
        'candidate_id',
        'company_name',
        'email',
        'phone'
    ];
      // ✅ relationship
    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
