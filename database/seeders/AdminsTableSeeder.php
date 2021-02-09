<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //初始化插入站长跟管理员
        DB::table('admins')->insert(['id' => 1, 'name' => 'founder', 'email' => 'founder@lee.com', 'password' => Hash::make('123456')]);
        DB::table('admins')->insert(['id' => 2, 'name' => 'admin', 'email' => 'admin@lee.com', 'password' => Hash::make('123456')]);

        $admin = Admin::find(1);
        $admin->assignRole('Founder');
        $admin = Admin::find(2);
        $admin->assignRole('Admin');

    }
}
