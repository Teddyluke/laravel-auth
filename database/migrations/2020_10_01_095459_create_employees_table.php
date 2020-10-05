<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     // funzione che carica la tabella in questione.  i dati sono inseriti come fosse un array associativo. Per tutte le funzionalità consultare la doc di laravael
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->string('surname', 30);
            $table->bigInteger('location_id') -> unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations. Distrugge la tabella
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
