<?php

namespace App\Http\Controllers\Api;

use App\Domain\News\Models\News;
use App\Domain\News\Requests\NewsRequest;
use App\Domain\News\Resources\NewsResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(NewsRequest $request){
        $news = NewsResource::collection(News::where('category_id', $request->category_id)->get());
        return $news;
    }
}
