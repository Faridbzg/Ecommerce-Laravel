<?php

namespace Database\Seeders;

use App\Models\UserAddress;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       UserAddress::create([
        'type'=>'home',
        'address1'=>'California-str15',
        'address2'=>Str::random(10),
        'city'=>Str::random(10),
        'state'=>Str::random(10),
        'zipcode'=>Str::random(10),
        'isMain'=>1,
        'country_code'=>'US',
        'user_id'=>1,   
       ]);
       UserAddress::create([
        'type'=>'Work',
        'address1'=>'Sanfranisco-str52-greekAve',
        'address2'=>Str::random(10),
        'city'=>Str::random(10),
        'state'=>Str::random(10),
        'zipcode'=>Str::random(10),
        'isMain'=>1,
        'country_code'=>'UR',
        'user_id'=>3,   
       ]);
       UserAddress::create([
        'type'=>'home',
        'address1'=>'Hela-str12',
        'address2'=>Str::random(10),
        'city'=>Str::random(10),
        'state'=>Str::random(10),
        'zipcode'=>Str::random(10),
        'isMain'=>1,
        'country_code'=>'UAE',
        'user_id'=>2,   
       ]);
    //    UserAddress::create([
    //     'type'=>'WOrk',
    //     'address1'=>Str::random(10),
    //     'address2'=>Str::random(10),
    //     'city'=>Str::random(10),
    //     'state'=>Str::random(10),
    //     'zipcode'=>Str::random(10),
    //     'isMain'=>1,
    //     'country_code'=>'RUSS',
    //     'user_id'=>1,   
    //    ]);
    //    UserAddress::create([
    //     'type'=>'Work',
    //     'address1'=>Str::random(10),
    //     'address2'=>Str::random(10),
    //     'city'=>Str::random(10),
    //     'state'=>Str::random(10),
    //     'zipcode'=>Str::random(10),
    //     'isMain'=>1,
    //     'country_code'=>'UAE',
    //     'user_id'=>1,   
    //    ]);
    }
}
