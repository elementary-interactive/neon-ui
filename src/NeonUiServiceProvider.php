<?php

namespace Neon\Ui;

use \Illuminate\Contracts\Http\Kernel;
use \Illuminate\Support\Str;
use \Illuminate\Support\ServiceProvider;

class NeonUiServiceProvider extends ServiceProvider
{

  /** Bootstrap any application services.
   *
   * @param \Illuminate\Contracts\Http\Kernel  $kernel
   *
   * @return void
   */
  public function boot(Kernel $kernel): void
  {
    if ($this->app->runningInConsole())
    {
      /** Publish views.
       */
      $this->publishes([
        __DIR__ . '/../resources/views' => resource_path('views'),
      ], 'neon-views');
    }
  }
}
