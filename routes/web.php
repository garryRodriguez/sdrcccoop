<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\LoanComputationController;


// Admin Controllers
use App\Http\Controllers\Admin\MembersController;
use App\Http\Controllers\Admin\PaymentController;

//Livewire
use App\Livewire\Reports;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/home', [HomeController::class, 'home'])->name('home');
    Route::get('/addmember', [MemberController::class, 'addMember'])->name('addMember');
    Route::get('/reports', Reports::class)->name('reports');

    Route::group(['prefix' => 'member', 'as' => 'member.'], function(){
        Route::post('/store-member-detail', [MemberController::class, 'store'])->name('store');
        Route::get('/member-profile/{member_id}', [MemberController::class, 'showProfile'])->name('show.profile');
        Route::get('/member-edit/{member_id}', [MemberController::class, 'editMember'])->name('edit');
        Route::patch('/member-update/{member_id}', [MemberController::class, 'updateMemberData'])->name('update');
        Route::get('/member-search', [HomeController::class, 'search'])->name('search');
        Route::get('/member/loan/{member_id}', [loanController::class, 'getMemberDetails'])->name('loan.application');
        //Route::get('/member/loan/{member_id}', [MemberController::class, 'loanApplication'])->name('loan.application');
        // Post CBU
        //Route::post('/add-cbu/{member_id}', [MemberController::class, 'addCBU'])->name('add.cbu');

        // Loan
        Route::post('/loan/application/{member_id}', [loanController::class, 'store'])->name('process.loan.application');
        Route::get('/loan/view/computation/{member_id}', [loanController::class, 'viewloanComputation'])->name('loan.computation');
        //Route::get('/loan/computation/details/{loan_id}', [LoanController::class, 'loanDetails'])->name('loan.computation.details');
        Route::post('/loan/loan-computation/{loan_id}', [loanController::class, 'storeLoanComputation'])->name('store.loan.computation');
        Route::get('/member/view/amortization/{member_id}', [LoanController::class, 'viewAmort'])->name('view.loan.amortization');
        Route::get('/member/payment/{member_id}', [LoanController::class, 'payment'])->name('make.payment');
        Route::post('/payment/{member_id}', [PaymentController::class, 'makePayment'])->name('makepayment');
        
        //this is the route to open add-payment-page-by-id
        Route::get('/addpaymentpagebyid/{member_id}', [LoanController::class, 'openAddPaymentByLoanIDPage'])->name('addpaymentpagebyid');

        Route::get('/view/forpayment/{loan_id}', [PaymentController::class, 'viewPaymentById'])->name('viewPaymentById');
        Route::post('/post/payment/byId', [PaymentController::class, 'postThePaymentById'])->name('postpayment');
    });
    
    //Route for landing page submenus
    Route::group(['prefix' => 'landingpagesubmenu', 'as' => 'landingpagesubmenu.'], function(){
        Route::get('/loansmenu', [HomeController::class, 'viewLoanSubMenuLandingPage'])->name('loansmenu');
    });

    // Admin Routes
    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function(){
        Route::get('/members', [MembersController::class, 'index'])->name('members');
        Route::delete('/member/{id}/deactivate', [MembersController::class, 'deactivate'])->name('member.deactivate');
        Route::patch('/member/{id}/activate', [MembersController::class, 'activate'])->name('member.activate');
    });
});
