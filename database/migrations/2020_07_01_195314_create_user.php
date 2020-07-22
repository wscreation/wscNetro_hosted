
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;


class CreateUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('user', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });

        $pwd = Hash::make("netroComputers");
        $random = Str::random(10);
        DB::table('users')->insert(array(
            array(
                "id"=>'1',
                "name"=>"netro computers",
                "email"=>"netrocomputers@gmail.com",
                "password"=>$pwd, 
                "created_at"=>now(), 
                "remember_token"=>$random,
            ),
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
