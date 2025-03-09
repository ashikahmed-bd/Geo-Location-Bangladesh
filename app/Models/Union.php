<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Union extends Model
{
    use HasFactory;

    protected $fillable = ['upazila_id', 'name', 'bn_name', 'latitude', 'longitude', 'url'];

    public function upazila(): BelongsTo
    {
        return $this->belongsTo(Upazila::class);
    }
}
