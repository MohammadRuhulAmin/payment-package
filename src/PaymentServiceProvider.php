<?php 

namespace TeamBravo\Payment;
use Illuminate\Support\ServiceProvider;
class PaymentServiceProvider extends ServiceProvider{

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views',"Payment");
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([
            __DIR__.'/config/sslcommerz.php' =>  config_path('sslcommerz.php'),
         ], 'config');
    }

    public function register(){
       
      
    }

}