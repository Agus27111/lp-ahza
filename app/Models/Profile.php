<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name',
        'title',
        'bio',
        'avatar',
        'linkedin_url',
        'github_url',
        'whatsapp_number',
        'tech_stack',
    ];

    protected $casts = [
        'tech_stack' => 'array',
    ];
}
