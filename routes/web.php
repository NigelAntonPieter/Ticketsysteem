<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TicketsController;
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

Route::get('/', [PageController::class, 'viewHome'])->name('home');

Route::get('/about-us' , [PageController::class, 'viewAboutUs'])->name('about-us');

Route::get('/contact' , [PageController::class, 'viewContact'])->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');





Route::get('/template', [TicketsController::class, 'viewtemplate'])->middleware(['auth']);
Route::post('/createTickets', [TicketsController::class, 'createTickets'])->name('createTicket');



// Route::post('/admin/create_tickets', [TicketsController::class, 'createTickets'])->name('createTicket');

Route::post('/create_events', [EventsController::class, 'createEvents'])->name('createEvent');

Route::get('/event' , [EventsController::class, 'viewEvent'])->middleware(['auth']);



Route::post('/create_account', [PageController::class, 'createContacts'])->name('createContacts');

Route::get('/admin', [AdminController::class, 'admin'])->name('admin')->middleware(['admin']);
Route::get('/delete/{id}', [EventsController::class, 'delete'])->name('delete_event');

Route::get('/edit_event/{eventId}', [EventsController::class, 'editEvent'])->name('edit_event');
Route::post('/edit_event/{eventId}', [EventsController::class, 'processEditEvent'])->name('process_edit_event');

Route::get('/event_list', [EventsController::class, 'event_list'])->name('event_list')->middleware(['auth']);





require __DIR__.'/auth.php';