<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            ['id'=>1,'name'=>'Andijon viloyati'],
            ['id'=>2,'name'=>'Buxoro viloyati'],
            ['id'=>3,'name'=>'Farg\'ona viloyati'],
            ['id'=>4,'name'=>'Jizzax viloyati'],
            ['id'=>5,'name'=>'Namangan viloyati'],
            ['id'=>6,'name'=>'Navoiy viloyati'],
            ['id'=>7,'name'=>'Qashqadaryo viloyati'],
            ['id'=>8,'name'=>'Qoraqalpoq Resublikasi'],
            ['id'=>9,'name'=>'Samarqand viloyati'],
            ['id'=>10,'name'=>'Sirdaryo viloati'],
            ['id'=>11,'name'=>'Surxandaryo viloyati'],
            ['id'=>12,'name'=>'Toshkent viloyati'],
            ['id'=>13,'name'=>'Xorazm viloyati'],
        ]);
        DB::table('districts')->insert([
            ['id'=>1,'name'=>'Xaзoрaсп тумaни','region_id'=>13],
            ['id'=>2,'name'=>'Xonqa tumani','region_id'=>13],
            ['id'=>3,'name'=>'Xивa тумaни','region_id'=>13],
            ['id'=>4,'name'=>'Xивa шaҳaр','region_id'=>13],
            ['id'=>5,'name'=>'Бoғoт тумaни','region_id'=>13],
            ['id'=>6,'name'=>'Гурлaн тумaни','region_id'=>13],
            ['id'=>7,'name'=>'Тупрoққaлъa тумaни','region_id'=>13],
            ['id'=>8,'name'=>'Ургaнч тумaни','region_id'=>13],
            ['id'=>9,'name'=>'Ургaнч шaҳар','region_id'=>13],
            ['id'=>10,'name'=>'Шoвoт тумaни','region_id'=>13],
            ['id'=>11,'name'=>'Янгиариқ тумани','region_id'=>13],
            ['id'=>12,'name'=>'Янгибoзoр тумaни','region_id'=>13],
            ['id'=>13,'name'=>'Қўшкўпир тумани','region_id'=>13],
        ]);

        DB::table('task_types')->insert([
            ['id'=>1,'name'=>'Seminar-trening'],
            ['id'=>2,'name'=>'Texnik yordam'],
            ['id'=>3,'name'=>'Token-shartnoma'],
            ['id'=>4,'name'=>'Shartnoma'],
            ['id'=>5,'name'=>'Qarzdorlik undiruvi'],
        ]);
    }
}
