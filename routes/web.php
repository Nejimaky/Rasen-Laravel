<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Siempre que necesitemos realizar una accion entre la peticion y la respuesta es preferible usar un controlador

// El metodo view recibe como primer parametro la URL a la que va a responder y como segundo parametro el nombre de la vista que se va a mostrar y como tercer parametro opcional se pueden mandar datos
Route::view('/','welcome')->name('Home');
Route::view('/contact', 'contact')->name('Contact');
Route::get('/blog',[PostController::class, 'index'])->name('Blog');
Route::view('/about', 'about')->name('About');

?>
