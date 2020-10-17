<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

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
        $tp = array(
            1 => 'SD',
            2 => 'SMP',
            3 => 'SMA/SMK',
        );

        $jk = array(
            "L" => 'Laki-laki',
            "P" => 'Perempuan',
        );

        $jb = array(
            1 => 'Siswa Berprestasi',
            2 => 'Siswa Kurang Mampu',
        );

        View::share('tp', $tp);
        View::share('jk', $jk);
        View::share('jb', $jb);
    }
}
