
<?php
Route::group(['middleware' => ['web']],function(){

   Route::get('/',function() {
       return view('welcome');
   })->name('login');


   Route::post('/signup',[
       'uses'=>'UserController@postSignUp',
       'as'=>'signup'
   ]);

      Route::post('/signin',[
       'uses'=>'UserController@postSignin',
       'as'=>'signin'
   ]);

      Route::get('/logout',[
       'uses'=>'UserController@getLogout',
       'as'=>'logout'
   ]);

   Route::get('/dashboard', [
    'uses' => 'PostController@getDashboard',
    'as' => 'dashboard',
  ])->middleware('auth');

   Route::post('/createpost',[
       'uses'=>'PostController@postCreatePost',
       'as'=>'post.create'
   ])->middleware('auth');

   Route::get('/delete-post/{post_id}', [
    'uses' => 'PostController@getDeletePost',
    'as' => 'post.delete',
  ])->middleware('auth');

});