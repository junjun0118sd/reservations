<?php

use App\Reservation;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/reservation_page/', function () {
    return view('reservation_page');
});
Route::post('/form', function (Request $request) {

    $hname=$request->input('hname');
    return view('/reservation_page',compact(['hname']));
});

route::post('/rserve',function(request $request){
//reservation_pageの情報をDBに登録
$reserve = new Reservation;

$reserve->hname=$request->hname;
$reserve->checkin=$request->checkin;
$reserve->checkout=$request->checkout;
$reserve->save();

return redirect('/');
});
