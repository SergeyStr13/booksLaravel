<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BookRenameColumnAuthor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('book', function (Blueprint $table){
        	$table->renameColumn('author', 'authors');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()   {
        //
    }
}
