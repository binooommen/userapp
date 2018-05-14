<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_roles_id');
            $table->string('username');
            $table->string('email');
            $table->timestamps();
        });

        $data = array(
            array(
                'id' => '1',
                'user_roles_id' => '1',
                'username' => 'I_Admin',
                'email' => 'admin@test.com',
                'created_at'=> '2017-05-20 12:42:53',
                'updated_at'=> '2017-05-20 12:42:53'
            ),
            array(
                'id' => '2',
                'user_roles_id' => '2',
                'username' => 'I_Publish',
                'email' => 'publisher@test.com',
                'created_at' => '2017-05-20 13:05:53',
                'updated_at' => '2017-05-22 15:08:53'
            ),
            array(
                'id' => '3',
                'user_roles_id' => '3',
                'username' => 'I_Use',
                'email' => 'user@test.com',
                'created_at' => '2017-05-21 13:05:53',
                'updated_at' => '2017-05-21 13:05:53'
            ),
            array(
                'id' => '4',
                'user_roles_id' => '3',
                'username' => 'I_Use_Too',
                'email' => 'user2@test.com',
                'created_at' => '2017-05-22 14:05:53',
                'updated_at' => '2017-05-22 14:05:53'
            )
        );
        // insert sample data
        DB::table('users')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
