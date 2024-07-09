<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //创建50个并为第一条数据更新信息
        User::factory()->count(50)->create();
        $user = User::find(1);
        $user->name = 'DavvYao';
        $user->email = 'ym521105@gmail.com';
        $user->is_admin = true;
        $user->save();
    }
}
