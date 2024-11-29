<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Kreait\Firebase\Factory;

class FirebaseServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('firebase.database', function () {
            $factory = (new Factory())
                ->withServiceAccount(env('FIREBASE_CREDENTIALS_PATH'))
                ->withDatabaseUri(env('FIREBASE_DATABASE_URI')); 
            $database = $factory->createDatabase();
            return $database;
        });
    }
}
