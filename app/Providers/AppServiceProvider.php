<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\categoryPrDetail;
use App\Models\categoryPr;
use App\Models\Product;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('headerPr', function ($view){
            $category = categoryPr::with('category_Pr_Detail')->where('idCategoryPr', '>=', 5)->get();
            $categorys = categoryPr::with('category_Pr_Detail')->where('idCategoryPr', '>=', 5)->get();
            $view->with('category', $category)->with('categorys', $categorys);
        });
    }
}
