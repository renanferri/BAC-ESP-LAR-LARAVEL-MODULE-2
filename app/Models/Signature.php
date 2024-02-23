<?php

namespace App\Models;

use App\Enums\SignatureStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Signature extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'client_id',
        'plan_id',
        'status'
    ];

    protected $casts = [
        'status' => SignatureStatus::class
    ];

    public function client() : BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function plan() : BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }

    public function transactions() : HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    public function signatureHistories() : HasMany
    {
        return $this->hasMany(SignatureHistory::class);
    }
}
