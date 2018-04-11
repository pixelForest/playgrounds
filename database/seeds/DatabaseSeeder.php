<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'name' => 'playgrounds2030',
          'email' => 'playgrounds2030@nms.sg',
          'password' => bcrypt('playgrounds'),
        ]);

        DB::table('equipment')->insert(
          [
              'answer' => 'Adult Exercise Equipment',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
        DB::table('equipment')->insert(
          [
              'answer' => 'Swings',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
        DB::table('equipment')->insert(
          [
              'answer' => 'See-saws',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
        DB::table('equipment')->insert(
          [
              'answer' => 'Slides',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
        DB::table('equipment')->insert(
          [
              'answer' => 'Sculptures',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
        DB::table('equipment')->insert(
          [
              'answer' => 'Springers',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
        DB::table('equipment')->insert(
          [
              'answer' => 'Inclusive Equipment',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
        DB::table('equipment')->insert(
          [
              'answer' => 'Water Features',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
        DB::table('equipment')->insert(
          [
              'answer' => 'Sandbox',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
        DB::table('equipment')->insert(
          [
              'answer' => 'Garden',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
        DB::table('equipment')->insert(
          [
              'answer' => 'Digital Technology',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
        DB::table('equipment')->insert(
          [
              'answer' => 'Trees',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
        DB::table('equipment')->insert(
          [
              'answer' => 'Park Benches',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);

        DB::table('uniques')->insert(
          [
              'answer' => 'It is aesthetically pleasing.',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
        DB::table('uniques')->insert(
          [
              'answer' => 'It is inspired by our local heritage and/or identity.',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
        DB::table('uniques')->insert(
          [
              'answer' => 'It is inspired by the character and landscape of the neighbourhood in which it is located.',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
        DB::table('uniques')->insert(
          [
              'answer' => 'It is fantastical, and based on children’s stories or imaginary landscapes.',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
    }
}
