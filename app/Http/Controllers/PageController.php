<?php

namespace App\Http\Controllers;

use App\Models\Tours;
use App\Services\TourService;
use Illuminate\Http\Request;

class PageController extends Controller
{

    protected $tourService;

    public function __construct(TourService $tourService)
        {
            $this->tourService = $tourService;
        }

    public function index() {
        return view('auth/login');
    }

    public function signup() {
        return view('auth/signup');
    }

    public function home() {
        $tours = $this->tourService->getTourHome();
        // dd($tours);
        return view('pages/user/home', ['tours'=>$tours]);
    }
}
