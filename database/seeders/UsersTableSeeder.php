<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            User::create([
                'name' => $faker->name,
                'avatar' => 'asset/images/resources/frnd-figure2.jpg',
                'img-background' => 'asset/images/resources/frnd-cover2.jpg',
                'videos' => $i,
                'photos' => $i,
                'post' => $i,
                'since' =>  $faker->dateTime('2000-03-03')->format('Y-m-d'),

                'email' => $faker->unique()->safeEmail,
            ]);
        }
    }
}
