<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('*', function ($view) {
            $trangchushare = DB::table('trangchu')->first();
            $slideshare = DB::table('slide')->take(6)->get();
            $thuonghieushare = DB::table('thuonghieu')->take(4)->get();
            $loaisanphamshare = DB::table('loaisanpham')->take(4)->get();
            $sanphamshare = DB::table('sanpham')->get();
            $loaispkhacshare = DB::table('loaisanpham')->where('id','>',4)->get();
            $loaispallshare = DB::table('loaisanpham')->get();
            $view->with(compact('trangchushare','slideshare','thuonghieushare','loaisanphamshare','sanphamshare','loaispkhacshare','loaispallshare'));
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
