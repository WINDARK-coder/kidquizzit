<?php

namespace App\Providers;

use App\Helpers\CmsSidebar;
use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer('admin.inc.left_sidebar', function () {
            $this->generateCmsSidebar();
            view()->share('sidebarItems', CmsSidebar::getInstance()->getItems());
        });
        if (Schema::hasTable('users')) {
            view()->share('users', User::all());
        }
    }

    public function generateCmsSidebar()
    {
        $adminSidebarMenu = CmsSidebar::getInstance();
        $adminSidebarMenu->addItems(config('cms_sidebar_menu'));
    }
}
