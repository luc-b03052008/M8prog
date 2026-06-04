<?php

use App\Http\Controllers\NewsController;

Route::get('/news', [NewsController::class, 'index']);




use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/news', function () {
    return <<<HTML
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Views</title>
    
</head>
<body>
    <div class="page">
        <h1>News Views</h1>
        <div class="card">
            <h2>Eminem Speaks To Police Officer After Noise Complaint Called On Super Bowl Halftime Performance</h2>
            <p>INGLEWOOD, CA—During an awkward interruption of an otherwise lively performance, rapper Eminem was reportedly tasked with speaking to police officers Sunday after a noise complaint had been called on the Super Bowl halftime show.</p>
        </div>
        <div class="card">
            <h2>Rams Dedicate Win To Whatever City They Play For</h2>
            <p>INGLEWOOD, CA—Upon securing a decisive victory over the Cincinnati Bengals in Super Bowl LVI, the triumphant Rams told reporters Sunday that they wanted to dedicate their win to whatever city it was that they played for.</p>
        </div>
        <div class="card">
            <h2>Learn the Difference Between Ice Cream and Gelato, Once and for All</h2>
            <p>From milk, cream, and eggs to air and storage, ice cream and gelato are actually quite different.</p>
        </div>
    </div>
</body>
</html>
HTML;
});
