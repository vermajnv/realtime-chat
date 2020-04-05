<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class ImportStateCity extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:state-city';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import the .sql file with the state & city of the country.';

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
     * @return mixed
     */
    public function handle()
    {
        try {
            echo 'Data is importing.....';
            echo PHP_EOL;
            DB::unprepared(file_get_contents('database/sql/state-city.sql'));
        } catch (\Exception $e) {
            echo 'Data is already added.....';
            echo PHP_EOL;
        }
    }
}
