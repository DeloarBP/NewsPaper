<?php

use App\Models\User\User;
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

        if (app()->isLocal()) {

            $this->seedLocal();

        } else {

            $this->seedProduction();
        }
    }

    private function seedLocal()
    {
        $this->call([
            SettingsTableSeeder::class,
            //UsersTableSeeder::class,
            AddressTableSeeder::class,//User->Person->Address Table Relationship
            PostTableSeeder::class
        ]);

        $this->command->alert("<comment>(:---------------Users Credentials---------------:)</comment>");
            foreach (User::all() as $user) {
                $this->command->info("               Emaill: {$user->email} | Password: password");
            }
        $this->command->alert("<comment>(:-----------------(:Successfully:)-----------------------:)</comment>");
    }


    private function seedProduction()
    {
//       $this->call(UsersTableSeeder::class);
    }
}
