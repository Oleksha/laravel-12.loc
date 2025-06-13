<?php

namespace App\Providers;

use App\Models\Smtp;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

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
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        $mail_setting = Smtp::query()->first();
        if ($mail_setting) {
            $data = [
                'driver' => $mail_setting->mail_mailer,
                'host' => $mail_setting->mail_host,
                'port' => $mail_setting->mail_port,
                'encryption' => $mail_setting->mail_encryption,
                'username' => $mail_setting->mail_username,
                'password' => $mail_setting->mail_password,
                'from' => [
                    'address' => $mail_setting->mail_from_address,
                    'name' => $mail_setting->app_name,
                ],
            ];
            $appName = [
                'name' => $mail_setting->app_name,
            ];
            Config::set('app.name', $appName['name']);
            Config::set('mail', $data);
        }
    }
}
