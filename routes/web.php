    <?php

    use App\Http\Controllers\ConsultController;
    use App\Http\Controllers\ProfileController;
    use App\Http\Controllers\UserController;
    use App\Models\Consult;
    use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('home');
    });

    Route::get('/login', function () {
        return view('login'); // Assuming 'login' is the name of the login Blade file\\z
    });

    //new
    Route::group(['prefix' => 'consults', 'middleware' => ['auth', 'role:arts']], function() {
        Route::get('/permissions', [ConsultController::class, 'permissionsPage'])->name('consults.permissions');
        Route::post('/grant-permission/{consult}', [ConsultController::class, 'grantPermissionToAdmin'])->name('consults.grantPermission');
        Route::post('/revoke-permission/{consult}', [ConsultController::class, 'revokePermissionFromAdmin'])->name('consults.revokePermission');
    });


    Route::group(['prefix' => '/account'], function() {
        Route::get('/info', [UserController::class, 'edit'])->middleware(['auth', 'verified']);
        Route::put('/update', [UserController::class, 'update'])->middleware(['auth', 'permission:users-update']);

        
    });


    Route::get('/agenda', function () {
        return view('consults.agenda');
    });
    Route::get('/consults/create', [ConsultController::class, 'create']);
    Route::post('/consults/store', [ConsultController::class, 'store']);

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::group(['prefix' => 'users'], function() {
        Route::get('/', [UserController::class, 'show'])->name('users')->middleware(['permission:users-read']);
        Route::get('/delete/{id}', [UserController::class, 'delete'])->middleware(['permission:users-delete']);
    });

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__.'/auth.php';
