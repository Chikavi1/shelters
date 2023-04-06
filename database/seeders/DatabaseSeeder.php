<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $gender = $faker->randomElement(['male', 'female']);
    	foreach (range(1,1000) as $index) {
            DB::table('requestsadoptions')->insert([
                'id_user' => $faker->numberBetween(1, 20),
                'id_pet' => $faker->numberBetween(1, 20),
                'id_organization' => 1,
                'status' => 1,
                'interview' => '',
                'latitude' => $faker->latitude(20.6284073, 20.7203081),
                "longitude" => $faker->longitude(-103.4539270, 103.2137129),
                'sign' => 'firmado',
                'id_photo' => 'photo',
                'createdAt' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'updatedAt' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'finish_date' => $faker->date($format = 'Y-m-d', $max = 'now')
            ]);
        }
    }
}
