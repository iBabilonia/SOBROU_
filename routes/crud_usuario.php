<?

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;


Route::get('/user', [CrudController::class, 'index'])->name('user.index');


Route::get('/user/create', [CrudController::class, 'create'])->name('user.create');


Route::post('/user', [CrudController::class, 'store'])->name('user.store');


Route::get('/user/{id}', [CrudController::class, 'show'])->name('user.show');


Route::get('/user/{id}/edit', [CrudController::class, 'edit'])->name('user.edit');


Route::put('/user/{id}', [CrudController::class, 'update'])->name('user.update');


Route::delete('/user/{id}', [CrudController::class, 'destroy'])->name('user.destroy');
