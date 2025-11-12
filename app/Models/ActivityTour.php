<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityTour extends Model
{
    use HasFactory;

    protected $table = 'activity_tour';

    protected $fillable =
    [
        'tour_id',
        'name_activity',
        'description',
        'image_url',
    ];

    public function tour() {
        return $this->belongsTo(Tours::class, 'tour_id');
    }
}
