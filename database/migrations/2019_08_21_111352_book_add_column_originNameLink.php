<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BookAddColumnOriginNameLink extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
    	Schema::table('book', function (Blueprint $table) {
    		$table->string('originNameLink');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('book', function (Blueprint $table){
        	$table->dropColumn('originNameLink');
		});
    }
}
