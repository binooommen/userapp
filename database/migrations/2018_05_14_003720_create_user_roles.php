<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
        });

        $data = array(
            array(
                'id' => 1,
                'label' => 'Admin'
            ),
            array(
                'id' => 2,
                'label' => 'Publisher'
            ),
            array(
                'id' => 3,
                'label' => 'Public User'
            )
        );
        // insert sample data
        DB::table('user_roles')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_roles');
    }
}
