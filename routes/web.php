
Kaushik Poojari
1 year ago (edited)
+Aqil Asadi Check if these lines within web.php are as follows

<?php
Route::group(['middleware' => ['web']],function(){

   Route::get('/',function() {
       return view('welcome');
   });

   Route::post('/signup',[
       'uses'=>'UserController@postSignUp',
       'as'=>'signup'
   ]);
});