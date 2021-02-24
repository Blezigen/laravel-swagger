<?php


namespace Tests\Partials;


use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Contracts\Foundation\Application;

class ConsoleKernel extends \Illuminate\Foundation\Console\Kernel
{
    public function __construct(Application $app, Dispatcher $events)
    {
        parent::__construct($app, $events);
    }


    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     *
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
//        $this->load(realpath(__DIR__."/Commands"));
        require base_path('routes/console.php');
    }
}