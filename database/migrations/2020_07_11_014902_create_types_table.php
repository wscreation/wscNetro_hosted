<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       if (!Schema::hasTable('types')) {
            
            Schema::create('types', function (Blueprint $table) {
                $table->id();
                $table->foreignId('type_id')->constrained('cat_of_types')->nullable();
                $table->string('type')->unique();
                $table->timestamps();
            });
            
        }

        if (Schema::hasTable('types')) {
            // ELECTRIC ITEMS
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'AUDIO SYSTEM'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'AMPLIFIER'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'BUFFEL'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'BLENDER'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'CALCULATOR'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'CELLING FAN'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'CABLE'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'CAR AUDIO'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'CLOCK'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'DVD PLAYER'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'DIGITAL CAMERA'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'DOOR BELL'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'ELECTRIC COOLER'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'EX HOUSE FAN'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'FAN'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'FOOD PROCOSSOR'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'FM MIC'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'GPS SYSTEM'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'HEATERS'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'HAIR DRYEIR'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'HAIR IRON'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'INVERTER'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'KETTLE'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'MP3 PLAYER'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'MIC'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'MICRO WAVE'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'MULTI COOLIER'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'NIGHT LAMP'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'PHOTO COPY'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'POWER GUARD'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'RICE COOKER'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'REFRIGERATR'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'TOSTER'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'TELEVITION'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'VACUM CLEANER'));
            DB::table('types')->insert(array('type_id'=>1,'created_at' => now(), 'type' => 'WALL FAN'));
            

            // COMPUTER PARTS
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'ADAPTOR'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'ADSLSPLITER'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'AVR'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'ACCES POINT'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'BAG(LAPTOP)'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'BROAD BAND PARTS'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'BATTERY'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'BLUE RAY PLAYER'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'BARCODE READER'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'CAMERA'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'CARD READER'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'CLEANER'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'CASING'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'CD'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'COOLING'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'CLI UNIT'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'CHARGER'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'DONGLE'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'DVD'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'DVD WRITTER'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'EXTERNAL HARD DRIVE'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'EXTERNAL COD'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'FIBER OPTIC CABLE'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'FIBER NCC'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'FAR MACHINE'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'GRAPIC CARD'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'HARD DRIVER'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'HDMI CABLE'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'HUB'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'IDE CABLE'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'JUMPER'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'JOYSTICK'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'KEY BOARD'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'KEY STENE'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'LED PANEL'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'LAPTOP CHAGER'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'MONITER'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'MOTHER BOARD'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'MOUSE'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'MOUSE PAD'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'MEMORY CHIP'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'RECORDER'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'RAM'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'REPEATER'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'RIBBON'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'SATA CABLE'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'SERIAL CABLE'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'SPEAVER SYSTEM'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'SURGE PROTESTOR'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'SCANER'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'TAPE DRIVE'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'TONER'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'TV CARD'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'USB CABLE'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'UPS SYSTEM'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'VIRUS GUARD'));
            DB::table('types')->insert(array('type_id'=>2,'created_at' => now(), 'type' => 'LAN CABLE'));

            // tabs & phones
            DB::table('types')->insert(array('type_id'=>3,'created_at' => now(), 'type' => 'TAB'));
            DB::table('types')->insert(array('type_id'=>3,'created_at' => now(), 'type' => 'DOOR PHONE'));
            DB::table('types')->insert(array('type_id'=>3,'created_at' => now(), 'type' => 'LAND PHONE'));
            DB::table('types')->insert(array('type_id'=>3,'created_at' => now(), 'type' => 'LAND PHONE ACC'));
            DB::table('types')->insert(array('type_id'=>3,'created_at' => now(), 'type' => 'HEDD PHONE'));
            DB::table('types')->insert(array('type_id'=>3,'created_at' => now(), 'type' => 'MEGA PHONE'));
            DB::table('types')->insert(array('type_id'=>3,'created_at' => now(), 'type' => 'PHONE'));

            // laptop
            DB::table('types')->insert(array('type_id'=>4,'created_at' => now(), 'type' => 'LAPTOP'));

            // desktop
            DB::table('types')->insert(array('type_id'=>5,'created_at' => now(), 'type' => 'DESKTOP'));
            
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('types');
    }
}
