<?php

// use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Task;


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
    return view('tasks.index');
});

Route::post('/task', function (Request $request) {
    // dd($request);
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
            
    }

    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/');
    
});

Route::delete('/task/{id}', function () {
    //
});
 