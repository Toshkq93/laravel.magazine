<?php

namespace App\Console\Commands;

use App\Cities;
use App\Countries;
use App\Regions;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class CitiesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'getCities';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'receiving API cities';

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
        /*18 - belarus, 161 - Russia*/
        $belarus = Http::get('https://namaztimes.kz/ru/api/country?id=161')->json();
            Countries::create([
                'name' => $belarus['name'],
            ]);
            $id = $belarus['id'];
        $regions = Http::get("https://namaztimes.kz/ru/api/states?id=$id")->json();
        foreach ($regions as $regionId => $region) {
            $idCountry = Countries::select('id')->where('id', 2)->first();
            Regions::create([
                'name' => $region,
                'country_id' => $idCountry->id,
            ]);
            $cities = Http::get("https://namaztimes.kz/ru/api/cities?id=$regionId")->json();
            foreach ($cities as $cityId => $city){
                $idRegion = Regions::select('id')->where('name', $regionId)->first();
                Cities::create([
                   'name' => $city,
                    'region_id' => $idRegion->id,
                ]);
            }
        }
    }
}
