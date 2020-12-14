<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ComandoTeste extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'comando:teste';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Descrição do comando teste.';

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
        return 0;
    }
}
