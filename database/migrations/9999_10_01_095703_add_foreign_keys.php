<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // questa fun serve per creare le relazioni tra tabelle  evidenziando il nome del campo da valorizzare 'location_id' la relazione 'emp-loc', con quale campo va relazionato 'id' e in quale table: locations
      Schema::table('employees', function (Blueprint $table){
        $table -> foreign('location_id', 'emp-loc')
               -> references('id')
               -> on('locations')
               -> onDelete('cascade');

      });
      // stessa cosa succede qui sotto, ma in maniera diversa perchè è una relazione many to many
      Schema::table('employee_task', function (Blueprint $table) {
        $table -> foreign('employee_id', 'tas-emp')
               -> references('id')
               -> on('employees')
               -> onDelete('cascade');
        $table -> foreign('task_id', 'emp-tas')
               -> references('id')
               -> on('tasks')
               -> onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('employee_task', function (Blueprint $table){
        $table -> dropForeign('tas-emp');
        $table -> dropForeign('emp-tas');

      });
    }
}
