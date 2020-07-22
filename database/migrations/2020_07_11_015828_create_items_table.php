<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('items')) {
            
            Schema::create('items', function (Blueprint $table) {
                $table->id();
                $table->foreignId('type_id')->constrained('types')->onDelete('cascade');
                $table->string('item');
                $table->longText('desc');
                $table->boolean('condition')->default(true);
                $table->float('price',10,2);
                $table->float('sale_price',10,2)->nullable();
                $table->text('image')->nullable()->default('blank.jpg');
                $table->string('brand',50)->nullable();
    
                // details
                $table->boolean('hot_deal')->default(false);
                $table->string('remember_token', 10)->default(\Str::random(10));
                $table->timestamps();
    
                // condition
                // true     = brand new
                // false    = used
    
                //hot deal
                // true     = deal
            });
            
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
