<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Faker\Factory as Faker;
class GenerateData extends Command

{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:generate';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate data';

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
        User::generateData();

        $this->info("\nData generated successfully!");
    }

    protected $commands = [
        \App\Console\Commands\GenerateData::class,
    ];
}
