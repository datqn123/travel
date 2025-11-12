<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tours extends Model
{
    use HasFactory;

    protected $table = 'tours';

    protected $fillable =
    [
        'name',
        'agency',
        'start_location',
        'schedule',
        'description',
        'price',
    ];

    public function activities() {
        return $this->hasMany(ActivityTour::class, 'tour_id');
    }

    public function images() {
        return $this->hasMany(ImagesTour::class, 'tour_id');
    }

    public function oneImage() {
        return $this->hasOne(ImagesTour::class, 'tour_id');
    }
}
