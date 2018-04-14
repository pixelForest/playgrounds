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
              'answer' => 'adult exercise equipment',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
        DB::table('equipment')->insert(
          [
              'answer' => 'swings',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
        DB::table('equipment')->insert(
          [
              'answer' => 'see-saws',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
        DB::table('equipment')->insert(
          [
              'answer' => 'slides',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
        DB::table('equipment')->insert(
          [
              'answer' => 'sculptures',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
        DB::table('equipment')->insert(
          [
              'answer' => 'springers',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
        DB::table('equipment')->insert(
          [
              'answer' => 'inclusive equipment',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
        DB::table('equipment')->insert(
          [
              'answer' => 'water features',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
        DB::table('equipment')->insert(
          [
              'answer' => 'sandbox',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
        DB::table('equipment')->insert(
          [
              'answer' => 'garden',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
        DB::table('equipment')->insert(
          [
              'answer' => 'digital technology',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
        DB::table('equipment')->insert(
          [
              'answer' => 'trees',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]);
        DB::table('equipment')->insert(
          [
              'answer' => 'park benches',
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
