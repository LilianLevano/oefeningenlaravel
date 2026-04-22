<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */


    public function boot()
    {
        $basePath = resource_path('views/exercises');

        $modules = collect(File::directories($basePath))->map(function ($modulePath) use ($basePath) {

            $moduleName = basename($modulePath);

            $levels = collect(File::directories($modulePath))->map(function ($levelPath) {

                $levelName = basename($levelPath);

                $exercises = collect(File::files($levelPath))
                    ->map(fn ($file) => str_replace('.blade.php', '', $file->getFilename()))
                    ->values();

                return [
                    'name' => $levelName,
                    'exercises' => $exercises,
                ];
            });

            return [
                'name' => $moduleName,
                'levels' => $levels,
            ];
        });

        View::share('modules', $modules);
    }
}
