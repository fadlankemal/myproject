<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class data_barang extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:barang';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import data barang';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            DB::unprepared(file_get_contents('database/schema/Dump_data.sql'));
            $this->info("success import");
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }
    }
}
