<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Products;

class mystore extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mystore:importproducts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import product from a CSV file.';

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

    public function csvToArray($filename = '', $delimiter = ',')
    {
        if (!file_exists($filename) || !is_readable($filename))
            return false;

        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
            {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }
        return $data;
    }

    public function handle()
    {
        $path = public_path('csv\_csv_.csv');
        $customerArr = $this->csvToArray($path);
        for ($i = 0; $i < count($customerArr); $i ++)
        {
            Products::firstOrCreate($customerArr[$i]);
        }

        $email = "augustozeponi@hotmail.com";
        \Mail::send('email.aviso',[], function($m) use ($email){
            $m->from('augustozeponi@gmail.com', 'Import');
            $m->subject("Test");
            $m->to($email, 'Test');
        });
        $this->info('Import file!');
    }
}
