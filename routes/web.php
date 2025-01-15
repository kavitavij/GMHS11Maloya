<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Frontend\Home;
use App\Livewire\Frontend\Videos;
use Illuminate\Support\Facades\Route;
use App\Livewire\Frontend\Aboutus;
use App\Livewire\Frontend\Academic;
use App\Livewire\Frontend\Affiliation;
use App\Livewire\Frontend\EventNews;
use App\Livewire\Frontend\Gallary;
use App\Livewire\Frontend\PrincipalDesk;
use App\Livewire\Frontend\SchoolDetails;
use App\Livewire\Frontend\SchoolEnrollments;
use App\Livewire\Frontend\Clubs;
use App\Livewire\Frontend\Commitee;
use App\Livewire\Frontend\CommitteeMember;
use App\Livewire\Frontend\Contactus;
use App\Livewire\Frontend\Curriculum;
use App\Livewire\Frontend\EcoClub;
use App\Livewire\Frontend\Enrollments;
use App\Livewire\Frontend\Facility;
use App\Livewire\Frontend\FeeStructures;
use App\Livewire\Frontend\FrontendNavbar;
use App\Livewire\Frontend\GallaryCategory;
use App\Livewire\Frontend\History;
use App\Livewire\Frontend\Infrastucture;
use App\Livewire\Frontend\MandatoryDisclosure;
use App\Livewire\Frontend\Missionvision;
use App\Livewire\Frontend\NonTeaching;
use App\Livewire\Frontend\Result;
use App\Livewire\Frontend\Teacher;
use App\Livewire\Frontend\TransferCertificate;
use App\Livewire\Frontend\TransferCertificateCategory;

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

Route::get('/', Home::class);
Route::get('/infrastructure', Infrastucture::class);
Route::get('/affiliation', Affiliation::class);
Route::get('/result', Result::class);
Route::get('/curriculum', Curriculum::class);
Route::get('/Mandatory', MandatoryDisclosure::class);
Route::get('/principaldesk', PrincipalDesk::class);
Route::get('/events', EventNews::class);
Route::get('/gallerycategory', GallaryCategory::class);
Route::get('/gallery/{id}', Gallary::class )->name('gallery');
Route::get('/transfercategory', TransferCertificateCategory::class);
Route::get('/transfer/{id}', TransferCertificate::class )->name('TransferCertificate');
Route::get('/contactus', Contactus::class );
Route::get('/aboutus', Aboutus::class );
Route::get('/schoolEnrollments', SchoolEnrollments::class );
Route::get('/teaching', Teacher::class );
Route::get('/nonteaching', NonTeaching::class );
Route::get('/schooldetails', SchoolDetails::class );
Route::get('/club', Clubs::class );
Route::get('/videos', Videos::class );
Route::get('/ecoClub', EcoClub::class );
Route::get('/commitee', Commitee::class );
Route::get('/committeemamber/{id}', CommitteeMember::class )->name('committeemamber');;
Route::get('/feestructure', FeeStructures::class );
Route::get('/mission', Missionvision::class );
Route::get('/enrollments', Enrollments::class );
Route::get('/facility', Facility::class );
Route::get('/history', History::class );
Route::get('/academic', Academic::class );

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
