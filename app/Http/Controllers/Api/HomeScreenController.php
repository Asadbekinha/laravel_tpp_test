<?php

namespace App\Http\Controllers\Api;

use App\Domain\Banners\Models\Banner;
use App\Domain\Banners\Resources\BannersResource;
use App\Domain\Indicators\Models\Indicator;
use App\Domain\Indicators\Resources\IndicatorsResource;
use App\Domain\Menus\Models\Menu;
use App\Domain\News\Models\News;
use App\Domain\News\Resources\NewsResource;
use App\Domain\PowerStatistics\Models\PowerStatistic;
use App\Domain\PowerStatistics\Resources\PowerStatisticsResource;
use App\Domain\UsefullSites\Models\UsufullSite;
use App\Domain\UsefullSites\Resources\UsefullLinksResource;
use App\Http\Controllers\Controller;
use App\Http\Resources\MenuResource;
use Illuminate\Http\Request;

class HomeScreenController extends Controller
{
    public function getUsefullLinks(){
        $links = UsufullSite::all();
        return UsefullLinksResource::collection($links);
    }
    public function getIndicators(){
        $indicators = Indicator::all();
        return IndicatorsResource::collection($indicators);
    }
    public function getNews(Request $request){
        $news = NewsResource::collection(News::where('category_id', $request->category_id)->get());
        return $news;
    }
    public function getBanners(){
        $banners = BannersResource::collection(Banner::all());
        return $banners;
    }
    public function getStatistics(){
        return PowerStatisticsResource::collection(PowerStatistic::all());
    }
    public function getMenus(){
        return MenuResource::collection(Menu::where('parent_id',null)->get());
    }
}
