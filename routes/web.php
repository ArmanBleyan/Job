<?php
use App\Jobs\SendEmailJob;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('sendEmail', function(){
    $job = (new SendEmailJob())

        ->delay(Carbon::now()->addSeconds(15));

        dispatch($job);

    return "Very large time";
});


