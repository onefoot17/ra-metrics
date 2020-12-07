<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Setting;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $felipe = new User();
        $felipe->name = 'Felipe Pastana';
        $felipe->email = 'felipe@vcompinc.com';
        $felipe->password = Hash::make('12345678');
        $felipe->save();

        $setting = new Setting([]);
        $felipe->settings()->save($setting);

        $vio = new User();
        $vio->name = 'Vio Ivanescu';
        $vio->email = 'vio@vcompinc.com';
        $vio->password = Hash::make('12345678');
        $vio->save();

        $setting = new Setting([]);
        $vio->settings()->save($setting);

        $earl = new User();
        $earl->name = 'Earl Misquitta';
        $earl->email = 'earl@vcompinc.com';
        $earl->password = Hash::make('12345678');
        $earl->save();

        $setting = new Setting([]);
        $earl->settings()->save($setting);

        $felipe = new User();
        $felipe->name = 'Felipe Pastana Gmail';
        $felipe->email = 'felipeapastana@gmail.com';
        $felipe->password = Hash::make('12345678');
        $felipe->save();

        $setting = new Setting([]);
        $felipe->settings()->save($setting);
    }
}
