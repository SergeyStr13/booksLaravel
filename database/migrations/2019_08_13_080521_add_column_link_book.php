<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;

class AddColumnLinkBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
		Schema::table('book', function (Blueprint $table) {
		  $table->string('link');
		});


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()   {
       Schema::table('book', function (Blueprint $table) {
		  $table->dropColumn('link');
		});
    }
}
