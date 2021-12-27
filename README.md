
# Part 1
#### 1. Laravel Project Created

1. laravel, xampp, composer and nodejs is installed
2. A New laravel project "BreezeMultiAuth" is created using below command inside  "G:\xampp\htdocs>" directory.

```bash
laravel new BreezeMultiAuth
```
```bash
cd BreezeMultiAuth
```
#### 2. Laravel Laravel Breeze Installed using the bellow commands inside project directory i.e. G:\xampp\htdocs\BreezeMultiAuth>

inside cmd/tarminal "G:\xampp\htdocs\BreezeMultiAuth>"
```bash
composer require laravel/breeze --dev
```
```bash
php artisan breeze:install
```
```bash
npm install && npm run dev
```
```bash
php artisan migrate
```
# Part 2
#### 1. Create Admins Table using the bellow command inside project directory i.e. G:\xampp\htdocs\BreezeMultiAuth>
```bash
php artisan make:migration create_admins_table
```
#### 2. change the schema of the admins table
inside \BreezeMultiAuth\database\migrations\2021_12_05_163553_create_admins_table.php
```bash
    Schema::create('admins', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->timestamp('email_verified_at')->nullable();
        $table->string('password');
        $table->tinyInteger('status')->default(0);
        $table->rememberToken();
        $table->timestamps();
    });
```
#### 3. Create a Admin Model
```bash
php artisan make:model Admin
```
#### 4. Copy everything from "BreezeMultiAuth\app\Models\User.php" to "BreezeMultiAuth\app\Models\Admin.php"
#### 5. open the Admin.php, change the class name from User to Admin. inside this class add a string variable guard and change the fillable array
```bash
	protected $guard = 'admin';
    protected $fillable = [
        'name',
        'email',
        'password',
		'status'
    ];
```
#### 6. Migrate the Admin table
```bash
php artisan migrate
```
#### 7. Modify 'gurads' and 'providers' inside \BreezeMultiAuth\config\Auth.php 
```bash
    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        //admin guard added
		'admin' => [
            'driver' => 'session',
            'provider' => 'admins', //newly created database table name
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],
        //admins provider added
        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Models\Admin::class,
        ],
    ],
```
#### 8. Create a Admin Middleware and a AdminController
```bash
php artisan make:middleware Admin
```
```bash
php artisan make:controller AdminController
```
#### 9. Register the middleware: Open \BreezeMultiAuth\app\Http\Kernel.php and add a new entry inside $routeMiddleware array
```bash
'admin' => \App\Http\Middleware\Admin::class,
```
#### 10. Open \BreezeMultiAuth\app\Http\Middleware\Admin.php and modify the handle function
add a namespace at the top
```bash
use Illuminate\Support\Facades\Auth;
```
modify the handle function
```bash
    public function handle(Request $request, Closure $next)
    {
        //Add this Condition
        if(!Auth::guard('admin')->check()){
            return redirect()->route('login_from')->with('error','Plz Login First');
        }
		
        return $next($request);
    }
```          
#### 11.Useing the AdminController: Open \BreezeMultiAuth\routes\web.php
add a namespace at the top
```bash
use App\Http\Controllers\AdminController;
```
add these routes for admin registration and login 
```bash
Route::prefix('admin')->group(function (){

    Route::get('/login',[AdminController::class, 'Index'])->name('admin_login_route');
    
    Route::post('/login/owner',[AdminController::class, 'Login'])->name('admin.login');
    
    Route::get('/dashboard',[AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');
    
    Route::get('/logout',[AdminController::class, 'AdminLogout'])->name('admin.logout')->middleware('admin');
    
    Route::get('/register',[AdminController::class, 'AdminRegister'])->name('admin.register');
    
    Route::post('/register/create',[AdminController::class, 'AdminRegisterCreate'])->name('admin.register.create');
    
    });
``` 
#### 12 Run the below command to get more accurate auto complete
```bash
composer require --dev barryvdh/laravel-ide-helper
```
#### 13 add these methods to AdminController class for displaying a view
```bash
    public function Index(){
        return view('admin.admin-login');   
    } 

    public function Dashboard(){
        return view('admin.index');
    }
    
    public function Login(Request $request){
        // dd($request->all());

        if(Auth::guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')  ])){
            return redirect()->route('admin.dashboard')->with('status','Admin Login Successfully');
        }else{
            return back()->with('status','Invaild Email Or Password');
        }
    }  

    public function AdminLogout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login_route')->with('status','Admin Logout Successfully');
    }

    public function AdminRegister(){
        return view('admin.admin-register');
    } 

    public function AdminRegisterCreate(Request $request){

        // dd($request->all());

        Admin::insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'created_at' => Carbon::now(),
        ]);
         return redirect()->route('admin_login_route')->with('status','Admin Created Successfully');
    } 
```
#### 14 Create all the views necessary for admin user inside resources\views
i. create a folder called admin inside BreezeMultiAuth\resources\views

ii. create index.blade.php, admin_login.blade.php, admin_register.blade.php inside admin folder

iii. Copy paste the code for these files from this repo 