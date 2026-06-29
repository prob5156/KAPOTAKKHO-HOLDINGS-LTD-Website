<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'department',
        'position',
        'join_date',
        'status',
    ];

    public function departmentData()
    {
        return $this->belongsTo(Department::class, 'department', 'name');
    }

    protected $casts = [
        'join_date' => 'date',
    ];
}
