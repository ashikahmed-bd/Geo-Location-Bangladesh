<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $divisions = array(
            array('id' => '1','name' => 'Chattagram','bn_name' => 'চট্টগ্রাম', 'latitude' => '22.356851','longitude' => "91.783182", 'url' => 'www.chittagongdiv.gov.bd'),
            array('id' => '2','name' => 'Rajshahi','bn_name' => 'রাজশাহী','latitude' => '24.363589','longitude' => "88.624135", 'url' => 'www.rajshahidiv.gov.bd'),
            array('id' => '3','name' => 'Khulna','bn_name' => 'খুলনা','latitude' => '22.845641','longitude' => "89.540328", 'url' => 'www.khulnadiv.gov.bd'),
            array('id' => '4','name' => 'Barisal','bn_name' => 'বরিশাল','latitude' => '22.701002','longitude' => "90.353451", 'url' => 'www.barisaldiv.gov.bd'),
            array('id' => '5','name' => 'Sylhet','bn_name' => 'সিলেট','latitude' => '24.894929','longitude' => "91.868706", 'url' => 'www.sylhetdiv.gov.bd'),
            array('id' => '6','name' => 'Dhaka','bn_name' => 'ঢাকা','latitude' => '23.810332','longitude' => "90.412518", 'url' => 'www.dhakadiv.gov.bd'),
            array('id' => '7','name' => 'Rangpur','bn_name' => 'রংপুর','latitude' => '25.743892','longitude' => "89.275227", 'url' => 'www.rangpurdiv.gov.bd'),
            array('id' => '8','name' => 'Mymensingh','bn_name' => 'ময়মনসিংহ','latitude' => '24.747149','longitude' => "90.420273", 'url' => 'www.mymensinghdiv.gov.bd')
        );

        DB::table('divisions')->insert($divisions);
    }
}
