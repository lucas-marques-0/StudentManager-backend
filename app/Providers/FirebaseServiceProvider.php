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
                ->withServiceAccount('/mnt/c/Users/lucas/OneDrive/Área de Trabalho/inicie-project/backend/storage/firebase/firebase-credentials.json')
                ->withDatabaseUri('https://inicie-students-db-default-rtdb.firebaseio.com'); 
            $database = $factory->createDatabase();
            return $database;
        });
    }
}
