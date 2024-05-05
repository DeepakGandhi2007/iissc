<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\publicationcontroller;
use App\Http\Controllers\adminFacultyController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\OutreacherController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\lncontroller;


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


Route::get('/', [AboutController::class, 'homepage'])->name('homepage');
Route::get('/about-us', [AboutController::class, 'index'])->name('about');
Route::get('/faculty', [FacultyController::class, 'index'])->name('faculty');
Route::get('/students', [StudentController::class, 'index'])->name('students');
Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/research', [CourseController::class, 'research'])->name('research');
Route::get('/outreach', [CourseController::class, 'outreach'])->name('outreach');
Route::get('/news', [CourseController::class, 'news'])->name('news');
Route::get('/events', [CourseController::class, 'events'])->name('events');
Route::get('/contact-us', [CourseController::class, 'contact'])->name('contact');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/banner', [BannerController::class, 'index'])->name('banner');
Route::get('admin/add-Banner', [BannerController::class, 'add'])->name('addbanner');
Route::post('admin/store-Banner', [BannerController::class, 'store'])->name('banner.store');
Route::get('edit-banner/{id}', [BannerController::class, 'edit'])->name('editbanner');
Route::post('banner-update/{id}', [BannerController::class, 'update'])->name('banner.update');
Route::get('delete-banner/{id}', [BannerController::class, 'delete'])->name('deletebanner');


Route::get('admin/publication', [publicationcontroller::class, 'index'])->name('publication');
Route::get('admin/add-Publication', [publicationcontroller::class, 'add'])->name('addpublicati');
Route::post('admin/store-Publication', [publicationcontroller::class, 'store'])->name('Publication.store');
Route::get('edit-publication/{id}', [publicationcontroller::class, 'edit'])->name('editpublication');
Route::post('publication-update/{id}', [publicationcontroller::class, 'update'])->name('publication.update');
Route::get('delete-publication/{id}', [publicationcontroller::class, 'delete'])->name('deletebpublication');


Route::get('admin/Faculty', [adminFacultyController::class, 'index'])->name('Faculty');
Route::get('admin/add-Faculty', [adminFacultyController::class, 'add'])->name('addFaculty');
Route::post('admin/store-faculty', [adminFacultyController::class, 'store'])->name('faculty.store');
Route::get('edit-faculty/{id}', [adminFacultyController::class, 'edit'])->name('editfaculty');
Route::post('faculty-update/{id}', [adminFacultyController::class, 'update'])->name('faculty.update');
Route::get('delete-faculty/{id}', [adminFacultyController::class, 'delete'])->name('deletebfaculty');


Route::get('admin/about', [AboutController::class, 'admin'])->name('admin.about');
Route::get('admin/add-about', [AboutController::class, 'add'])->name('addFabout');
Route::post('admin/store-about', [AboutController::class, 'store'])->name('about.store');
Route::get('edit-about/{id}', [AboutController::class, 'edit'])->name('editabout');
Route::post('about-update/{id}', [AboutController::class, 'update'])->name('about.update');


Route::get('admin/courses', [CourseController::class, 'admin'])->name('admin.courses');
Route::get('admin/add-courses', [CourseController::class, 'add'])->name('add.courses');
Route::post('admin/store-courses', [CourseController::class, 'store'])->name('courses.store');
Route::get('edit-courses/{id}', [CourseController::class, 'edit'])->name('editcourses');
Route::post('courses-update/{id}', [CourseController::class, 'update'])->name('courses.update');
Route::get('delete-courses/{id}', [CourseController::class, 'delete'])->name('deletebcourses');


Route::get('admin/research', [ResearchController::class, 'index'])->name('admin.research');
Route::get('admin/add-research', [ResearchController::class, 'add'])->name('add.research');
Route::post('admin/store-research', [ResearchController::class, 'store'])->name('research.store');
Route::get('edit-researches/{id}', [ResearchController::class, 'edit'])->name('editresearches');
Route::post('researches-update/{id}', [ResearchController::class, 'update'])->name('researches.update');
Route::get('delete-researches/{id}', [ResearchController::class, 'delete'])->name('deleteresearches');


Route::get('admin/Outreach', [OutreacherController::class, 'index'])->name('admin.Outreach');
Route::get('admin/add-Outreach', [OutreacherController::class, 'add'])->name('addFOutreach');
Route::post('admin/store-Outreach', [OutreacherController::class, 'store'])->name('Outreach.store');
Route::get('edit-outreaches/{id}', [OutreacherController::class, 'edit'])->name('editoutreaches');
Route::post('outreaches-update/{id}', [OutreacherController::class, 'update'])->name('outreaches.update'); 


Route::get('admin/Students', [StudentController::class, 'admin'])->name('Students');
Route::get('admin/add-students', [StudentController::class, 'add'])->name('addstudents');
Route::post('admin/store-student', [StudentController::class, 'store'])->name('student.store');
Route::get('edit-students/{id}', [StudentController::class, 'edit'])->name('editstudents');
Route::post('students-update/{id}', [StudentController::class, 'update'])->name('students.update');
Route::get('delete-students/{id}', [StudentController::class, 'delete'])->name('deletebstudents');


Route::get('admin/news', [NewsController::class, 'index'])->name('news');
Route::get('admin/add-News', [NewsController::class, 'add'])->name('addsNews');
Route::post('admin/store-news', [NewsController::class, 'store'])->name('news.store');
Route::get('edit-news/{id}', [NewsController::class, 'edit'])->name('editnews');
Route::post('news-update/{id}', [NewsController::class, 'update'])->name('news.update');
Route::get('delete-news/{id}', [NewsController::class, 'delete'])->name('deletebnews');



Route::get('admin/publicevent', [BannerController::class, 'publicevent'])->name('publicevent');
Route::get('admin/add-publicevent', [BannerController::class, 'addpublicevent'])->name('addpublicevent');
Route::post('admin/store-publicevenrt', [BannerController::class, 'storepublicevenrt'])->name('publicevenrt.store');
Route::get('edit-publicevent/{id}', [BannerController::class, 'editpublicevent'])->name('editpublicevent');
Route::post('publicevent-update/{id}', [BannerController::class, 'publiceventupdate'])->name('publicevent.update');

Route::post('messageform', [AboutController::class, 'messageform'])->name('messageform');

Route::get('/chairman', [FacultyController::class, 'chairman'])->name('chairman');
Route::get('/chairman', [FacultyController::class, 'chairman'])->name('chairman');
Route::get('/Upendra', [FacultyController::class, 'Upendra'])->name('Upendra');
Route::get('/Durgesh', [FacultyController::class, 'Durgesh'])->name('Durgesh');
Route::get('/L2N', [lncontroller::class, 'index'])->name('L2N');
Route::get('/userregister', [lncontroller::class, 'userregister'])->name('userregister');
Route::get('/userlogin', [lncontroller::class, 'userlogin'])->name('userlogin');

Route::post('saveuser', [lncontroller::class, 'saveuser'])->name('saveuser');
Route::post('loginuser', [lncontroller::class, 'loginuser'])->name('loginuser');
Route::post('ln2save', [lncontroller::class, 'ln2save'])->name('ln2save');

Route::get('/admin/l2nrequest', [lncontroller::class, 'l2nrequest'])->name('l2nrequest');
Route::get('/admin/get-l2n-details/{id}', [lncontroller::class, 'getL2nDetails']);

Route::get('/admin/report', [lncontroller::class, 'report'])->name('report');
Route::post('/fetch-data',[lncontroller::class, 'fetchdata'])->name('fetch-data');

