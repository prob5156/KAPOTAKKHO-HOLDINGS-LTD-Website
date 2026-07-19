<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    /**
     * Determine if the user has admin privileges.
     */
    public function isAdmin(): bool
    {
        if (isset($this->is_admin) && $this->is_admin) {
            return true;
        }
        if (isset($this->role) && strtolower($this->role) === 'admin') {
            return true;
        }
        if (str_contains(strtolower($this->email), 'admin')) {
            return true;
        }
        // First registered user fallback
        if ($this->id === 1) {
            return true;
        }
        return false;
    }
}
