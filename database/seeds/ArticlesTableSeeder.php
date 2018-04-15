<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 33;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('articles')->insert([ //,
                'title' => $faker->name,
                'body' => $faker->text,
                'updated_at' => $faker->dateTime(),
                'created_at' => $faker->dateTime()
            ]);
        }
    }
}
