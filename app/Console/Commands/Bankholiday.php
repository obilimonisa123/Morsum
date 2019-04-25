<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use Carbon\Carbon;

class Bankholiday extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Bankholiday:json';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Bank holidays from json fromat';

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
        $json = file_get_contents('https://www.gov.uk/bank-holidays.json');
         $bankholidays = (array) json_decode($json);
            

           
            foreach ($bankholidays['england-and-wales']->events  as $bankholiday) {
               
                 DB::table('bank_holidays')->insert([
                    'title' => $bankholiday->title,
                    'date' => Carbon::createFromFormat('Y-m-d',$bankholiday->date),
                    'notes' =>$bankholiday->notes,
                    'bunting' => $bankholiday->bunting,

                ]);
            }

            $bankholidays = DB::table('bank_holidays')->pluck('date');
            
        
        $this->info('Done!');
    }
}
