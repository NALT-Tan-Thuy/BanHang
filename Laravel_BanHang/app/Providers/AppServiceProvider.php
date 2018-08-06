<?php

namespace App\Providers;

use App\Cart;
use DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Session;

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
            $slideshare = DB::table('slide')->get();
            $thuonghieushare = DB::table('thuonghieu')->take(4)->get();
            $loaisanphamshare = DB::table('loaisanpham')->take(4)->get();
            $sanphamshare = DB::table('sanpham')->get();
            $loaispkhacshare = DB::table('loaisanpham')->where('id', '>', 4)->get();
            $loaispallshare = DB::table('loaisanpham')->get();
            $view->with(compact('trangchushare', 'slideshare', 'thuonghieushare', 'loaisanphamshare', 'sanphamshare', 'loaispkhacshare', 'loaispallshare'));
        });

        view()->composer('*', function ($view) {
            // giỏ hàng
            if (Session('cart')) {
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart' => Session::get('cart'), 'product_cart' => $cart->items, 'totalPrice' => $cart->totalPrice, 'totalQty' => $cart->totalQty]);
            }
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
