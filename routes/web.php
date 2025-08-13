<?php
Route::redirect('/', '/InTheGreen/home');
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InTheGreenController;
// 農場介紹
use App\Http\Controllers\Farm\FarmIntroduceController;
// 種植筆記本
use App\Http\Controllers\Library\PlantLibraryController;
// 會員
use App\Http\Controllers\Member\MemberRegisterController;
use App\Http\Controllers\Member\MemberLoginController;
// 租一塊田
use App\Http\Controllers\Rental\RentalController;

Route::prefix('InTheGreen')->group(function () {
    // 首頁
    Route::get('/', [InTheGreenController::class, 'index'])->name('home');

    // InTheGreen 首頁
    Route::resource('/home', InTheGreenController::class);

    // Auth 權限管理
    Route::resource('/Auth', PlantLibraryController::class);

    // Event 活動
    Route::resource('/Event', PlantLibraryController::class);

    // Farm 農場
    Route::resource('/FarmIntroduce', FarmIntroduceController::class);

    // Forum 種植筆記本
    Route::resource('/Forum', PlantLibraryController::class);

    // Gallery 相簿
    Route::resource('/Gallery', PlantLibraryController::class);

    // Library 種植筆記本
    Route::resource('/Library', PlantLibraryController::class);
    
    // Member 會員中心
    Route::prefix('Member')->group(function () {
        Route::resource('/login', MemberLoginController::class); // 登入, 登出
    });

    // News 最新消息
    Route::resource('/News', PlantLibraryController::class);

    // Rental 租田事宜
    Route::resource('/Rental', RentalController::class);
});
