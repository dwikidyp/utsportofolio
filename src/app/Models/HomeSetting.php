<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSetting extends Model
{
    protected $fillable = [
    'hero_label',
    'hero_title',
    'hero_description',
    'button_project_text',
    'button_project_link',
    'button_contact_text',
    'button_contact_link',
    'about_description',
    'skills',
    'services',
    'cta_title',
    'cta_description',
    ];

    protected $casts = [
        'skills' => 'array',
        'services' => 'array',
    ];

    public static function content()
    {
        return static::first() ?? static::create([
        'hero_label' => 'DESIGNER MULTIDISIPLIN',
        'hero_title' => 'Membangun Masa Depan Melalui Presisi Visual.',
    ]);
    }
}

