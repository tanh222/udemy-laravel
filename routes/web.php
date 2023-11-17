<?php


use App\Http\Models\Post;
use App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|-------------  -------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('user/{$id}', function ($id) {
//    return 'phuong thuc get
//  cua path/unicode';
//});
//Route::post('/unicode',function(){
//    return'phuong thuc post cua path/unicode';
//});
//Route:: get('/insert',function(){
//    DB::insert('insert into posts(title,content) values(?,?)',['laravelis awesome with edwin ','laravel is the best to PHP ']);
//});
//Route:: get('/read',function() {
//    $results= DB::select('select * from posts ')    ;
//    foreach ($results as $posts);
//    return $posts->title;
//});

//Route::get('/update', function(){
//    $update= DB::update('update posts set title="update title"where id=?',[1]);
//    return $update;
//});
//Route::get('/delete',function(){
//    $delete= DB::delete('delete from posts where id=?',[7]);
//    return $delete;
//});
/*
 ELOQUENT
*/
//hỏi lại
//Route::get('/find',function() {
//    $posts = Post::all();
//    $array = [];
//
//    foreach($posts as $post) {
//        array_push($array, $post->title);
//    }
//
//        return $array;

//    $post = Post::find(3);
//    return $post->title;
//});
 Route::get('/findwhere',function(){
     $posts =Post:: where('id',8)->orderBy('id','desc')-> take(1)->get();
        return $posts;
 });
//Route::get('/findmore',function(){
////    $posts =Post:: findOrFai(2);
////    return $posts;
//    $posts= Post:: where('user_count','<',50)->firstOrfail();
//});
//Route::get('/basicinsert',function(){
//    $posts = new Post;
//    $posts->title= 'New eloquent to';
//    $posts->content= 'wow eloquent is really cool';
//    $posts->save();
//});

//Route::get('/basicinsert',function(){
//    $posts = Post:: find(4);
//    $posts->title= 'New eloquent';
//    $posts->content= 'wow eloquent is really cool';
//    $posts->save();
//});
