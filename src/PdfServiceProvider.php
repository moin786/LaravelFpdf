<?php
namespace peal\larapdf;
use Illuminate\Container\Container;
use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider;
use Laravel\Lumen\Application as LumenApplication;

use peal\larapdf\Mediator\Pdf;

class PdfServiceProvider extends ServiceProvider {
    
    public function register() {
        $this->registerPdf();
    }
    
    /**
     * PDF application
     * 
     * @return object [access pdf services]
     */
    
    public function registerPdf() {
        $this->app->bind('pdf', function(Container $app){
            return new Pdf(new $app['config']['pdf-config.pdfservice']);
        });
        
        $this->app->alias('Pdf', Pdf::class);
    }
    
    
    /**
     * Setup the application configuration
     * 
     */
    protected function setupConfig()
    {
        $config_source = realpath(__DIR__.'/../config/pdf-config.php');
        
        // Check app instance is Laravel or lumen 
        if ($this->app instanceof LaravelApplication) {
            
            $this->publishes([
                $config_source => config_path('pdf-config.php')
            ]);
            
        } elseif ($this->app instanceof LumenApplication) {
            
            $this->app->configure('pdf-config');
            
        }
        $this->mergeConfigFrom($config_source, 'pdf-config');
    }
    
    /*
     * Load routes if needed from package
     * 
     * 
     */
    protected function loadRoute() {
        
        require __DIR__ . '/routes.php';
        
    }
    
    /*
     * Booting our routes and configuration
     */
    public function boot() {
        
        $this->loadRoute();
        
        $this->setupConfig();
    }
}