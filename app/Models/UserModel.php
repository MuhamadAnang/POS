<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Casts\Attribute;

class UserModel extends Authenticatable implements JWTSubject
{
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    protected $table = "m_user";
    protected $primaryKey = "user_id";
    protected $fillable =
    [
        'level_id',
        'username',
        'nama',
        'password',
        'image',
    ];
    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($image) => url('/storage/posts/' . $image),
        );
    }

    public function stok(): HasMany
    {
        return $this->hasMany(StokModel::class, 'user_id', 'user_id');
    }

    public function transaksi(): HasMany
    {
        return $this->hasMany(TransaksiModel::class, 'user_id', 'user_id');
    }

    public function updatedTransaksi(): HasMany
    {
        return $this->hasMany(TransaksiModel::class, 'updated_by', 'user_id');
    }
}
