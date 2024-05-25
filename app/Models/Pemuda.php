<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pemuda extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    // public function gereja(): BelongsTo
    // {
    //     return $this->belongsTo(Gereja::class, 'gereja_id');
    // }
}
