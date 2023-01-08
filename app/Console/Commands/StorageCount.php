<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class StorageCount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'storage:count
    {path : app}
    {--F|--folder : pass this is you want to count sub folders}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Count files and folder from path';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $dir = base_path($this->argument('path')) . "/";

        $files = array_filter(glob($dir . "*"), "is_file") ?? 0;

        if ($this->option('folder')) {
            $folders = glob($dir . "*", GLOB_ONLYDIR) ?? 0;
            $this
                ->info("Total: " . count($files) . " Files & " . count($folders) . " folders");
        } else {
            $this->info("Total: " . count($files) . " Files");
        }
    }
}
