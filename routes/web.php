
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

   Route::get('/dashboard', [
    'uses' => 'PostController@getDashboard',
    'as' => 'dashboard',
  ])->middleware('auth');

   Route::post('/createpost',[
       'uses'=>'PostController@postCreatePost',
       'as'=>'post.create'
   ]);

});