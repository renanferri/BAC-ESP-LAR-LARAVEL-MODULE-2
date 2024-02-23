<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory, SoftDeletes, HasUuids;
    
    protected $fillable = [
        'user_id',
        'document',
        'birthdate'
    ];

    protected $casts = [
        'birthdate' => 'datetime'
    ];

    public function uniqueIds()
    {
        return ['uuid'];
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function signatures() : HasMany
    {
        return $this->hasMany(Signature::class);
    }
}
