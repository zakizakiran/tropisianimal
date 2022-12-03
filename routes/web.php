<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\ContactSettingsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Models\Gallery;
use App\Models\Post;
use App\Models\User;

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
    $post = Post::latest()->paginate(7);
    $contact = DB::table('contacts')->get();
    $galleries = Gallery::all();
    return view('home',[
        'title' => 'HOME',
        'contacts' => $contact,
        'posts' => $post,
        'galleries' => $galleries
    ]);
});

Route::get('/about', function () {

    $contact = DB::table('contacts')->get();
    return view('about',[
        'title' => 'TENTANG',
        'contacts' => $contact
    ]);
});


Route::get('/berita/{post:slug}', [BeritaController::class,'show']);
Route::resource('/berita',BeritaController::class);
Route::get('/admin/post/checkSlug', [PostController::class, 'checkSlug'])->middleware('auth');

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function() {

    Route::resource('/dashboard',DashboardController::class);
    Route::get('/gallery-settings',[DashboardController::class, 'gallery']);
    Route::resource('/contact-settings',ContactSettingsController::class);
    Route::resource('/admin/post', PostController::class);

});

Route::get('/galeri',[GalleryController::class, 'list']);
Route::resource('/kontak', ContactController::class);
Route::resource('/mail', MailController::class);

Route::resource('/upload-gallery', GalleryController::class)->middleware('auth');
Route::resource('/upload-gallery-carousel', CarouselController::class)->middleware('auth');


Route::get('/dashboard-user', function(){
    return view ('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard-user/post', UserPostController::class)->middleware('auth');
Route::resource('/dashboard-user/profile', ProfileController::class)->middleware('auth');
// Route::group(['middleware' => ['auth', 'ceklevel:user']], function() {

Route::post('/login/user',[UserLoginController::class, 'store'])->name('login');
Route::post('/logout/user',[UserLoginController::class, 'logout']);

// });

Route::get('/login/user',[UserLoginController::class, 'index']);

Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'store']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::post('/register',[RegisterController::class, 'store']);

Route::delete('/selected-mail',[MailController::class, 'deleteSelected'])->name('mail.deleteSelected');
Route::get('/mail-old',[MailController::class, 'orderASC'])->name('mail.orderby');
Route::get('/mail-latest',[MailController::class, 'orderDESC'])->name('mail.orderby');

Route::get('/authors/{user}', function(User $user){
    return view('admin.posts.index',[
        'posts' => $user->posts
    ]);
})->middleware('auth');
