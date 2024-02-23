<?php

namespace App\Models;

use App\Enums\TransactionStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'total_price',
        'signature_id',
        'status'        
    ];

    protected $casts = [        
        'status' => TransactionStatus::class
    ];

    public function signature() : BelongsTo
    {
        return $this->belongsTo(Signature::class);
    }
}
