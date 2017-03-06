<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-chartjs')
    ->usePackage('larakit/sf-angular')
    ->setSourceDir('public')
    ->ngModule('chart.js')
    ->jsPackage('angular-chart.min.js')
;