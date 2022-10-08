<?php

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

Route::group(['prefix' => 'generating'], function () {
    Route::get('/builder', [\App\Http\Controllers\Patterns\BuilderController::class, 'get']);
    Route::get('/factory-method', [\App\Http\Controllers\Patterns\FactoryMethodController::class, 'get']);
    Route::get('/abstract-factory', [\App\Http\Controllers\Patterns\AbstractFactoryController::class, 'get']);
    Route::get('/prototype', [\App\Http\Controllers\Patterns\PrototypeController::class, 'get']);
    Route::get('/singleton', [\App\Http\Controllers\Patterns\SingletonController::class, 'get']);
});

Route::group(['prefix' => 'structure'], function () {
    Route::get('/facade', [\App\Http\Controllers\Patterns\FacadeController::class, 'get']);
    Route::get('/adapter', [\App\Http\Controllers\Patterns\AdapterController::class, 'get']);
    Route::get('/bridge', [\App\Http\Controllers\Patterns\BridgeController::class, 'get']);
    Route::get('/composite', [\App\Http\Controllers\Patterns\CompositeController::class, 'get']);
    Route::get('/decorator', [\App\Http\Controllers\Patterns\DecoratorController::class, 'get']);
    Route::get('/proxy', [\App\Http\Controllers\Patterns\ProxyController::class, 'get']);
    Route::get('/flyweight', [\App\Http\Controllers\Patterns\FlyweightController::class, 'get']);
});

Route::group(['prefix' => 'behavioral'], function () {
    Route::get('/chain_of_responsibility', [\App\Http\Controllers\Patterns\ChainOfResponsibilityController::class, 'get']);
    Route::get('/command', [\App\Http\Controllers\Patterns\CommandController::class, 'get']);
    Route::get('/iterator', [\App\Http\Controllers\Patterns\IteratorController::class, 'get']);
    Route::get('/mediator', [\App\Http\Controllers\Patterns\MediatorController::class, 'get']);
    Route::get('/memento', [\App\Http\Controllers\Patterns\MementoController::class, 'get']);
    Route::get('/observer', [\App\Http\Controllers\Patterns\ObserverController::class, 'get']);
    Route::get('/state', [\App\Http\Controllers\Patterns\StateController::class, 'get']);
    Route::get('/strategy', [\App\Http\Controllers\Patterns\StrategyController::class, 'get']);
    Route::get('/template_method', [\App\Http\Controllers\Patterns\TemplateMethodController::class, 'get']);
    Route::get('/visitor', [\App\Http\Controllers\Patterns\VisitorController::class, 'get']);
});

Route::group(['prefix' => 'algorithms'], function () {
    Route::get('/binary_search', [\App\Http\Controllers\Algorithms\BinarySearchController::class, 'get']);
    Route::get('/breadth_first_search', [\App\Http\Controllers\Algorithms\BreadthFirstSearchController::class, 'get']);
    Route::get('/selection_sort', [\App\Http\Controllers\Algorithms\SelectionSortController::class, 'get']);
    Route::get('/quick_sort', [\App\Http\Controllers\Algorithms\QuickSortController::class, 'get']);
    Route::get('/recursion_sum', [\App\Http\Controllers\Algorithms\RecursionController::class, 'sum']);
    Route::get('/recursion_count', [\App\Http\Controllers\Algorithms\RecursionController::class, 'count']);
    Route::get('/recursion_get_max', [\App\Http\Controllers\Algorithms\RecursionController::class, 'getMax']);
});
