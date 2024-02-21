<?php


use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Models\Country;
use App\Http\Models\Post;
use App\Http\Models\User;
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
//
Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return "admin is her";
});

//Route::get('/post/{id}', function ($id) {
//    return "this is post number ".  $id;
//});
//
//Route::get('/post/{id}/{name}', function ($id,$name) {
//   return "This is post number ".$id.": ".$name;
//});
//
//Route::get('admin/post/example', array('as'=>'admin.home', function(){
//    $url =route('admin.home');
//    return " this url is". $url;
//}));


//
//Route::get('/post', [PostsController::class, 'index']);
//Route::get('/post', 'PostsController@index');
//Route:: resource('posts','PostsController');
//view
//Route::get('/contact', [PostsController::class, 'contact'])->name('contact');
//
//Route:: get('posts/{id}',[PostsController::class,'show_post']);

//chen du lieu
Route:: get('/insert', [PostController::class, 'insert']);
//dọc thong tin
Route::get('/read', [PostController::class, 'read']);

//chinh sua
Route::get('/update', [PostController::class, 'update']);
//xoa
Route::get('/delete', [PostController::class, 'delete']);
/*
 ELOQUENT
*/

//read data tat ca du lieu
Route::get('/find', [PostController::class, 'delete']);

//sap xep
Route::get('/findwhere', [PostController::class, 'findWhere']);

// lay du lieu
Route::get('/findmore', [PostController::class, 'findmore']);

//them du lieu
Route::get('/basicinsert', [PostController::class, 'basicinsert']);

//sửa thông tin
Route::get('/basicinsert2', [PostController::class, 'basicinsert2']);

//tạo du lieu
Route::get('/create', [PostController::class, 'create']);

Route::get('/upding', [PostController::class, 'upding']);


/* cach xoa du lieu*/

Route:: get('/delete1', [PostController::class, 'delete1']);

Route:: get('/delete2', [PostController::class, 'delete1']);


Route:: get('/softdelete', [PostController::class, 'softdelete']);
Route:: get('/readsoftdelete', [PostController::class, 'readsoftdelete']);

/*
 model
 */

/*
ELOQUENT RELATIONSHIP
*/
//one to one relationship
Route::get('user/{id}/post', function ($id) {
    return User::find($id)->post->title;
});
// nghịch đảo(invers relation)
Route::get('post/{id}/user', function ($id) {
    return Post::find($id)->user->name;
});
//one to many relationship // khong hieu

Route::get('posts', function () {
    $user = User::find(2);
    foreach ($user->posts as $post) {
//     echo $post->title."<br>";
        dd($post->title);
    }
});
// Many to Many relationship
// Route::get('/user/{id}/role',function (){
//     $user = User::find(1);
//     foreach ($user->roles as $role){
//         return $role -> name;
//     }
// });
Route::get('/user/{id}/role', function ($id) {
    $user = User::find($id)->roles()->orderBy('id', 'DESC')->get();
//    return $user;
    dd($user->toArray());
});
//Querying intermediate table
//Route::get('user/pivot',function(){
//    $user=User::find(1);
//    foreach ($user->roles as $role){
//        echo $role->pivot->created_at;
//    }

//});
//has many through relation
Route::get('/user/country', function () {
    $contry = Country::find(4);
    foreach ($contry->posts as $post) {
        return $post->title;
    }
});
Route::get('/', function () {
    return view('welcome');
});
//read
Route::get(' / read', [PostController::class, 'read']);
//update
Route::get(' / update', [PostController::class, 'update']);
//delete
Route::get(' / delete', [PostController::class, 'delete']);

Route::get('/create', [PostController::class, 'create']);
Route::post('/store', [PostController::class, 'store'])->name('posts.store');
Route::get('/index', [PostController::class, 'index']);
Route::get('/show/{id}/edit', [PostController::class, 'edit'])->name('posts.form-edit');
Route::put('/show/{id}', [PostController::class, 'updatePost'])->name('posts.update');
Route::delete('/show/{id}', [PostController::class, 'deletePost'])->name('posts.delete');
Route::get('/show/{id}', [PostController::class, 'show'])->name('posts.show');

Route::get(' / signup', [PostController::class, 'signup']);

// route products management
Route::get(' /product', [ProductController::class, 'product']);
Route::get('/createProduct', [ProductController::class, 'createProduct'])->name('createProduct');
Route::post('/customCreate', [ProductController::class, 'customCreate'])->name('createCustom');
Route::get('/updateProduct/{id}', [ProductController::class, 'updateProduct'])->name('updateProduct');
Route::put('/customUpdate/{id}', [ProductController::class, 'customUpdate'])->name('updateCustom');
Route::get('/updateProduct/{id}', [ProductController::class, 'updateProduct'])->name('updateProduct');
Route::get('/deleteProduct/{id}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');
Route::delete('/deleteCustom/{id}', [ProductController::class, 'deleteCustom'])->name('delete.product');
// end route products management

