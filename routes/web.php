<?php

use App\Http\Livewire\Frontend\Home;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Backend\Testing;
use App\Http\Livewire\Backend\Dashboard;
use App\Http\Livewire\Backend\NaiveBayes;

use App\Http\Livewire\Frontend\Diagnosis;
use App\Http\Controllers\ResultController;
use App\Http\Livewire\Frontend\User\Result;
use App\Http\Livewire\Frontend\User\Account;
use App\Http\Livewire\Frontend\User\OtherResult;

use App\Http\Livewire\Backend\Admin\Edit as AdminEdit;
use App\Http\Livewire\Backend\User\Index as UserIndex;
use App\Http\Livewire\Backend\Result\Show as ResultShow;
use App\Http\Livewire\Backend\Dataset\Edit as DatasetEdit;
use App\Http\Livewire\Backend\Result\Index as ResultIndex;
use App\Http\Livewire\Backend\Dataset\Index as DatasetIndex;
use App\Http\Livewire\Backend\Attribute\Edit as AttributeEdit;
use App\Http\Livewire\Backend\Dataset\Create as DatasetCreate;
use App\Http\Livewire\Backend\Attribute\Index as AttributeIndex;
use App\Http\Livewire\Backend\Attribute\Create as AttributeCreate;

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
// Auth::routes(['verify' => true]);

Route::get('', Home::class)->name('home');

Route::middleware('auth')->group(function() {
    Route::get('diagnosis', Diagnosis::class)->name('diagnosis');
    Route::prefix('user')->group(function() {
        Route::get('account', Account::class)->name('account');
        Route::get('accept-approval/{user}', [Account::class, 'acceptApproval'])->name('accept-approval');
        Route::get('other-result', OtherResult::class)->name('other-result');
        Route::get('result/{result}', Result::class)->name('result');
    });

    Route::middleware('role:admin')->prefix('admin')->name('admin.')->group(function() {
        Route::get('', Dashboard::class)->name('dashboard');
        Route::get('naive-bayes', NaiveBayes::class)->name('naive-bayes');
        Route::get('testing', Testing::class)->name('testing');
    
        Route::prefix('attribute')->name('attribute.')->group(function() {
            Route::get('', AttributeIndex::class)->name('index');
            Route::get('create', AttributeCreate::class)->name('create');
            Route::get('edit/{attribute}', AttributeEdit::class)->name('edit');
        }); 
    
        Route::prefix('dataset')->name('dataset.')->group(function() {
            Route::get('', DatasetIndex::class)->name('index');
            Route::get('create', DatasetCreate::class)->name('create');
            Route::get('edit/{dataset}', DatasetEdit::class)->name('edit');
        }); 
    
        Route::prefix('result')->name('result.')->group(function() {  
            Route::get('', ResultIndex::class)->name('index');
            Route::get('generate-pdf', [ResultIndex::class, 'generate'])->name('generate-pdf');
            Route::get('show/{result}', ResultShow::class)->name('show');
        });

        Route::get('user', UserIndex::class)->name('user.index');
        Route::get('admin/edit/{admin}', AdminEdit::class)->name('admin.edit');
    });
});

require __DIR__.'/auth.php';
