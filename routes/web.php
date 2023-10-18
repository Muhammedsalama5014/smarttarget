<?php

use App\Http\Controllers\web\BrandingPortfolioController;
use App\Http\Controllers\web\ContactController;
use App\Http\Controllers\web\HiringController;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\AboutController;
use App\Http\Controllers\web\MotionPortfolioController;
use App\Http\Controllers\web\PortfolioController;
use App\Http\Controllers\web\SemPortfolioController;
use App\Http\Controllers\web\SeoPortfolioController;
use App\Http\Controllers\web\ServiceController;
use App\Http\Controllers\web\BlogController;
use App\Http\Controllers\web\SemController;
use App\Http\Controllers\web\DesignController;
use App\Http\Controllers\web\MotionController;
use App\Http\Controllers\web\SocialmediaController;
use App\Http\Controllers\web\BrandingController;
use App\Http\Controllers\web\SeoController;

use App\Http\Controllers\web\SocialPortfolioController;
use App\Http\Controllers\web\VoicePortfolioController;
use App\Http\Controllers\web\WebPortfolioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminHomePageController;
use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\AdminAboutPageController;
use App\Http\Controllers\admin\AdminServiceController;
use App\Http\Controllers\admin\AdminBlogController;
use App\Http\Controllers\admin\AdminHiringController;
use App\Http\Controllers\admin\AdminContactController;
use App\Http\Controllers\admin\AdminClientsController;
use App\Http\Controllers\admin\AdminTeamController;
use App\Http\Controllers\admin\AdminBestController;
use App\Http\Controllers\admin\AdminBrandingController;
use App\Http\Controllers\admin\AdminMotionController;
use App\Http\Controllers\admin\AdminSeoPageController;
use App\Http\Controllers\admin\AdminSemPageController;
use App\Http\Controllers\admin\AdminVoiceoverController;
use App\Http\Controllers\admin\AdminSocialmediaController;
use App\Http\Controllers\admin\AdminWebsiteController;
use App\Http\Controllers\admin\AdminPricingController;
use App\Http\Controllers\admin\AdminSettingController;


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

Route::get('/', [HomeController::class,'index']);
Route::post('/brandgoals/create',[HomeController::class,'create']);
Route::get('/aboutus', [AboutController::class,'index']);
Route::get('/services', [ServiceController::class,'index']);
Route::get('/blog', [BlogController::class,'index']);
Route::get('/blog/show/{id}', [BlogController::class,'show']);
Route::get('/blog/show/{id}', [BlogController::class,'show']);
Route::get('/sem', [SemController::class,'index']);
Route::get('/webdesign', [DesignController::class,'index']);
Route::get('/graphic-motion', [MotionController::class,'index']);
Route::get('/socialmedia', [SocialmediaController::class,'index']);
Route::get('/branding', [BrandingController::class,'index']);
Route::get('/seo', [SeoController::class,'index']);
Route::get('/portfolio', [PortfolioController::class,'index']);
Route::get('/portfoliobranding', [BrandingPortfolioController::class,'index']);
Route::get('/portfoliobranding/show/{id}', [BrandingPortfolioController::class,'show']);

Route::get('/portfoliobranding', [BrandingPortfolioController::class,'index']);
Route::get('/portfoliobranding/show/{id}', [BrandingPortfolioController::class,'show']);

Route::get('/portfoliomotion', [MotionPortfolioController::class,'index']);
Route::get('/portfoliomotion/show/{id}', [MotionPortfolioController::class,'show']);

Route::get('/portfoliosocial', [SocialPortfolioController::class,'index']);


Route::get('/portfoliowebdesign', [WebPortfolioController::class,'index']);
Route::get('/portfoliowebdesign/show/{id}', [WebPortfolioController::class,'show']);


Route::get('/portfoliovoice', [VoicePortfolioController::class,'index']);

Route::get('/hiring', [HiringController::class,'index']);
Route::get('/hiring/request/{id}', [HiringController::class,'show']);
Route::post('/hiring-request', [HiringController::class,'store']);

Route::get('/letstalk', [ContactController::class,'index']);
Route::post('/letstalkMessage', [ContactController::class,'store']);



Route::prefix('/dashboard')->middleware('auth')->group(function (){
    Route::get('/',[AdminHomeController::class,'index']);

    Route::get('/homepage',[AdminHomePageController::class,'index']);
    Route::post('/homepage/update/1',[AdminHomePageController::class,'update']);

    Route::get('/aboutpage',[AdminAboutPageController::class,'index']);
    Route::post('/aboutpage/update/1',[AdminAboutPageController::class,'update']);

    Route::get('/servicepage',[AdminServiceController::class,'index']);
    Route::post('/servicepage/update/1',[AdminServiceController::class,'updatepage']);
    Route::get('/servics',[AdminServiceController::class,'show']);
    Route::get('/servics/create',[AdminServiceController::class,'create']);
    Route::post('/servics/store',[AdminServiceController::class,'store']);
    Route::get('/servics/edit/{id}',[AdminServiceController::class,'edit']);
    Route::post('/servics/update/{id}',[AdminServiceController::class,'update']);
    Route::get('/servics/delete/{id}',[AdminServiceController::class,'delete']);

    Route::get('/blogpage',[AdminBlogController::class,'index']);
    Route::post('/blogpage/update/1',[AdminBlogController::class,'updatepage']);
    Route::get('/blogs',[AdminBlogController::class,'show']);
    Route::get('/blogs/create',[AdminBlogController::class,'create']);
    Route::post('/blogs/store',[AdminBlogController::class,'store']);
    Route::get('/blogs/edit/{id}',[AdminBlogController::class,'edit']);
    Route::post('/blogs/update/{id}',[AdminBlogController::class,'update']);
    Route::get('/blogs/delete/{id}',[AdminBlogController::class,'delete']);

    Route::get('/hiringpage',[AdminHiringController::class,'index']);
    Route::post('/hiringpage/update/1',[AdminHiringController::class,'updatepage']);
    Route::get('/hirings',[AdminHiringController::class,'show']);
    Route::get('/hirings/create',[AdminHiringController::class,'create']);
    Route::post('/hirings/store',[AdminHiringController::class,'store']);
    Route::get('/hirings/edit/{id}',[AdminHiringController::class,'edit']);
    Route::get('/hirings/request/{id}',[AdminHiringController::class,'request']);
    Route::post('/hirings/update/{id}',[AdminHiringController::class,'update']);
    Route::get('/hirings/delete/{id}',[AdminHiringController::class,'delete']);

    Route::get('/contactpage',[AdminContactController::class,'index']);
    Route::post('/contactpage/update/1',[AdminContactController::class,'update']);
    Route::get('/contactmessages',[AdminContactController::class,'messages']);

    Route::get('/clients',[AdminClientsController::class,'show']);
    Route::get('/clients/create',[AdminClientsController::class,'create']);
    Route::post('/clients/store',[AdminClientsController::class,'store']);
    Route::get('/clients/edit/{id}',[AdminClientsController::class,'edit']);
    Route::post('/clients/update/{id}',[AdminClientsController::class,'update']);
    Route::get('/clients/delete/{id}',[AdminClientsController::class,'delete']);

    Route::get('/team',[AdminTeamController::class,'show']);
    Route::get('/team/create',[AdminTeamController::class,'create']);
    Route::post('/team/store',[AdminTeamController::class,'store']);
    Route::get('/team/edit/{id}',[AdminTeamController::class,'edit']);
    Route::post('/team/update/{id}',[AdminTeamController::class,'update']);
    Route::get('/team/delete/{id}',[AdminTeamController::class,'delete']);

    Route::get('/bestofthemonth/create',[AdminBestController::class,'create']);
    Route::get('/bestofthemonth',[AdminBestController::class,'index']);
    Route::post('/bestofthemonth/store',[AdminBestController::class,'store']);
    Route::post('/bestofthemonth/update/{id}',[AdminBestController::class,'update']);
    Route::get('/bestofthemonth/edit/{id}',[AdminBestController::class,'edit']);
    Route::get('/bestofthemonth/delete/{id}',[AdminBestController::class,'delete']);

    Route::get('/brandingpage',[AdminBrandingController::class,'index']);
    Route::post('/brandingpage/update/1',[AdminBrandingController::class,'updatepage']);
    Route::get('/brandings',[AdminBrandingController::class,'show']);
    Route::get('/brandings/create',[AdminBrandingController::class,'create']);
    Route::post('/brandings/store',[AdminBrandingController::class,'store']);
    Route::get('/brandings/edit/{id}',[AdminBrandingController::class,'edit']);
    Route::post('/brandings/update/{id}',[AdminBrandingController::class,'update']);
    Route::get('/brandings/delete/{id}',[AdminBrandingController::class,'delete']);

    Route::get('/motionpage',[AdminMotionController::class,'index']);
    Route::post('/motionpage/update/1',[AdminMotionController::class,'updatepage']);
    Route::get('/motions',[AdminMotionController::class,'show']);
    Route::get('/motions/create',[AdminMotionController::class,'create']);
    Route::post('/motions/store',[AdminMotionController::class,'store']);
    Route::get('/motions/edit/{id}',[AdminMotionController::class,'edit']);
    Route::post('/motions/update/{id}',[AdminMotionController::class,'update']);
    Route::get('/motions/delete/{id}',[AdminMotionController::class,'delete']);

    Route::get('/seopage',[AdminSeoPageController::class,'index']);
    Route::post('/seopage/update/1',[AdminSeoPageController::class,'update']);

    Route::get('/sempage',[AdminSemPageController::class,'index']);
    Route::post('/sempage/update/1',[AdminSemPageController::class,'update']);

    Route::get('/voicepage',[AdminVoiceoverController::class,'index']);
    Route::post('/voicepage/update/1',[AdminVoiceoverController::class,'updatepage']);
    Route::get('/voices',[AdminVoiceoverController::class,'show']);
    Route::get('/voices/create',[AdminVoiceoverController::class,'create']);
    Route::post('/voices/store',[AdminVoiceoverController::class,'store']);
    Route::get('/voices/edit/{id}',[AdminVoiceoverController::class,'edit']);
    Route::post('/voices/update/{id}',[AdminVoiceoverController::class,'update']);
    Route::get('/voices/delete/{id}',[AdminVoiceoverController::class,'delete']);

    Route::get('/socialmediapage',[AdminSocialmediaController::class,'index']);
    Route::post('/socialmediapage/update/1',[AdminSocialmediaController::class,'updatepage']);
    Route::get('/socialmedias',[AdminSocialmediaController::class,'show']);
    Route::get('/socialmedias/create',[AdminSocialmediaController::class,'create']);
    Route::post('/socialmedias/store',[AdminSocialmediaController::class,'store']);
    Route::get('/socialmedias/edit/{id}',[AdminSocialmediaController::class,'edit']);
    Route::post('/socialmedias/update/{id}',[AdminSocialmediaController::class,'update']);
    Route::get('/socialmedias/delete/{id}',[AdminSocialmediaController::class,'delete']);

    Route::get('/websitepage',[AdminWebsiteController::class,'index']);
    Route::post('/websitepage/update/1',[AdminWebsiteController::class,'updatepage']);
    Route::get('/websites',[AdminWebsiteController::class,'show']);
    Route::get('/websites/create',[AdminWebsiteController::class,'create']);
    Route::post('/websites/store',[AdminWebsiteController::class,'store']);
    Route::get('/websites/edit/{id}',[AdminWebsiteController::class,'edit']);
    Route::post('/websites/update/{id}',[AdminWebsiteController::class,'update']);
    Route::get('/websites/delete/{id}',[AdminWebsiteController::class,'delete']);

    Route::get('/pricingpage',[AdminPricingController::class,'index']);
    Route::post('/pricingpage/update/1',[AdminPricingController::class,'updatepage']);
    Route::get('/otherplans',[AdminPricingController::class,'showotherplans']);
    Route::get('/otherplans/create',[AdminPricingController::class,'createotherplans']);
    Route::post('/otherplans/store',[AdminPricingController::class,'storeotherplans']);
    Route::get('/otherplans/edit/{id}',[AdminPricingController::class,'editotherplans']);
    Route::post('/otherplans/update/{id}',[AdminPricingController::class,'updateotherplans']);
    Route::get('/otherplans/delete/{id}',[AdminPricingController::class,'deleteotherplans']);

    Route::get('/otherplansfeatures',[AdminPricingController::class,'showotherplansfeatures']);
    Route::get('/otherplansfeatures/create',[AdminPricingController::class,'createotherplansfeatures']);
    Route::post('/otherplansfeatures/store',[AdminPricingController::class,'storeotherplansfeatures']);
    Route::get('/otherplansfeatures/edit/{id}',[AdminPricingController::class,'editotherplansfeatures']);
    Route::post('/otherplansfeatures/update/{id}',[AdminPricingController::class,'updateotherplansfeatures']);
    Route::get('/otherplansfeatures/delete/{id}',[AdminPricingController::class,'deleteotherplansfeatures']);

    Route::get('/socialplans',[AdminPricingController::class,'showpricingplans']);
    Route::get('/socialplans/create',[AdminPricingController::class,'createpricingplans']);
    Route::post('/socialplans/store',[AdminPricingController::class,'storepricingplans']);
    Route::get('/socialplans/edit/{id}',[AdminPricingController::class,'editpricingplans']);
    Route::post('/socialplans/update/{id}',[AdminPricingController::class,'updatepricingplans']);
    Route::get('/socialplans/delete/{id}',[AdminPricingController::class,'deletepricingplans']);

    Route::get('/socialplansfeatures',[AdminPricingController::class,'showpricingplansfeatures']);
    Route::get('/socialplansfeatures/create',[AdminPricingController::class,'createpricingplansfeatures']);
    Route::post('/socialplansfeatures/store',[AdminPricingController::class,'storepricingplansfeatures']);
    Route::get('/socialplansfeatures/edit/{id}',[AdminPricingController::class,'editpricingplansfeatures']);
    Route::post('/socialplansfeatures/update/{id}',[AdminPricingController::class,'updatepricingplansfeatures']);
    Route::get('/socialplansfeatures/delete/{id}',[AdminPricingController::class,'deletesocialplansfeatures']);


    Route::get('/addfeature',[AdminPricingController::class,'showfinal']);
    Route::post('/addfeature/store',[AdminPricingController::class,'storefinal']);
    Route::get('/addfeature/delete/{id}',[AdminPricingController::class,'deletefinal']);

    Route::get('/planrequest',[AdminPricingController::class,'planrequest']);

    Route::get('/setting',[AdminSettingController::class,'index']);
    Route::post('/setting/update/1',[AdminSettingController::class,'update']);
});


