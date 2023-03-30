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
Route::group(['namespace'=>'Front'], function () {
    Route::get('/', 'SiteController@index')->name('home');
    Route::get('/all-reviews',  'SiteController@allReviews')->name('reviews');
    Route::get('/generate', 'SitemapGenerateController@index')->name('sitemap');
    Route::get('/articles',  'SiteController@articles')->name('articles');
    Route::get('/articles/{slug}', 'SiteController@singleArticlePage')->name('show.article');
    Route::get('/about', 'SiteController@about')->name('about');
    Route::get('/contact', 'SiteController@contact')->name('contact');
    Route::get('/terms-of-use', 'SiteController@termsOfUse')->name('terms-of-use');
    Route::get('/disclaimer', 'SiteController@disclaimer')->name('disclaimer');
    Route::get('/{slug}', 'SiteController@singleReviewPage')->name('show.review');
    Route::post('/search', 'SearchController@search')->name('search');
});

Route::group(['prefix'=>'dqpkkbdoosenowk', 'middleware' => 'admin'], function () {
    Route::get('sign-in', array('as'=> 'login', 'uses' => 'AdminAuthController@getAdminLoginForm'))->withoutMiddleware('admin');
    Route::post('sign-in', array('as'=> 'post-login', 'uses' => 'AdminAuthController@login'))->withoutMiddleware('admin')->middleware('throttle:10.1');
    Route::group(['prefix'=>'post', 'namespace' => 'Admin', 'as' => 'post.'], function () {
        Route::get('','ReviewController@index')->name('list');
        Route::get('create', 'ReviewController@create')->name('create');
        Route::post('create', 'ReviewController@store')->name('post');
        Route::get('{id}/edit', 'ReviewController@edit')->name('edit');
        Route::post('{id}/edit', 'ReviewController@update')->name('update');
        Route::delete('{id}/delete', 'ReviewController@destroy')->name('delete');
    });
    Route::group(['namespace' => 'Admin'], function () {
        Route::get('comments', 'CommentController@index')->name('comments-navigation');
        Route::get('create/comment', 'CommentController@create')->name('comment-create');
        Route::post('create/comment/{slug}', 'CommentController@store')->withoutMiddleware('admin')->name('store-comment');
        Route::delete('comment/{id}/delete', 'CommentController@delete')->name('delete-comment');
        Route::get('comment/{id}/edit', 'CommentController@edit')->name('comment-edit');
        Route::post('comment/{id}/update', 'CommentController@update')->name('comment-update');
        Route::get('comment/approve/{comment}', 'CommentController@approveComment')->name('approve-comment');
    });
    Route::group(['namespace' => 'Admin'], function () {
        Route::get('articles', 'ArticleController@index')->name('articles-navigation');
        Route::get('create/article', 'ArticleController@create')->name('article-create');
        Route::post('create/article', 'ArticleController@store')->name('store-article');
        Route::get('article/{id}/edit', 'ArticleController@edit')->name('article-edit');
        Route::post('article/{id}/update', 'ArticleController@update')->name('article-update');
        Route::post('article/{id}/delete', 'ArticleController@destroy')->name('article-delete');
        Route::get('/edit/{id}/contacts', 'ContactUsController@edit')->name('contact-edit');
        Route::post('contacts/{id}/update', 'ContactUsController@update')->name('contact-update');
        Route::get('contact-us', 'ContactUsController@index')->name('contact-us');
        Route::post('contact-us', 'ContactUsController@store')->withoutMiddleware('admin')->name('store-contact-us');
    });
});
Route::get('/go-to/{slug}', 'RedirectController');


