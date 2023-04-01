<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\house_owners;
use App\Models\users;
use App\Models\Tenants;

class DashboardController extends Controller
{
    public function index(){
        // count the tenants from database
        // hello my name is Salman
        // salman khan
        $tenants = Tenants::count();
        $house_owners= house_owners::count();
        // compact the tenants
        $data = compact('tenants','house_owners');
        return view('frontend.dashboard')->with($data);
    }
}
