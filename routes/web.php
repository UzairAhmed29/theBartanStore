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
// Auth Routes
Auth::routes();
Route::post('/register/user', 'Admin\UsersController@registeration')->name('custom-registeration');
// middleware Routes for backend login User
Route::group(['middleware' => ['auth', 'role']], function() {
	Route::get('/cache-clear', 'HomeController@cache')->name('cache-clear');
// Dashboard Routes
Route::get('/dashboard', 'HomeController@index')->name('home');
// Prefix Allias /dashboard || namespace inside Admin folder controller are exist
Route::group(array('namespace' => 'Admin', 'prefix' => '/dashboard'), function() {
// Product Routes
Route::resource('/product', 'ProductsController');
// Coupon Routes
Route::resource('/coupon', 'CouponsController');
// Product Status Route
Route::put('/product/{id}/status', 'ProductsController@status')->name('productStatus');  
// Product Variation Routes
Route::get('/product/{id}/variable', 'ProductAttributesAndVariationsController@attributes')->name('attributes');
// Save product Atrributes via ajax
Route::post('/product/{id}/create/attributes', 'ProductAttributesAndVariationsController@saveAttributes')->name('saveAttributes');
// Check if the attributes exist in database
Route::put('/product/update/attributes', 'ProductAttributesAndVariationsController@updateAttributes')->name('updateAttr');
// Adding attributes
Route::post('/product/{id}/add/attributes', 'ProductAttributesAndVariationsController@addAttributes')->name('addAttr');
// delete attributes
Route::delete('/product/{id}/delete/attribute', 'ProductAttributesAndVariationsController@deleteAttr')->name('deleteAttr');
// Create Product Variations
Route::get('/create/variations/{id}/', 'ProductAttributesAndVariationsController@createVariation')->name('createVariations');
// ReCreate Product Variations
Route::get('/recreate/variations/{id}/', 'ProductAttributesAndVariationsController@recreateVariation')->name('recreateVariations');
// Delete single variation from the database
Route::delete('/variation/{id}/delete', 'ProductAttributesAndVariationsController@deleteVariation')->name('deleteVariation');
// Update All Variations
Route::put('/update/variations/{id}/', 'ProductAttributesAndVariationsController@updateVariations')->name('updateVariations');
// Category Routes
Route::resource('/category', 'CategoriesController');
// Category Status Route
Route::put('/category/{id}/status', 'CategoriesController@status')->name('CategoryStatus');
// Gallery/Media Routes
Route::resource('/gallery', 'GalleriesController');
// Gallery Status Route
Route::put('/gallery/{id}/status', 'GalleriesController@status')->name('GalleryStatus');
// Brand Routes
Route::resource('/brand', 'BrandsController');
// Brand Status Route
Route::put('/brand/{id}/status', 'BrandsController@status')->name('BrandStatus');
// Order Routes
Route::resource('/order', 'OrdersController');
// Contact_Us Frontend Routes
Route::resource('/contact_us', 'Contact_usesController');
// Contact Backend Routes
Route::resource('/contact', 'ContactController');
// Users Routes
Route::resource('/user', 'UsersController');
// User Status Route
Route::put('/user/{id}/status', 'UsersController@status')->name('UserStatus');
// Profile Routes
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile/update', 'ProfileController@updateProfileBasic')->name('updateProfileBasic');
Route::put('/profile/imageupdate', 'ProfileController@updateProfileImage')->name('updateProfileImage');
Route::put('/profile/password/update', 'ProfileController@changePassword')->name('changePassword');



});
});
// faceboo socialite backend routes
// Route::get('login/facebook', 'Auth\LoginController@redirectToProvider')->name('registerWithFacebook');
// Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');


// Frontend Routes

// Main Homepage Route
Route::get('/', 'FrontendController@main')->name('main');
// Category Route
Route::get('/category/{category}', 'FrontendController@category')->name('category');
// Prouct Page
Route::get('/products', 'ProductController@index')->name('products');
// Product related to category
Route::get('/products/{slug}/category', 'ProductController@categoryRelatedProducts')->name('category-related-products');
// Products price range
Route::get('/product/price-range', 'ProductController@priceRange')->name('products-priceRange');
// Product Gallery Route
Route::get('/product/gallery', 'ProductController@gallery')->name('gallery');
// Product Detail Route
Route::get('/product/{slug}/detail', 'ProductController@productDetail')->name('product-detail');
// Poduct Detail get variation price via AJAX
Route::post('/product/{id}/detail', 'ProductController@getPrice')->name('getPrice');
// Review Post AJax Route
Route::post('/product/{slug}/review', 'ProductController@review')->name('productReview');
// FAQ Route
Route::get('/faq', 'FrontendController@faq')->name('faq');
// Privacy Policy Route
Route::get('/privacy-policy', 'FrontendController@privacy_policy')->name('privacy-policy');
// Contact Us Page
Route::get('/contact-us', 'FrontendController@getContactUs')->name('get-contactUs');
// Post contact us
Route::post('/contact-us', 'FrontendController@postContactUs')->name('postContactUs');
// Search with Category
Route::post('/search', 'FrontendController@searchByCategory')->name('searchByCategory');
// Subscribe newsletter post route
Route::post('/newsletter/subscribe', 'FrontendController@newsletter')->name('mailchimp');

// Route::post('/product/{id}/modal', 'FrontendController@modalAjax')->name('modal-image-ajax');
// Frontend Login Form GET
Route::get('/customer/login', 'FrontentAuthController@showLoginForm')->name('front-login');
// Frontend Register Form POST
Route::post('/customer/login', 'FrontentAuthController@login')->name('fLogin');
// Frontend Register Form GET
Route::get('/customer/register', 'FrontentAuthController@showRegisterForm')->name('front-register');
// Frontend Post Register
Route::post('/customer/register', 'FrontentAuthController@register')->name('fRegister');
// Frotend Logout
Route::post('/customer/logout', 'FrontentAuthController@frontendlogout')->name('fLogout');
// Customer Forgot password
Route::get('/customer/reset-password', 'FrontentAuthController@getForgotPass')->name('forgot-pass');
// Post front reset password
Route::post('/customer/reset-password', 'FrontentAuthController@postForgotPass')->name('forgot-pass-post');
Route::get('/reset-password/{token}', 'FrontentAuthController@resetPassword')->name('get-reset-pass');
Route::post('/reset-password', 'FrontentAuthController@updatePassword')->name('reset-new-password');


// ECommerce Routes
// cart add Variable product
Route::post('/product/{slug}/add-to-cart', 'CartController@add')->name('add-to-cart');
// Add to Cart without variations 
Route::get('/product/{slug}/add-to-cart/single', 'CartController@addSingleProduct')->name('add-to-cart-single');
// Route home cart
Route::get('/product/{slug}/add-cart/', 'CartController@addCartHome')->name('cart-home');
// Cart view Get
Route::get('/cart', 'CartController@view')->name('view-cart');
// Remove product from cart
Route::delete('/cart/{cart}/remove', 'CartController@remove')->name('remove-cart');
// Cart update quantity
Route::put('/cart/{cart}/update', 'CartController@update')->name('cart-update');
// Remove all items from cart get
Route::get('/cart/clear', 'CartController@clear')->name('cart-clear');
// Coupon route get
Route::get('/cart/apply-coupon', 'CartController@applyCoupon')->name('coupon');

// Remove Coupon
Route::get('/cart/coupon/remove', 'CartController@removeCoupon')->name('remove-coupon');

// Wishlist Routes
// View Wishlist get route
Route::get('/wishlist', 'WishlistController@index')->name('wishlist');
// Add items to wishlist
Route::get('/wishlist/{slug}', 'WishlistController@addToWishlist')->name('add-wishlist');
// Ajax add index
Route::post('/wishlist/{slug}/add', 'WishlistController@ajaxAdd');
// Remove wishlist item
Route::get('/wishlist/{slug}/remove', 'WishlistController@remove');
//Checkout Routes
Route::get('/checkout', 'CartController@viewCheckout')->name('view-checkout');
// Checkout Login
Route::post('/public/checkout/login', 'CartController@LoginCheckout')->name('checkout-login');
// Place Order route post
Route::post('/checkout/order', 'CartController@order')->name('place-order');
// Order complete page route get
Route::get('/checkout/{orderId}/processing', 'CartController@orderComplete')->name('order-complete');
// <My Account page
Route::get('/my-account', 'CartController@myAccount')->name('get-my-account');
// order cancel by customer
Route::put('/my-account/{order}', 'CartController@cancelOrder')->name('order-cancel');
// view order my-account page
Route::get('/my-account/{order}/view', 'CartController@viewOrder')->name('order-view');
// Update account info
Route::post('/my-account/update', 'CartController@updateUser')->name('update-user-info');


