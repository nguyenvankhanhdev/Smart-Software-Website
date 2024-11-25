<?php

namespace App\Providers;

use App\Models\Tours;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use View;

class ViewComposerProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['index', 'frontend.tour.all-tour', 'frontend.tour.tour-detail'], function ($view) {
            $tours = Tour::query()
                ->leftJoin('chitiettour', 'tour.matour', '=', 'chitiettour.matour')
                ->leftJoin('diemdulich', 'chitiettour.madiemdulich', '=', 'diemdulich.madiemdulich')
                ->leftJoin('danhgia', 'tour.matour', '=', 'danhgia.matour')
                ->select('tour.*', 'diemdulich.tendiemdulich', DB::raw('AVG(danhgia.diemdanhgia) as avg_rating'))
                ->where('tour.tinhtrang', 1)
                ->groupBy('tour.matour')
                ->paginate(6);

            $view->with('tours', $tours);
        });

        View::composer('*', function ($view) {
            $destinationHeader = DiemDuLich::all();

            $view->with('destinationHeader', $destinationHeader);
        });

        View::composer('*', function ($view) {
            $listTours = LoaiTour::query()
                ->select('tenloai')->get();

            $view->with('listTours', $listTours);
        });
    }
}
