<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\PrivacyAndPolicyController;
use App\Http\Controllers\Admin\TermsAndConditionController;
use App\Http\Controllers\Api\DatatableController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ColouringController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DifferenceController;
use App\Http\Controllers\Admin\QuizAnswerController;
use App\Http\Controllers\Admin\QuizController;
use App\Http\Controllers\Admin\QuizQuestionController;
use App\Http\Controllers\Admin\WhyQuestionController;
use Illuminate\Support\Facades\Auth;
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



Route::get('/', function () {
    return view('auth.login');
})->name('/');
Auth::routes(['register' => false]);
Route::middleware(['auth'])->group(function () {


    Route::get('about', [AboutController::class, 'edit'])->name('about.edit');
    Route::match(['put', 'patch'], 'about-update', [AboutController::class, 'update'])->name('about.update');
    Route::get('privacyandpolicy', [PrivacyAndPolicyController::class, 'edit'])->name('privacyandpolicy.edit');
    Route::match(['put', 'patch'], 'privacyandpolicy-update', [PrivacyAndPolicyController::class, 'update'])->name('privacyandpolicy.update');
    Route::get('termsandcondition', [TermsAndConditionController::class, 'edit'])->name('termsandcondition.edit');
    Route::match(['put', 'patch'], 'termsandcondition-update', [TermsAndConditionController::class, 'update'])->name('termsandcondition.update');



    Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');


    Route::resource('category', CategoryController::class);
    Route::resource('colouring', ColouringController::class);
    Route::resource('difference', DifferenceController::class);
    Route::resource('whyquestion', WhyQuestionController::class);
    Route::resource('quiz', QuizController::class);
    Route::resource('contact', ContactController::class);
    Route::put('contact/{status}', [ContactController::class, 'status'])->name('contact.status');
    Route::resource('quizquestion', QuizQuestionController::class);
    Route::get('quizquestion/{quizquestion}', [QuizQuestionController::class, 'show'])->name('quizquestion.show');

    Route::resource('quizanswer', QuizAnswerController::class)->except(['show']);
    Route::get('quizanswer/{quizanswer}', [QuizAnswerController::class, 'show'])->name('quizanswer.show');




    Route::get('datatable/{table}', [DatatableController::class, 'handle'])->name('datatable.source');
    Route::get('datatable/{table}/{id}', [DatatableController::class, 'handle'])->name('datatable.sourceid');







    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::match(['put', 'patch'], 'profile-update', [ProfileController::class, 'update'])->name('profile.update');
});