<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $amount = 10;
        // for ($i=0; $i < $amount ; $i++) {
        //     DB::table('profiles')->insert([
        //         'name'=> Str::random(25),
        //         'gender'=> Str::random(5),
        //         'phone' => Str::random(12),
        //         'age' => 25,
        //         'address'=> Str::random(50),
        //     ]);
        // }

        Profile::create([
            'name' => 'Wandi',
            'gender' => 'Pria',
            'phone' => '08123456780',
            'age' => 21,
            'address' => 'Jl. Sudirman no. 21'
        ]);
        Profile::create([
            'name' => 'Wendy',
            'gender' => 'Wanita',
            'phone' => '08123456780',
            'age' => 20,
            'address' => 'Jl. Sudirman no. 22'
        ]);
        Profile::create([
            'name' => 'Tugiyo',
            'gender' => 'Pria',
            'phone' => '08123456780',
            'age' => 50,
            'address' => 'Jl. Sudirman no. 22'
        ]);
    }
}
