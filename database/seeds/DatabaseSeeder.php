<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         Eloquent::unguard();

         //disable foreign key check for this connection before running seeders
         DB::statement('SET FOREIGN_KEY_CHECKS=0;');

         $this->call(ModulesTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(OptionsTableSeeder::class);
         $this->call(OptionValuesTableSeeder::class);
         $this->call(ModuleCategoriesTableSeeder::class);
         $this->call(RolesTableSeeder::class);
         $this->call(PermissionsTableSeeder::class);
         $this->call(PermissionRolesTableSeeder::class);

         // supposed to only apply to a single connection and reset it's self
         // but I like to explicitly undo what I've done for clarity
         DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
