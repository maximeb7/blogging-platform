<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class testcommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
       $result= $this->encrypt();
       dump($result);
    }

    public function encrypt()
    {
            $plaintext="@pppppppppppp|12345A|NFA129]_13:14:15,02-15-2006";
            $method = "aes-128-cbc";
            $key = "0123456789ABCDEF0123456789ABCDEF";
            $bkey = hex2bin($key);
            $iv = '0000000000000000';
            $data = openssl_encrypt($plaintext, $method, $bkey, OPENSSL_RAW_DATA, $iv);

            return bin2hex($data);

    }
}
