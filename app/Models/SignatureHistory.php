<?php

namespace App\Models;

use App\Enums\SignatureStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SignatureHistory extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'signature_id',
        'last_updated_at',
        'old_plan_id',
        'old_status'
    ];

    protected $casts = [        
        'old_status' => SignatureStatus::class
    ];

    public function signature() : BelongsTo
    {
        return $this->belongsTo(Signature::class);
    }
}