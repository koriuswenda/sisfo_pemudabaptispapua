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

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function jenisKelamin(): BelongsTo
    {
        return $this->belongsTo(JenisKelamin::class, 'jenis_kelamin_id');
    }

    public function gereja(): BelongsTo
    {
        return $this->belongsTo(Gereja::class, 'gereja_id');
    }

    public function scopeDraft(Builder $query): void
    {
        $query->whereNull('published_at');
    }

    public function scopePublished(Builder $query): void
    {
        $query->whereNotNull('published_at');
    }
}
