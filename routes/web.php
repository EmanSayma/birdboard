<?php


Route::group(['middleware'=>'auth'], function (){

    Route::resource('/projects','ProjectsController');

    Route::post('/projects/{project}/tasks','ProjectTasksController@store');
    Route::patch('/projects/{project}/tasks/{task}','ProjectTasksController@update');

    Route::get('/home', 'HomeController@index')->name('home');

});

Auth::routes();


Route::get('/', function () {

//    class Fish{
//        public function swim()
//        {
//            return 'swimming';
//        }

//        public function eat()
//        {
//            return 'eating';
//        }
//    }

//    app()->bind('fish', function (){
//        return new Fish;
//    });

//    class Bike{
//        public function start()
//        {
//            return 'starting';
//        }
//    }

//    app()->bind('bike', function (){
//        return new Bike;
//    });

//    class Facade{
//     public function __callStatic($name, $arguments)
//     {
//         return app()->make(static::getFacadeAccessor())->$name();
//     }

//     protected static function getFacadeAccessor()
//     {

//     }
//    }

//    class BikeFacade extends Facade{
//     protected static function getFacadeAccessor()
//     {
//         return 'bike';
//     }
// }

//    class FishFacade extends Facade{
//        protected static function getFacadeAccessor()
//        {
//            return 'fish';
//        }
//    }

//    dd(BikeFacade::start());

    return view('welcome');

});


