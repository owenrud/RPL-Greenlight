<?php

namespace Database\Seeders;
use DB;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nama_bus = array('Sky Bus',
        'Ocean Bus',
        'Sunshine Bus',
        'Galaxy Bus',
        'Cloud Bus',
        'Star Bus',
        'Diamond Bus',
        'Sun Bus',
        'Moon Bus',
        'Rainbow Star Bus',
        'Cosmic Bus',
        'Skyline Bus',
        'Skydancer Bus',
        'Ocean Explorer Bus',
        'Blue Horizon Bus',
        'Golden Sunrise Bus',
        'Bright Day Bus',
        'Cosmic Explorer Bus',
        'Starlight Bus',
        'Galaxy Explorer Bus',
        'Rainbow Sky Bus',
        'Cloud Chaser Bus',
        'Sky Voyager Bus',
        'Ocean Breeze Bus',
        'Sunshine Express Bus',
        'Star Chaser Bus',
        'Diamond Sky Bus',
        'Sun Chaser Bus',
        'Moon Explorer Bus');
        $pabrik_bus = array(
            'Volvo','Scania','Mercedes-Benz','MAN','Iveco',
            'DAF','Renault','TATA','Ashok Leyland','Hino',
            'Isuzu','Toyota','Mitsubishi Fuso','Mack',
            'Navistar','BYD','Yutong','King Long',
        );
        $kode_bus = array(
            'B001', 'B002', 'B003', 'B004', 'B005', 'B006',
             'B007', 'B008', 'B009', 'B010', 'B011', 'B012',
              'B013', 'B014', 'B015', 'B016', 'B017', 'B018',
               'B019', 'B020', 'B021', 'B022', 'B023', 'B024', 'B025',
                'B026', 'B027', 'B028', 'B029', 'B030', 'B031', 'B032',
             'B033', 'B034', 'B035', 'B036', 'B037', 'B038', 'B039',
              'B040', 'B041', 'B042', 'B043', 'B044', 'B045', 'B046',
               'B047', 'B048', 'B049', 'B050', 'B051', 'B052', 'B053',
        );
        $Plat_nomor = array(
            'AB 2644 QNV','AB 8905 KFL','AB 3763 QLF',
        'AB 2994 CDH','AB 1075 WIJ','AB 2992 CAE',
        'AB 7388 QUG','AB 8566 VKO','AB 5262 SAB',
        'AB 6359 HUT','AB 1687 UTH','AB 8265 APV',
        'AB 8008 HSF','AB 6892 RYZ','AB 7992 ZQE',
        'AB 8202 DVQ','AB 8443 LZH','AB 3459 ZMR',
        'AB 8855 ZQM','AB 4463 VAF',
        );
        $sifat = array('Pribadi','Instansi');     
        $area = array('Dalam Kota','Luar Kota');
        shuffle($nama_bus);
        shuffle($sifat);
        shuffle($area);
          shuffle($pabrik_bus);
          shuffle($kode_bus);
          shuffle($Plat_nomor);

        for($i=0;$i<40;$i++){
            $faker = Faker::create('id_ID');
            shuffle($nama_bus);
                shuffle($sifat);
                shuffle($area);
                shuffle($pabrik_bus);
                shuffle($kode_bus);
                shuffle($Plat_nomor);
            DB::table('daftar_bus')->insert([
                'Nama_Bus'=> reset($nama_bus),
                'Sifat' => reset($sifat),
                'Area' => reset($area),
                'Kode_Bus' => reset($kode_bus),
                'pabrikan' => reset($pabrik_bus),
                'no_mesin' => $faker->jobTitle,
                'Plat_nomor' => reset($Plat_nomor),
                'Kapasitas' => $faker->numberBetween(20,50),
                'Bagasi' => $faker->numberBetween(4,10),
                'foto' => 'bus-images/b'.rand(1,8). '.' . 'jpg',
                'harga' => $faker->numberBetween(1000000,2000000),
                
                
            ]);}
    }
}
