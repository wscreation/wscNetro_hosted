<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatOfTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('cat_of_types')) {
            
            Schema::create('cat_of_types', function (Blueprint $table) {
                $table->id();
                $table->string('category');
                $table->timestamps();
            });
        }

        if (Schema::hasTable('cat_of_types')) {

            DB::table('cat_of_types')->insert(array('created_at'=>now(),'category'=>'Electric Item'));
            DB::table('cat_of_types')->insert(array('created_at'=>now(),'category'=>'Computer Part'));
            DB::table('cat_of_types')->insert(array('created_at'=>now(),'category'=>'Tabs & Phones'));
            DB::table('cat_of_types')->insert(array('created_at'=>now(),'category'=>'Laptop'));
            DB::table('cat_of_types')->insert(array('created_at'=>now(),'category'=>'Desktop'));
            
            //Cat_type_id's
            // 1 = Electric Item
            // 2 = Computer Part 
            // 3 = Tabs & phones
            // 4 = Laptop 
            // 5 = Desktop 
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_of_types');
    }
}
