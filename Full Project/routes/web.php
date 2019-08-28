<?php

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
//register route
Route::get('/alumni/signup', 'WebsiteController@alumniSignup');
Route::get('/student/signup', 'WebsiteController@studentSingup');
//end register

//Alumni Dashboard
//------------ Profile ---------------
Route::get('/alumni/dashboard', 'AlumniDashboard@index')->name('alumni.home');
Route::get('/alumni/edit', 'AlumniDashboard@edit');
Route::post('/alumni/update/{id}', 'AlumniDashboard@update');
Route::get('/alumni/only_me/{id}', 'AlumniDashboard@onlyMe');
Route::get('/alumni/public/{id}', 'AlumniDashboard@public');
//------------ End Profile -----------

//------------ Project & Research -----------
Route::resource('/alumni/current_affiliation', 'CurrentAffiliationController');
Route::get('/alumni/affiliation/delete/{id}', 'CurrentAffiliationController@destroy');
//------------End Project & Research --------

//------------ Project & Research -----------
Route::resource('/alumni/project_research', 'ProjectResearchController');
Route::get('/alumni/project_research/delete/{id}', 'ProjectResearchController@destroy' );
Route::get('/alumni/project_research/only_me/{id}', 'ProjectResearchController@onlyMe' );
Route::get('/alumni/project_research/public/{id}', 'ProjectResearchController@public' );
//------------End Project & Research --------


//------------ My story --------
Route::get('/alumni/my_story', 'StoryController@index');
Route::get('/alumni/story/create', 'StoryController@create');
Route::post('/alumni/story/store', 'StoryController@updateOrCreate');
//------------End My story --------

//------------ My Travel Diary --------
Route::get('/alumni/travel', 'TravelController@index');
Route::get('/alumni/travel/create', 'TravelController@create');
Route::post('/alumni/travel/store', 'TravelController@updateOrCreate');
//------------End My story --------

//----------------- Education --------------------
Route::resource('/alumni/education', 'EducationController');
Route::get('/alumni/education/delete/{id}', 'EducationController@destroy');
//-----------------End Education --------------------


//----------------- workshop and jobs --------------------
Route::get('/alumni/workshop_job', 'WorkshopJobController@index');
Route::get('/alumni/workshop_job/create', 'WorkshopJobController@create');
Route::post('/alumni/workshop/store', 'WorkshopJobController@updateOrCreate');
//-----------------End workshop and jobs --------------------


//----------------- achievement --------------------
Route::get('/alumni/achievement', 'AchievementController@index');
Route::get('/alumni/achievement/create', 'AchievementController@create');
Route::post('/alumni/achievement/store', 'AchievementController@updateOrCreate');
//-----------------End achievement --------------------


//----------------- interesting_fact --------------------
Route::get('/alumni/interesting', 'InterestingController@index');
Route::get('/alumni/interesting/create', 'InterestingController@create');
Route::post('/alumni/interesting/store', 'InterestingController@updateOrCreate');
//-----------------End interesting_fact --------------------


//----------------- faq --------------------
Route::get('/alumni/faq', 'FaqController@index');
Route::get('/alumni/faq/create', 'FaqController@create');
Route::post('/alumni/faq/store', 'FaqController@updateOrCreate');

Route::get('/alumni/faq/question', 'FaqController@faqQuestion');
Route::get('/alumni/question/delete/{id}', 'FaqController@questionDelete');
//-----------------End faq --------------------


//----------------- Blog --------------------
Route::resource('/alumni/blog', 'BlogController');
Route::get('/alumni/blog/delete/{id}', 'BlogController@destroy');
Route::get('/alumni/blog/only_me/{id}', 'BlogController@onlyMe' );
Route::get('/alumni/blog/public/{id}', 'BlogController@public' );
//-----------------End Blog --------------------





//end Alumni Dashboard




//Student Dashboard
//--------- Student Update
Route::get('/student/dashboard', 'StudentDashboard@index')->name('student.home');
Route::get('/student/edit', 'StudentDashboard@edit');
Route::post('/student/update/{id}', 'StudentDashboard@update');
Route::get('/student/only_me/{id}', 'StudentDashboard@onlyMe');
Route::get('/student/public/{id}', 'StudentDashboard@public');
//end Alumni Dashboard

//------------ My story --------
Route::get('/student/story', 'StoryController@indexStudent');
Route::get('/student/story/create', 'StoryController@createStudent');
Route::post('/student/story/store', 'StoryController@updateOrCreateStudent');
//------------End My story --------

//----------- Education & Work -----------
Route::get('/student/education', 'EducationWorkController@index');
Route::get('/student/education/create', 'EducationWorkController@create');
Route::post('/student/education/store', 'EducationWorkController@updateOrCreate');
//----------- end education & work -----------

//----------------- faq --------------------
Route::get('/student/faq', 'FaqController@studentIndex');
Route::get('/student/faq/create', 'FaqController@studentCreate');
Route::post('/student/faq/store', 'FaqController@updateOrCreate');

Route::get('/student/faq/question', 'FaqController@faqQuestionStudent');
Route::get('/student/question/delete/{id}', 'FaqController@questionDelete');

//-----------------End faq --------------------





//-----####  Admin Information ####------
//Admin Login
Route::get('admin/login', 'Auth\AdminLogin@showLoginForm');
Route::post('admin/login', 'Auth\AdminLogin@login')->name('admin.login');
Route::post('admin/logout', 'Auth\AdminLogin@logout')->name('admin.logout');
//endAdmin Login

//Admin Dashboard
Route::get('admin/dashboard', 'AdminDashboard@index')->name('admin.home');
Route::get('admin/user/delete/{id}', 'AdminDashboard@deleteUser');

//Events
Route::resource('/admin/event', 'EventController');
Route::get('/admin/event/delete/{id}', 'EventController@destroy' );
Route::get('/admin/event/unpublished/{id}', 'EventController@unpublished' );
Route::get('/admin/event/published/{id}', 'EventController@published' );
//end Events

//contact
Route::get('/admin/contact', 'AdminDashboard@contact');
Route::get('/admin/contact/delete/{id}', 'AdminDashboard@contactDelete');
//end contact
//endAdmin Dashboard






//website route
Route::get('/', 'WebsiteController@index');
Route::get('/service', 'WebsiteController@service');

Route::get('/alumni', 'WebsiteController@alumni');
Route::get('/alumni/details/{user_name}', 'WebsiteController@alumniDetails')->name('home');

Route::get('/student', 'WebsiteController@student');
Route::get('/student/details/{user_name}', 'WebsiteController@studentDetails')->name('home');

Route::get('/event', 'WebsiteController@event');
Route::get('/event/details/{slug}', 'WebsiteController@eventDetails');

Route::get('/contact', 'WebsiteController@contact');
Route::post('/contact/store', 'WebsiteController@contactStore');


Route::get('/alumni/contact/{user_name}', 'WebsiteController@alumniContact');
Route::post('/alumni/contact/store', 'WebsiteController@questionStore');

Route::get('/student/contact/{user_name}', 'WebsiteController@studentContact');
Route::post('/student/contact/store', 'WebsiteController@questionStore');





//search
Route::get('/userSearch', 'WebsiteController@search');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
