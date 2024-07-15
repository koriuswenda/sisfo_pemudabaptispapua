<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Gereja extends Model
{
    use HasFactory, SoftDeletes;
    use HasRoles;

    protected $guarded = ['id'];

    public function pemuda()
    {
        return $this->hasMany(Pemuda::class);
    }

    public function scopeDraft(Builder $query): void
    {
        $query->whereNull('published_at');
    }

    public function scopePublished(Builder $query): void
    {
        $query->whereNotNull('published_at');
    }

    public function wilayah(): BelongsTo
    {
        return $this->belongsTo(Wilayah::class, 'wilayah_id');
    }
}
