<?php
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\user\HomeController;
use App\Http\Controllers\admin\ProductController;
// use App\Http\Controllers\user\CartController;
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
////////////////////////// User ///////////////////////////////////////////////////////


Route::get('/main', function () {
    return view('user/main');
});


Route::get('/', function () {
    return view('user/home');
});
Route::get('/', [HomeController::class, 'showHome'])->name('user.home');

// Route::get('/', [HomeController::class, 'showCategories'])->name('user.home.categories');

Route::get('/product',[HomeController::class,'show_product'])->name('user.products');
Route::get('/category', function () { return view('user/category');});
Route::get('/products', function () { return view('user/product');});
// Route::get('/', [HomeController::class, 'show_homeProduct'])->name('user.home');


Route::get('/contact', function () {
    return view('user/contact');
});
// Route::post('/contact-form','HomeController@store')->name('contact.form');
Route::post('/contact-form', [HomeController::class,'store'])->name('contact.form');


Route::get('/newslatter', function () {
    return view('user/newslatter');
});
Route::post('/subscribe',[HomeController::class,'subscribe'])->name('subscriber.store');



Route::get('/about', function () {
    return view('user/about');
});


Route::get('/home1', function () {
    return view('admin/home');
});



//////////// Admin route/////////////////



Route::get('/admin', function () {
    return view('Admin.index');
});

//////////////////// DATA ///////////////////////

Route::get('/product-insert', function () {

    return view('Admin.product-insert');
});
Route::get('/view-product', function () {

    return view('Admin.view-product');
});

Route::get('/category-insert', [ProductController::class, 'create'])->name('category-insert');
Route::post('/product-store', [ProductController::class, 'store_product'])->name('product.store');

Route::get('/view-product', [ProductController::class, 'view_product'])->name('view-products');
Route::delete('Admin/product-delete/{id}', [ProductController::class, 'deleteProduct'])->name('admin.product.delete');

///////////////category //////////////////////////////////
// Route::post('/product', [ProductController::class, 'store_category'])->name('categories.store');
// Route::match(['get', 'post'], '/product', [ProductController::class, 'store_category'])->name('categories.store');
// Route::get('/categories/{category}', [ProductController::class, 'show'])->name('categories.show');
Route::get('/categories', function () {

    return view('Admin.categories');
});

Route::post('/category', [ProductController::class, 'store_category'])->name('category.store');
Route::get('/categories', [ProductController::class, 'view_category'])->name('categories.view');

Route::delete('Admin/category-delete/{id}', [ProductController::class, 'deleteCategory'])->name('admin.category.delete');
// Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('category.show');

/////////////////////////////TABLE ///////////////////

Route::get('/view-table', function () {

    return view('Admin.view-table');
});


/////////////////////// contact us ////////////////

Route::get('/contact-us', function () {

    return view('Admin.contact-us');
});
// Route::get('/admin-contact-us',"Admin\AdminController@contact");


Route::get('/contact-us', [AdminController::class, 'contact'])->name('admin.contact');
Route::delete('/admin/messages/{id}', [AdminController::class, 'deleteMessage'])->name('admin.messages.delete');

/////////////////////////////// register ////////////////////

Route::get('/register', function () {

    return view('Admin.register');
});

////////////////////////// log in /////////////
Route::get('/login', function () {

    return view('Admin.login');
});

/////////////////////////  Subscriber /////////////////////////
Route::get('/subscriber', function () {

    return view('Admin.subscriber');
});
Route::get('/subscriber', [AdminController::class, 'subscribe'])->name('admin.subscriber');
Route::delete('/admin/subscriber/{id}', [AdminController::class, 'deletesubscriber'])->name('admin.subscriber.delete');

////////////////////////////  User ////////////////////////////////////
Route::get('/user', function () {

    return view('Admin.user');
});
Route::get('/user', [AdminController::class, 'view_user'])->name('admin.user');
Route::delete('/admin/user/{id}', [AdminController::class, 'deleteUser'])->name('admin.user.delete');




// Route::post('/add-to-favorites/{product}', [ProductController::class, 'addToFavorites'])
//     ->middleware('auth') // Add this middleware to ensure the user is authenticated
//     ->name('product.addToFavorites');





// Route::post('/add-to-cart/{product}', [CartController::class, 'addToCart'])
//     ->middleware('auth')
//     ->name('cart.addToCart');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('usuarios', 'UserController@index');