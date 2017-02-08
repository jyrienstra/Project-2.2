<?php

use Illuminate\Database\Seeder;

class SeedBalkan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $weatherdata = [131050,131160,131310,131825,132080,132090,132230,132240,132280,132420,132570,132610,132690,132740,132790,132850,132890,132950,133330,133340,133480,133520,133530,133670,
33760,
133766,
133770,
133780,
133840,
133880,
133890,
133970,
134520,
134570,
134590,
134620,
134624,
134770,
134810,
134811,
134890,
134930,
135620,
135780,
135790,
135830,
135860,
136150,
141050,
142160,
142190,
142320,
142410,
142440,
143030,
143070,
143080,
143140,
143210,
143230,
143240,
143280,
143300,
144270,
144280,
144310,
144380,
144410,
144420,
144440,
144450,
144470,
144520,
144540,
144620,
144720,
144740,
145420,
146480,
146520,
146540,
153350,
154090,
154800,
154810,
154990,
155020,
155050,
155110,
155250,
155253,
155260,
155280,
155300,
155350,
155490,
155500,
155520,
155560,
155561,
155610,
155620,
156000,
156050,
156090,
156091,
156130,
156140,
156150,
156250,
156270,
156350,
156400,
156550,
156610,
157120,
157250,
157260,
161080,
161100,
166220,
166240,
166270,
166650,
166750,
166820,
166870,
166990,
167160,
167161,
167180,
167260,
167340,
170500,
170560,
170575,
170600,
691810
];
        foreach ($weatherdata as $key) {
            DB::table('balkan_stations')->insert([
                'balkan_station' => $key
            ]);
        }
    }
}