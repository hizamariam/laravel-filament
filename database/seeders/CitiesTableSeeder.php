<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

 DB::table('cities')->delete();
 $cities = array(
 array('name' => "Bombuflat",'state_id' => 23812),
 array('name' => "Garacharma",'state_id' => 23813),
 array('name' => "Port Blair",'state_id' => 23814),
 array('name' => "Rangat",'state_id' => 23815),
 array('name' => "Addanki",'state_id' => 23816),
 array('name' => "Adivivaram",'state_id' => 23817),
 array('name' => "Adoni",'state_id' => 23818),
 array('name' => "Aganampudi",'state_id' => 23819),
 array('name' => "Ajjaram",'state_id' => 24012),
 array('name' => "Akividu",'state_id' => 24013),
 array('name' => "Akkarampalle",'state_id' => 24014),
 array('name' => "Akkayapalle",'state_id' => 24015),
 array('name' => "Akkireddipalem",'state_id' => 24016),
 array('name' => "Alampur",'state_id' => 24017),
 array('name' => "Amalapuram",'state_id' => 24018),
 array('name' => "Amudalavalasa",'state_id' => 24019),

 array('name' => "Amur",'state_id' => 24050),
 array('name' => "Anakapalle",'state_id' => 24051),
 array('name' => "Anantapur",'state_id' => 24052),
 array('name' => "Andole",'state_id' => 24053),
 array('name' => "Atmakur",'state_id' => 24054),
 array('name' => "Attili",'state_id' => 24055),
 array('name' => "Avanigadda",'state_id' => 24056),
 array('name' => "Badepalli",'state_id' => 24057),
 array('name' => "Badvel",'state_id' => 24058),
 array('name' => "Balapur",'state_id' => 24059),

 array('name' => "Belpahar",'state_id' => 7961),
 array('name' => "Berhampur",'state_id' => 7962),
 array('name' => "Bhadrak",'state_id' => 7963),
 array('name' => "Bhanjanagar",'state_id' => 7964),
 array('name' => "Bhawanipatna",'state_id' => 7965),
 array('name' => "Bhuban",'state_id' => 7966),
 array('name' => "Bhubaneswar",'state_id' => 7967),
 array('name' => "Binika",'state_id' => 7968),
 array('name' => "Birmitrapur",'state_id' => 7969),
 array('name' => "Bishama Katek",'state_id' => 7970),
 array('name' => "Bolangir",'state_id' => 7971),
 array('name' => "Brahmapur",'state_id' => 7972),
 array('name' => "Brajrajnagar",'state_id' => 7973),
 array('name' => "Buguda",'state_id' => 7974),
 array('name' => "Burla",'state_id' => 7975),
 array('name' => "Byasanagar",'state_id' => 7976),
 array('name' => "Champua",'state_id' => 7977),
 array('name' => "Chandapur",'state_id' => 7978),
 array('name' => "Chandbali",'state_id' => 7979),
 array('name' => "Chandili",'state_id' => 7980),

 array('name' => "Clifton Springs",'state_id' => 7981),
 array('name' => "Coburg",'state_id' => 7982),
 array('name' => "Colac",'state_id' => 7983),
 array('name' => "Collingwood",'state_id' => 7984),
 array('name' => "Craigieburn",'state_id' => 7985),
 array('name' => "Cranbourne",'state_id' => 7986),
 array('name' => "Crib Point",'state_id' => 7987),
 array('name' => "Dandenong",'state_id' => 7988),
 array('name' => "Devon Meadows",'state_id' => 7989),
 array('name' => "Diamond Creek",'state_id' => 7989),

 array('name' => "Arusha",'state_id' => 19233),
 array('name' => "Dodoma",'state_id' => 19234),
 array('name' => "Kondoa",'state_id' => 19235),
 array('name' => "Mpwapwa",'state_id' => 19236),
 array('name' => "Iringa",'state_id' => 19237),
 array('name' => "Njombe",'state_id' => 19238),
 array('name' => "Bukoba",'state_id' => 19239),
 array('name' => "Bwanga",'state_id' => 19240),
 array('name' => "Ngara",'state_id' => 19241),
 array('name' => "Kasulu",'state_id' => 19242),
 array('name' => "Kigoma",'state_id' => 19243),
 array('name' => "Uvinza",'state_id' => 19244),
 array('name' => "Moshi",'state_id' => 19245),
 array('name' => "Same",'state_id' => 19246),
 array('name' => "Kilwa Kivinje",'state_id' => 19247),
 array('name' => "Lindi",'state_id' => 19248),
 array('name' => "Nachingwea",'state_id' => 19249),
 array('name' => "Musoma",'state_id' => 19250),
 array('name' => "Tarime",'state_id' => 19251),
 array('name' => "Mbeya",'state_id' => 19252),
 array('name' => "Mwaya",'state_id' => 19253),
 array('name' => "Tukuyu",'state_id' => 19254),
 array('name' => "Kilosa",'state_id' => 19255),
 array('name' => "Mahenge",'state_id' => 19256),
 array('name' => "Morogoro",'state_id' => 19257),
 array('name' => "Masasi",'state_id' => 19258),
 array('name' => "Mikindani",'state_id' => 19259),
 array('name' => "Mtwara",'state_id' => 19260),
 array('name' => "Newala",'state_id' => 19261),
 array('name' => "Magu",'state_id' => 19262),
 array('name' => "Mwanza",'state_id' => 19263),
 array('name' => "Nansio",'state_id' => 19264),
 array('name' => "Sengerama",'state_id' => 19264),
 array('name' => "Bagamoyo",'state_id' => 19266),
 array('name' => "Kibaha",'state_id' => 19267),
 array('name' => "Rufiji",'state_id' => 19268),
 array('name' => "Utete",'state_id' => 19269),
 array('name' => "Mpanda",'state_id' => 19270),
 array('name' => "Sumbawanga",'state_id' => 19271),
 array('name' => "Songea",'state_id' => 19272),
 array('name' => "Tunduru",'state_id' => 19273),
 array('name' => "Kahama",'state_id' => 19274),
 array('name' => "Maswa",'state_id' => 19275),
 array('name' => "Mwadui",'state_id' => 19276),
 array('name' => "Old Shinyanga",'state_id' => 19277),
 array('name' => "Shinyanga",'state_id' => 19278),
 array('name' => "Manyoni",'state_id' => 19279),
 array('name' => "Singida",'state_id' => 19280),
 array('name' => "Bukene",'state_id' => 19281),
 array('name' => "Nzega",'state_id' => 19282),
 array('name' => "Tabora",'state_id' => 19283),
 array('name' => "Urambo",'state_id' => 19284),
 array('name' => "Korogwe",'state_id' => 19285),
 array('name' => "Muheza",'state_id' => 19286),
 array('name' => "Pangani",'state_id' => 19287),
 array('name' => "Tanga",'state_id' => 19288),
 );
         DB::table('cities')->insert($cities);
    }
}
