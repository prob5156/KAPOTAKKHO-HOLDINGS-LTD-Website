<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'description',
        'manager',
        'status',
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class, 'department', 'name');
    }

    public function jobs()
    {
        return $this->hasMany(Job::class, 'department', 'name');
    }
}
