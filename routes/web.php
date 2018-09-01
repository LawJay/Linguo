
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

    Route::get('/account',[
       'uses'=>'UserController@getAccount',
       'as'=>'account'
   ])->middleware('auth');

    Route::get('/info',[
        'uses'=>'UserController@getInfo',
        'as'=>'info'
    ])->middleware('auth');

Route::post('/updateaccount', [
    'uses' => 'UserController@postSaveAccount',
    'as' => 'account.save',
])->middleware('auth');

Route::get('uploads/{filename}', [
    'uses' => 'UserController@getUserImage',
    'as' => 'account.image',
])->middleware('auth');
  

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

   Route::post('/edit', [
    'uses' => 'PostController@postEditPost',
    'as' => 'edit',
   ])->middleware('auth');

   Route::post('/like', [
    'uses' => 'PostController@postLikePost',
    'as' => 'like',
   ])->middleware('auth');

    Route::get('/online',[
    'uses'=>'PagesController@online',
    'as'=>'online',
    ])->middleware('auth');

    Route::get('/profile',[
        'uses'=>'PagesController@profile',
        'as'=>'profile',
    ])->middleware('auth');

    Route::get('/messages',[
        'uses'=>'UserController@messages',
        'as'=>'messages',
    ])->middleware('auth');

    Route::get('/users/{user_id}', [
        'uses' => 'UserController@getUser',
        'as' => 'users',
    ])->middleware('auth');
});