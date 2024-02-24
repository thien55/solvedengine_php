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

Route::get('/', function () {
    return view('index-light');
});
// Route::get('/index-light', function () {
//     return view('index-light');
// });
// Route::get('/index-construction', function () {
//     return view('index-construction');
// });
// Route::get('/index-video', function () {
//     return view('index-video');
// });
// Route::get('/login', function()
// {
//     return view('login');
// });
// Route::get('/register', function()
// {
//     return view('register');
// });
Route::get('/about', function()
{
    return view('about');
});
Route::get('/services', function()
{
    return view('services');
});
Route::get('/services-detail', function()
{
    return view('services-detail');
});
Route::get('/solar-detail', function()
{
    return view('solar-detail');
});
Route::get('/IT-detail', function()
{
    return view('IT-detail');
});
Route::get('/Telecom-detail', function()
{
    return view('Telecom-detail');
});
Route::get('/Electrical-detail', function()
{
    return view('Electrical-detail');
});
Route::get('/security-detail', function()
{
    return view('security-detail');
});
Route::get('/team', function()
{
    return view('team');
});
Route::get('/contact', function()
{
    return view('contact');
});
Route::get('/Transmission', function()
{
    return view('Transmission');
});
Route::get('/Substatio', function()
{
    return view('Substatio');
});
Route::get('/NV5', function()
{
    return view('NV5');
});
Route::get('/FIRM', function()
{
    return view('FIRM');
});
Route::get('/CADD', function()
{
    return view('CADD');
});
// Route::get('/work', function()
// {
//     return view('work');
// });
// Route::get('/work-detail', function()
// {
//     return view('work-detail');
// });
// Route::get('/pricing', function()
// {
//     return view('pricing');
// });
// Route::get('/404', function()
// {
//     return view('404');
// });
// Route::get('/coming-soon', function()
// {
//     return view('coming-soon');
// });
// Route::get('/reset-password', function()
// {
//     return view('reset-password');
// });
// Route::get('/support', function()
// {
//     return view('support');
// });
// Route::get('/shop', function()
// {
//     return view('shop');
// });
// Route::get('/shop-detail', function()
// {
//     return view('shop-detail');
// });
// Route::get('/shop-cart', function()
// {
//     return view('shop-cart');
// });
// Route::get('/news-1', function()
// {
//     return view('news-1');
// });
// Route::get('/news-2', function()
// {
//     return view('news-2');
// });
// Route::get('/news-detail', function()
// {
//     return view('news-detail');
// });
// Route::get('/faq', function()
// {
//     return view('faq');
// });
Route::get('/client', function()
{
    return view('testimonial');
});
Route::get('/project', function()
{
    return view('project');
});
Route::get('/career', function()
{
    return view('carear');
});
Route::get('/kdm', function()
{
    return view('kdm-detail');
});
Route::get('/intelligrid', function()
{
    return view('intelligrid');
});
Route::get('/sangas', function()
{
    return view('sangas');
});