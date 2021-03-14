<?php

namespace App\Console\Commands;

use App\Currency;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class CurrencyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'getCourse';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'receiving API course';

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
        $currencies = (Http::get('https://developerhub.alfabank.by:8273/partner/1.0.0/public/nationalRates', ['currencyCode' => '840,978,643,980'])->json())['rates'];
        if ($currencies['rates']) {
            foreach ($currencies as $currency) {
                Currency::updateOrCreate(
                    [
                        'title' => $currency['name']
                    ],
                    [
                        'title' => $currency['name'],
                        'code' => $currency['iso'],
                        'value' => $currency['rate']
                    ]);
            }
        } else {
            $this->info('Error!!!');
        }
    }
}
