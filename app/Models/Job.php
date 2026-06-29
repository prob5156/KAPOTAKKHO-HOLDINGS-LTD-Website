<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'department',
        'location',
        'type',
        'description',
        'requirements',
        'status',
        'deadline',
    ];

    public function departmentData()
    {
        return $this->belongsTo(Department::class, 'department', 'name');
    }
    
    protected $casts = [
        'deadline' => 'date',
    ];
}
