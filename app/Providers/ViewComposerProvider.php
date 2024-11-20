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
            $tours = Tours::query()
                ->leftJoin('tour_details', 'tours.id', '=', 'tour_details.tour_id')
                ->select('tours.*')
                ->where('tours.status', 1)
                ->groupBy('tours.id')
                ->paginate(6);

            $view->with('tours', $tours);
        });
    }
}
