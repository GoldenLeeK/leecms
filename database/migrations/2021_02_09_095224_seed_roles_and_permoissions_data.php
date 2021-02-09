<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Support\Facades\DB;
use App\Models\Model;

class SeedRolesAndPermoissionsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //需要清除缓存，否则会报错
        app(PermissionRegistrar::class)->forgetCachedPermissions();
        //创建权限
        Permission::create(['name' => 'manage_users', 'guard_name' => 'admin', 'title' => '用户管理', 'is_hidden' => 0]);
        Permission::create(['name' => 'manage_permissions', 'guard_name' => 'admin', 'title' => '权限管理', 'is_hidden' => 0]);

        //创建站长角色
        $founder = Role::create(['name' => 'Founder', 'guard_name' => 'admin']);
        $founder->givePermissionTo('manage_users');
        $founder->givePermissionTo('manage_permissions');

        //创建管理员角色
        $admin = Role::create(['name' => 'Admin', 'guard_name' => 'admin']);
        $admin->givePermissionTo('manage_users');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //需要清除缓存，否则会报错
        app(PermissionRegistrar::class)->forgetCachedPermissions();
        // 清空所有数据表数据
        $tableNames = config('permission.table_names');

        Model::unguard();
        DB::table($tableNames['role_has_permissions'])->delete();
        DB::table($tableNames['model_has_roles'])->delete();
        DB::table($tableNames['model_has_permissions'])->delete();
        DB::table($tableNames['roles'])->delete();
        DB::table($tableNames['permissions'])->delete();
        Model::reguard();
    }
}
