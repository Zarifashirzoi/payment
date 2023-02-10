<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\General;
use App\Models\Product;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder()->limit(4)->get();
        $testimonials = Testimonial::inRandomOrder()->limit(2)->get();
        $about = General::whereType('about')->first();
        $banner = General::whereType('banner')->first();
        return view('home.index', compact(
            [
                'products', 
                'testimonials',
                'about', 'banner'
            ])
        );
    }
}
