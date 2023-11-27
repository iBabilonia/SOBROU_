<?

use App\Http\Controllers\Crud_produto;
use Illuminate\Support\Facades\Route;


Route::get('/produto', [Crud_produto::class, 'index'])->name('produto.index');


Route::get('/produto/create', [Crud_produto::class, 'create'])->name('produto.create');


Route::post('/produto', [Crud_produto::class, 'store'])->name('produto.store');


Route::get('/produto/{id}', [Crud_produto::class, 'show'])->name('produto.show');


Route::get('/produto/{id}/edit', [Crud_produto::class, 'edit'])->name('produto.edit');


Route::put('/produto/{id}', [Crud_produto::class, 'update'])->name('produto.update');


Route::delete('/produto/{id}', [Crud_produto::class, 'destroy'])->name('produto.destroy');
