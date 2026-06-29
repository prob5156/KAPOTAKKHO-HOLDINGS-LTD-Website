<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'client',
        'start_date',
        'end_date',
        'status',
    ];

    public function clientData()
    {
        return $this->belongsTo(Client::class, 'client', 'company_name');
    }

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];
}
