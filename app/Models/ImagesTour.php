<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesTour extends Model
{
    use HasFactory;

    protected $table = 'images_tour';

    protected $fillable =
    [
        'tour_id',
        'caption',
        'image_url',
    ];

    public function tour() {
        return $this->belongsTo(Tours::class, 'tour_id');
    }
}
