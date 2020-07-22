<?php


namespace ContextMenuBlock;


use Illuminate\Support\ServiceProvider;

class ContextMenuBlockProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/contextMenuBlock.js' => 'public'
        ]);
    }

    public function register()
    {
        $this->app->singleton('ContextMenu', function (){
            return $this->app->make(ContextMenuBlock::class);
        });
    }
}
