<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\User;
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
    return Inertia::render('home',[
    'username'  => "Hasan",
    ]);
});


Route::get('/users', function(){
    return Inertia::render('Index', [
        'users' => User::query()
            ->when(Request::input('search'), static function ($query, $search){
                $query->where('name', 'like', '%' . $search . '%');
            })
            ->paginate(10)
            ->withQueryString()
            ->through(fn($user) => [
                'id' => $user->id,
                'name' => $user->name
            ]),

            'filters' => Request::only(['search'])
        ]);

});

Route::get('/users/create', function(){
    return Inertia::render('Create');
});
Route::post('/userscreate', function(){
    $attributes = request()->validate([
       'name' => 'required',
       'email' => ['required', 'email'],
       'password' => 'required'
    ]);

    User::create($attributes);

    return redirect('/users/create');
});

Route::get('/settings', function(){
    return Inertia::render('settings');
});

Route::post('/logout', function(){
   dd(request('foo'));
});



