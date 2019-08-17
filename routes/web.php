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
 

Route::post('/subscribe',function(){

	$email= request('email');


	Newsletter::subscribe($email);

	Session::flash('sucess','subscribed successfully.');
	return redirect()->back();

});

Route::get('/results', function(){

	$products = \App\Product::where('name','like', '%' . request('query') . '%')->get();

	return view('results')->with('products', $products)
						  ->with('query', request('query'))
						  ->with('name', 'Search results : ' . request('query'));

});



Route::middleware(['admin'])->group(function () {
	Route::resource('products', 'ProductController');
Route::resource('categories', 'CategoryController');
Route::resource('reports', 'ReportController');
Route::resource('events', 'EventController');
Route::resource('videos', 'VideoController');

Route::get('/settings',[

	'uses'=> 'SettingsController@index',
	'as'=> 'settings'

]);

Route::post('settings/update',[

	'uses'=>	'SettingsController@update',
	'as'=>	'settings.update'

]);


Route::get('/admin/orders',[
	'uses'=> 'OrdersController@adminindex',
	'as'=>'admin.orders'
]);

Route::get('/admin/orderdetails/{order_id}',[
	'uses'=>'OrdersController@adminvieworderitems',
	'as'=>'admin.orderitems.users'
]);

Route::get('/admin/updateorder/{order_id}',[
	'uses'=>'OrdersController@updateorder',
	'as'=>'admin.updateorder.users'
]);
});

Route::middleware(['auth'])->group(function () {
	Route::get('/orderdetails/{order_id}',[
		'uses'=>'OrdersController@vieworderitems',
		'as'=>'orderitems.users'
	]);
	Route::get('/orders',[
		'uses'=> 'OrdersController@index',
		'as'=>'orders.user.index'
	]);
	Route::get('/cart/checkout',[

		'uses' => 'CheckoutController@index',
	
		'as' => 'cart.checkout'
	
	]);
	

	Route::post('create/order', [

		'uses' => 'CheckoutController@createOrder',
		'as' => 'cart.create.order'
	
	]);
	Route::post('/cart/checkout/{order_id}', [

		'uses' => 'CheckoutController@pay',
		'as' => 'cart.checkout.payment'
	
	]);
	Route::get('/checkout/{order_id}', [
		'uses' => 'CheckoutController@showpaymentOptions',
		'as' => 'cart.paymenoptions.checkout'
	
	]);
	
});




Route::get('/shop',[

	'uses' =>  'FrontEndController@index',

	'as' =>  'shop'

]);


Route::post('/cart/update/{id}',[

	'uses' =>  'ShoppingController@update_cart_item',

	'as' =>  'cart.update'

]);

Route::post('/cart/add',[

	'uses' =>  'ShoppingController@add_to_cart',

	'as' =>  'cart.add'

]);

Route::get('/cart',[

	'uses' => 'ShoppingController@cart',
	'as' => 'cart'
]);

Route::get('/cart/delete/{id}',[
 
 	'uses' =>'ShoppingController@cart_delete',
 	'as' => 'cart.delete'
]);

Route::post('/cart/rapid/add',[

	'uses' => 'ShoppingController@rapid_add',
	'as' =>'cart.rapid.add'
]);

Route::get('/product/{id}',[

'uses' => 'FrontEndController@singleProduct',

'as' => 'products.single'

]);



Route::get('/event/all', [

	'uses' => 'FrontEndController@eventall',
	'as' => 'event'

]);

Route::get('/event/{id}', [

	'uses' => 'FrontEndController@event',
	'as' => 'event.single'

]);

Route::get('/news/all', [

	'uses' => 'FrontEndController@reportall',
	'as' => 'report'

]);

Route::get('/news/{id}', [

	'uses' => 'FrontEndController@report',
	'as' => 'report.single'

]);

Route::get('/ondemandvideo/{id}', [

	'uses' => 'FrontEndController@svideo',
	'as' => 'video.single'

]);

Route::get('/ondemandvideo',[

	'uses' =>  'FrontEndController@video',

	'as' =>  'video'

]);



Route::get('/', 'FrontEndController@welcome');

Route::get('/give', 'FrontEndController@give');

Route::get('pay-with-paypal','CheckoutController@paywithpaypal')->name('payment.paypal');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category/{category_id}','FrontEndController@filter_categories')->name('category.filter');
