<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAddresses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('address');
            $table->string('province');
            $table->string('city');
            $table->string('country');
            $table->string('postal_code');
        });

        $data = array(
            array(
                'id' => 1,
                'user_id' => 1,
                'address' => '123 fake street',
                'province' => 'Ontario',
                'city'=> 'Ottawa',
                'country'=> 'Canada',
                'postal_code'=> '123 w4t'
            ),
            array(
                'id' => 2,
                'user_id' => 2,
                'address' => '123 queen street',
                'province' => 'Quebec',
                'city'=> 'Gatineau',
                'country'=> 'Canada',
                'postal_code'=> '123 tdf'
            ),
            array(
                'id' => 3,
                'user_id' => 3,
                'address' => '123 major road',
                'province' => 'Ontariofdgdgdfg',
                'city'=> 'Ottawa',
                'country'=> 'Canada',
                'postal_code'=> '145 w4t'
            ),
            array(
                'id' => 4,
                'user_id' => 4,
                'address' => '123 blue street',
                'province' => 'Ontario',
                'city'=> 'Ottawa',
                'country'=> 'Canada',
                'postal_code'=> '145 lpo'
            )
        );
        // insert sample data
        DB::table('user_addresses')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_addresses');
    }
}
