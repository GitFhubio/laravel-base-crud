<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beers', function (Blueprint $table) {
            $table->id();
            $table->string('brand',255);
            $table->string('materials',255);
            $table->enum('fermentation',['low','high','natural']);
            $table->enum('colour', ['pale','red','dark']);
            $table->enum('strength', ['light', 'normal','strong']);
            $table->float('price',6,2);
            $table->string('cover',2048);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beers');
    }
}


// se voglio aggiungere o come nell'esempio sotto togliere campo faccio migrazione col nome che voglio riferita pero alla tabella
// php artisan make:migration dropallegato  --table=books
// Schema::table('books', function (Blueprint $table) {
// $table->dropColumn('allegato');
// });
// }
//
// /**
// * Reverse the migrations.
// *
// * @return void
// */
// public function down()
// {
// Schema::table('books', function (Blueprint $table) {
//   $table->string('allegato',255)->nullable();
// });
// }
