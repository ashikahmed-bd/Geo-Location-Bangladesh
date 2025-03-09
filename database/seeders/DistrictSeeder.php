<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $division_1 = Division::query()->findOrFail(1)->id;
        $division_2 = Division::query()->findOrFail(2)->id;
        $division_3 = Division::query()->findOrFail(3)->id;
        $division_4 = Division::query()->findOrFail(4)->id;
        $division_4 = Division::query()->findOrFail(4)->id;
        $division_5 = Division::query()->findOrFail(5)->id;
        $division_6 = Division::query()->findOrFail(6)->id;
        $division_7 = Division::query()->findOrFail(7)->id;
        $division_8 = Division::query()->findOrFail(8)->id;

        $districts = array(
            array('id' => '1', 'division_id' => $division_1, 'name' => 'Comilla', 'bn_name' => 'কুমিল্লা', 'latitude' => '23.4682747', 'longitude' => '91.1788135', 'url' => 'www.comilla.gov.bd'),
            array('id' => '2','division_id' => $division_1,'name' => 'Feni','bn_name' => 'ফেনী','latitude' => '23.023231','longitude' => '91.3840844','url' => 'www.feni.gov.bd'),
            array('id' => '3','division_id' => $division_1,'name' => 'Brahmanbaria','bn_name' => 'ব্রাহ্মণবাড়িয়া','latitude' => '23.9570904','longitude' => '91.1119286','url' => 'www.brahmanbaria.gov.bd'),
            array('id' => '4','division_id' => $division_1,'name' => 'Rangamati','bn_name' => 'রাঙ্গামাটি','latitude' => '22.65561018','longitude' => '92.17541121','url' => 'www.rangamati.gov.bd'),
            array('id' => '5','division_id' => $division_1,'name' => 'Noakhali','bn_name' => 'নোয়াখালী','latitude' => '22.869563','longitude' => '91.099398','url' => 'www.noakhali.gov.bd'),
            array('id' => '6','division_id' => $division_1,'name' => 'Chandpur','bn_name' => 'চাঁদপুর','latitude' => '23.2332585','longitude' => '90.6712912','url' => 'www.chandpur.gov.bd'),
            array('id' => '7','division_id' => $division_1,'name' => 'Lakshmipur','bn_name' => 'লক্ষ্মীপুর','latitude' => '22.942477','longitude' => '90.841184','url' => 'www.lakshmipur.gov.bd'),
            array('id' => '8','division_id' => $division_1,'name' => 'Chattogram','bn_name' => 'চট্টগ্রাম','latitude' => '22.335109','longitude' => '91.834073','url' => 'www.chittagong.gov.bd'),
            array('id' => '9','division_id' => $division_1,'name' => 'Coxsbazar','bn_name' => 'কক্সবাজার','latitude' => '21.44315751','longitude' => '91.97381741','url' => 'www.coxsbazar.gov.bd'),
            array('id' => '10','division_id' => $division_1,'name' => 'Khagrachhari','bn_name' => 'খাগড়াছড়ি','latitude' => '23.119285','longitude' => '91.984663','url' => 'www.khagrachhari.gov.bd'),
            array('id' => '11','division_id' => $division_1,'name' => 'Bandarban','bn_name' => 'বান্দরবান','latitude' => '22.1953275','longitude' => '92.2183773','url' => 'www.bandarban.gov.bd'),

            array('id' => '12','division_id' => $division_2,'name' => 'Sirajganj','bn_name' => 'সিরাজগঞ্জ','latitude' => '24.4533978','longitude' => '89.7006815','url' => 'www.sirajganj.gov.bd'),
            array('id' => '13','division_id' => $division_2,'name' => 'Pabna','bn_name' => 'পাবনা','latitude' => '23.998524','longitude' => '89.233645','url' => 'www.pabna.gov.bd'),
            array('id' => '14','division_id' => $division_2,'name' => 'Bogura','bn_name' => 'বগুড়া','latitude' => '24.8465228','longitude' => '89.377755','url' => 'www.bogra.gov.bd'),
            array('id' => '15','division_id' => $division_2,'name' => 'Rajshahi','bn_name' => 'রাজশাহী','latitude' => '24.37230298','longitude' => '88.56307623','url' => 'www.rajshahi.gov.bd'),
            array('id' => '16','division_id' => $division_2,'name' => 'Natore','bn_name' => 'নাটোর','latitude' => '24.420556','longitude' => '89.000282','url' => 'www.natore.gov.bd'),
            array('id' => '17','division_id' => $division_2,'name' => 'Joypurhat','bn_name' => 'জয়পুরহাট','latitude' => '25.09636876','longitude' => '89.04004280','url' => 'www.joypurhat.gov.bd'),
            array('id' => '18','division_id' => $division_2,'name' => 'Chapainawabganj','bn_name' => 'চাঁপাইনবাবগঞ্জ','latitude' => '24.5965034','longitude' => '88.2775122','url' => 'www.chapainawabganj.gov.bd'),
            array('id' => '19','division_id' => $division_2,'name' => 'Naogaon','bn_name' => 'নওগাঁ','latitude' => '24.83256191','longitude' => '88.92485205','url' => 'www.naogaon.gov.bd'),

            array('id' => '20','division_id' => '3','name' => 'Jashore','bn_name' => 'যশোর','latitude' => '23.16643','longitude' => '89.2081126','url' => 'www.jessore.gov.bd'),
            array('id' => '21','division_id' => '3','name' => 'Satkhira','bn_name' => 'সাতক্ষীরা','latitude' => '22.7180905','longitude' => '89.0687033','url' => 'www.satkhira.gov.bd'),
            array('id' => '22','division_id' => '3','name' => 'Meherpur','bn_name' => 'মেহেরপুর','latitude' => '23.762213','longitude' => '88.631821','url' => 'www.meherpur.gov.bd'),
            array('id' => '23','division_id' => '3','name' => 'Narail','bn_name' => 'নড়াইল','latitude' => '23.172534','longitude' => '89.512672','url' => 'www.narail.gov.bd'),
            array('id' => '24','division_id' => '3','name' => 'Chuadanga','bn_name' => 'চুয়াডাঙ্গা','latitude' => '23.6401961','longitude' => '88.841841','url' => 'www.chuadanga.gov.bd'),
            array('id' => '25','division_id' => '3','name' => 'Kushtia','bn_name' => 'কুষ্টিয়া','latitude' => '23.901258','longitude' => '89.120482','url' => 'www.kushtia.gov.bd'),
            array('id' => '26','division_id' => '3','name' => 'Magura','bn_name' => 'মাগুরা','latitude' => '23.487337','longitude' => '89.419956','url' => 'www.magura.gov.bd'),
            array('id' => '27','division_id' => '3','name' => 'Khulna','bn_name' => 'খুলনা','latitude' => '22.815774','longitude' => '89.568679','url' => 'www.khulna.gov.bd'),
            array('id' => '28','division_id' => '3','name' => 'Bagerhat','bn_name' => 'বাগেরহাট','latitude' => '22.651568','longitude' => '89.785938','url' => 'www.bagerhat.gov.bd'),
            array('id' => '29','division_id' => '3','name' => 'Jhenaidah','bn_name' => 'ঝিনাইদহ','latitude' => '23.5448176','longitude' => '89.1539213','url' => 'www.jhenaidah.gov.bd'),
            array('id' => '30','division_id' => '4','name' => 'Jhalakathi','bn_name' => 'ঝালকাঠি','latitude' => '22.6422689','longitude' => '90.2003932','url' => 'www.jhalakathi.gov.bd'),
            array('id' => '31','division_id' => '4','name' => 'Patuakhali','bn_name' => 'পটুয়াখালী','latitude' => '22.3596316','longitude' => '90.3298712','url' => 'www.patuakhali.gov.bd'),
            array('id' => '32','division_id' => '4','name' => 'Pirojpur','bn_name' => 'পিরোজপুর','latitude' => '22.5781398','longitude' => '89.9983909','url' => 'www.pirojpur.gov.bd'),
            array('id' => '33','division_id' => '4','name' => 'Barisal','bn_name' => 'বরিশাল','latitude' => '22.7004179','longitude' => '90.3731568','url' => 'www.barisal.gov.bd'),
            array('id' => '34','division_id' => '4','name' => 'Bhola','bn_name' => 'ভোলা','latitude' => '22.685923','longitude' => '90.648179','url' => 'www.bhola.gov.bd'),
            array('id' => '35','division_id' => '4','name' => 'Barguna','bn_name' => 'বরগুনা','latitude' => '22.159182','longitude' => '90.125581','url' => 'www.barguna.gov.bd'),
            array('id' => '36','division_id' => '5','name' => 'Sylhet','bn_name' => 'সিলেট','latitude' => '24.8897956','longitude' => '91.8697894','url' => 'www.sylhet.gov.bd'),
            array('id' => '37','division_id' => '5','name' => 'Moulvibazar','bn_name' => 'মৌলভীবাজার','latitude' => '24.482934','longitude' => '91.777417','url' => 'www.moulvibazar.gov.bd'),
            array('id' => '38','division_id' => '5','name' => 'Habiganj','bn_name' => 'হবিগঞ্জ','latitude' => '24.374945','longitude' => '91.41553','url' => 'www.habiganj.gov.bd'),
            array('id' => '39','division_id' => '5','name' => 'Sunamganj','bn_name' => 'সুনামগঞ্জ','latitude' => '25.0658042','longitude' => '91.3950115','url' => 'www.sunamganj.gov.bd'),
            array('id' => '40','division_id' => '6','name' => 'Narsingdi','bn_name' => 'নরসিংদী','latitude' => '23.932233','longitude' => '90.71541','url' => 'www.narsingdi.gov.bd'),
            array('id' => '41','division_id' => '6','name' => 'Gazipur','bn_name' => 'গাজীপুর','latitude' => '24.0022858','longitude' => '90.4264283','url' => 'www.gazipur.gov.bd'),
            array('id' => '42','division_id' => '6','name' => 'Shariatpur','bn_name' => 'শরীয়তপুর','latitude' => '23.2060195','longitude' => '90.3477725','url' => 'www.shariatpur.gov.bd'),
            array('id' => '43','division_id' => '6','name' => 'Narayanganj','bn_name' => 'নারায়ণগঞ্জ','latitude' => '23.63366','longitude' => '90.496482','url' => 'www.narayanganj.gov.bd'),
            array('id' => '44','division_id' => '6','name' => 'Tangail','bn_name' => 'টাঙ্গাইল','latitude' => '24.264145','longitude' => '89.918029','url' => 'www.tangail.gov.bd'),
            array('id' => '45','division_id' => '6','name' => 'Kishoreganj','bn_name' => 'কিশোরগঞ্জ','latitude' => '24.444937','longitude' => '90.776575','url' => 'www.kishoreganj.gov.bd'),
            array('id' => '46','division_id' => '6','name' => 'Manikganj','bn_name' => 'মানিকগঞ্জ','latitude' => '23.8602262','longitude' => "90.0018293",'url' => 'www.manikganj.gov.bd'),
            array('id' => '47','division_id' => '6','name' => 'Dhaka','bn_name' => 'ঢাকা','latitude' => '23.7115253','longitude' => '90.4111451','url' => 'www.dhaka.gov.bd'),
            array('id' => '48','division_id' => '6','name' => 'Munshiganj','bn_name' => 'মুন্সিগঞ্জ','latitude' => '23.5435742','longitude' => '90.5354327','url' => 'www.munshiganj.gov.bd'),
            array('id' => '49','division_id' => '6','name' => 'Rajbari','bn_name' => 'রাজবাড়ী','latitude' => '23.7574305','longitude' => '89.6444665','url' => 'www.rajbari.gov.bd'),
            array('id' => '50','division_id' => '6','name' => 'Madaripur','bn_name' => 'মাদারীপুর','latitude' => '23.164102','longitude' => '90.1896805','url' => 'www.madaripur.gov.bd'),
            array('id' => '51','division_id' => '6','name' => 'Gopalganj','bn_name' => 'গোপালগঞ্জ','latitude' => '23.0050857','longitude' => '89.8266059','url' => 'www.gopalganj.gov.bd'),
            array('id' => '52','division_id' => '6','name' => 'Faridpur','bn_name' => 'ফরিদপুর','latitude' => '23.6070822','longitude' => '89.8429406','url' => 'www.faridpur.gov.bd'),
            array('id' => '53','division_id' => '7','name' => 'Panchagarh','bn_name' => 'পঞ্চগড়','latitude' => '26.3411','longitude' => '88.5541606','url' => 'www.panchagarh.gov.bd'),
            array('id' => '54','division_id' => '7','name' => 'Dinajpur','bn_name' => 'দিনাজপুর','latitude' => '25.6217061','longitude' => '88.6354504','url' => 'www.dinajpur.gov.bd'),
            array('id' => '55','division_id' => '7','name' => 'Lalmonirhat','bn_name' => 'লালমনিরহাট','latitude' => '25.9165451','longitude' => '89.4532409','url' => 'www.lalmonirhat.gov.bd'),
            array('id' => '56','division_id' => '7','name' => 'Nilphamari','bn_name' => 'নীলফামারী','latitude' => '25.931794','longitude' => '88.856006','url' => 'www.nilphamari.gov.bd'),
            array('id' => '57','division_id' => '7','name' => 'Gaibandha','bn_name' => 'গাইবান্ধা','latitude' => '25.328751','longitude' => '89.528088','url' => 'www.gaibandha.gov.bd'),
            array('id' => '58','division_id' => '7','name' => 'Thakurgaon','bn_name' => 'ঠাকুরগাঁও','latitude' => '26.0336945','longitude' => '88.4616834','url' => 'www.thakurgaon.gov.bd'),
            array('id' => '59','division_id' => '7','name' => 'Rangpur','bn_name' => 'রংপুর','latitude' => '25.7558096','longitude' => '89.244462','url' => 'www.rangpur.gov.bd'),
            array('id' => '60','division_id' => '7','name' => 'Kurigram','bn_name' => 'কুড়িগ্রাম','latitude' => '25.805445','longitude' => '89.636174','url' => 'www.kurigram.gov.bd'),
            array('id' => '61','division_id' => '8','name' => 'Sherpur','bn_name' => 'শেরপুর','latitude' => '25.0204933','longitude' => '90.0152966','url' => 'www.sherpur.gov.bd'),
            array('id' => '62','division_id' => '8','name' => 'Mymensingh','bn_name' => 'ময়মনসিংহ','latitude' => '24.7465670','longitude' => '90.4072093','url' => 'www.mymensingh.gov.bd'),
            array('id' => '63','division_id' => '8','name' => 'Jamalpur','bn_name' => 'জামালপুর','latitude' => '24.937533','longitude' => '89.937775','url' => 'www.jamalpur.gov.bd'),
            array('id' => '64','division_id' => '8','name' => 'Netrokona','bn_name' => 'নেত্রকোণা','latitude' => '24.870955','longitude' => '90.727887','url' => 'www.netrokona.gov.bd')
        );

        DB::table('districts')->insert($districts);
    }
}
