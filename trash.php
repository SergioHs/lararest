<?

  public function authenticate(Request $request) {
         // Get only email and password from request
         $credentials = $request->only('email', 'password');
  
         // Get user by email
         $user = User::where('email', $credentials['email'])->first();

         print_r($user);
  
         // Validate User
         if(!$user) {
           return response()->json([
             'error' => 'Invalid credentials'
           ], 401);
         }
  
         // Validate Password
         if (!Hash::check($credentials['password'], $user->password)) {
             return response()->json([
               'error' => 'Invalid credentials'
             ], 401);
         }
  
         // Generate Token
         $token = JWTAuth::fromUser($user);
  
         // Get expiration time
         $objectToken = JWTAuth::setToken($token);
         $expiration = JWTAuth::decode($objectToken->getToken())->get('exp');
  
         return response()->json([
           'access_token' => $token,
           'token_type' => 'bearer',
           'expires_in' => JWTAuth::decode()->get('exp')
         ]);
    }
    



ON WEB.PHP
// Route::resource('applicants', 'App\Http\Controllers\ApplicantsController');
// Route::resource('skills', 'App\Http\Controllers\SkillsController');

// Route::get('error', function () {
//   return response()->json(['message' => 'Auth Error', 'status' => '401']);
// })->name('error');


// Route::group(array('prefix' => 'api', 'middleware' => ['auth']), function()
// {
//   Route::get('/', function () {
//     return response()->json(['message' => 'Applicants API', 'status' => 'Connected']);
//   })->name('/');

//   Route::resource('applicants', 'App\Http\Controllers\ApplicantsController');
//   Route::resource('skills', 'App\Http\Controllers\SkillsController');


//   Route::get('/error', function () {
//     return response()->json(['message' => 'Applicants API', 'status' => '401 Forbbiden']);
//   });

// });


ON API.PHP


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::group([

//     'middleware' => 'api',
//     'namespace' => 'App\Http\Controllers',
//     'prefix' => 'auth'

// ], function ($router) {

//     Route::post('login', 'AuthController@login');
//     Route::post('logout', 'AuthController@logout');
//     Route::post('refresh', 'AuthController@refresh');
//     Route::post('me', 'AuthController@me');

// });

/*/*/*/*/