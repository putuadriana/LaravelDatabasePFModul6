<?php

namespace Database\Seeders;
use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'firstname' => 'Putu',
                'lastname' => 'Adriana',
                'email'=> 'niputuadriana@gmail.com',
                'age' => 19,
                'position_id' => 1
            ],
            [
                'firstname' => 'Ni Made Mirah',
                'lastname' => 'Maharani',
                'email'=> 'mirahmaharani02@gmail.com',
                'age' => 25,
                'position_id' => 2
            ],
            [
                'firstname' => 'Ni Komang Swanita',
                'lastname' => 'Agastya',
                'email'=> 'mangswanita03@gmail.com',
                'age' => 23,
                'position_id' => 3
            ],
        ]);
    }
}
