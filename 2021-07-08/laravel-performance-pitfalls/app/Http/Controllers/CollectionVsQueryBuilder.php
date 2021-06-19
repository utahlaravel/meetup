<?php

namespace App\Http\Controllers;

use Barryvdh\Debugbar\Facade as Debugbar;

class CollectionVsQueryBuilder extends Controller
{
    public function __invoke()
    {
        Debugbar::startMeasure('render', 'Sheng is cool');
        Debugbar::stopMeasure('render');

        return true;
    }
}
