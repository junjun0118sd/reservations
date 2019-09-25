<?php

use App\Reserve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

Route::post('/reserve',function(Request $request){
//reservation_pageの情報をDBに登録
$reserve = new Reserve;

$reserve->hname=$request->hname;
$reserve->checkin=$request->checkin;
$reserve->checkout=$request->checkout;
$reserve->intime=$request->intime;
$reserve->outtime=$request->outtime;
$reserve->save();

return redirect('/');
});

//予約一覧
Route::get('/',function(){
    $reserves=Reserve::orderBy('created_at','asc')->get();

    return view('index',[
        'reserves'=>$reserves
    ]);

});
//予約消去
Route::delete('/reserve/{reserve}',function(Reserve $reserve){
$reserve->delete();

return redirect('/');
});

