<?php
namespace App\Repositories;

use App\Models\Tours;
use App\Repositories\Interfaces\TourRepositoryInterface;

class TourRepository implements TourRepositoryInterface  {
    public function getThreeLastest() {
        return Tours::select('id', 'name','price')
                        ->with('oneImage:tour_id,image_url')
                        ->latest()
                        ->take(3)
                        ->get();
    }
}


?>
