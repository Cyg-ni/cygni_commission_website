<?php

namespace App\Models;

use Database\Factories\CommissionFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    /** @use HasFactory<CommissionFactory> */
    use HasFactory;

    protected $fillable = [
        'commissioner_name',
        'commissioner_email',
        'commissioner_discord',
        'commission_type',
        'budget',
        'deadline',
        'project_brief',
        'notes',
        'date_started',
        'payment_status',
        'phase',
    ];

    protected function casts(): array
    {
        return [
            'deadline' => 'date',
            'date_started' => 'date',
        ];
    }
}
