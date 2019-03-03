<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('text','components.from.text', ['name','value' => null,'attributes'=>[]]);
        Form::component('textarea','components.from.textarea', ['name','value' => null,'attributes'=>[]]);
        Form::component('submit','components.from.submit', ['value' => 'Submit','attributes'=>[]]);
        Form::component('hidden','components.from.hidden', ['name','value' => null,'attributes'=>[]]);
        Form::component('file','components.from.file', ['name','attributes'=>[]]);
    }
}
