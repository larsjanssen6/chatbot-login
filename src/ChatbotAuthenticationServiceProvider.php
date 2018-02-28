<?php

namespace LarsJanssen\ChatbotAuthentication;

use Illuminate\Support\ServiceProvider;

class ChatbotAuthenticationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/chatbot-authentication.php' => config_path('chatbot-authentication.php'),
        ], 'config');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'views');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
//        $routeConfig = [
//            'namespace'  => 'LarsJanssen\UnderConstruction\Controllers',
//            'prefix'     => 'under',
//            'middleware' => [
//                'web',
//            ],
//        ];
//
//        $this->getRouter()->group($routeConfig, function ($router) {
//            $router->post('check', [
//                'uses' => 'CodeController@check',
//                'as'   => 'underconstruction.check',
//            ]);
//
//            $router->get('construction', [
//                'uses' => 'CodeController@index',
//                'as'   => 'underconstruction.index',
//            ]);
//
//            $router->get('js', [
//                'uses' => 'AssetController@js',
//                'as'   => 'underconstruction.js',
//            ]);
//        });
    }

    /**
     * Get the active router.
     *
     * @return Router
     */
    protected function getRouter()
    {
        return $this->app['router'];
    }
}