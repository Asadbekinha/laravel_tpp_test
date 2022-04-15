<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Domain\Banners\Resources\BannersResource;
use App\Domain\Banners\Models\Banner;
use Illuminate\Http\Request;

class BannersController extends Controller
{
    public function index(){
        $banners = BannersResource::collection(Banner::all());
        return $banners;
    }
}
