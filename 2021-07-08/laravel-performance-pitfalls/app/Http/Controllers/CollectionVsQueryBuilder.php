<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\Debugbar\Facade as Debugbar;
use Illuminate\Http\Response;

class CollectionVsQueryBuilder extends Controller
{
    public function __invoke(): Response
    {
        Debugbar::measure(
            'Count Users > Collection',
            fn() => User::all()->count()
        );
        Debugbar::measure(
            'Count Users > Database',
            fn() => User::count()
        );

        //

        Debugbar::measure(
            'Get Newest User > Collection',
            fn() => User::all()->sortByDesc('created_at')->first()
        );
        Debugbar::measure(
            'Get Newest User > Database',
            // ::latest() is a shortcut, using orderByDesc mimic code sample
            fn() => User::orderByDesc('created_at')->first()
        );

        //

        Debugbar::measure(
            'Sum of User IDs > Collection',
            fn() => User::all()->sum('id')
        );
        Debugbar::measure(
            'Sum of User IDs > Database',
            fn() => User::sum('id')
        );

        return \response()->make('Done');
    }
}
