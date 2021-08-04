<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrioritariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prioritarias', function (Blueprint $table) {
            $table->id();

            $table->integer('pregunta_nivel_1');
            $table->integer('pregunta_nivel_2');
            $table->integer('pregunta_nivel_3');
            $table->integer('pregunta_nivel_4');
            $table->integer('pregunta_nivel_5');
            $table->integer('pregunta_nivel_6');
            $table->integer('pregunta_nivel_7');
            $table->integer('pregunta_nivel_8');

            $table->boolean('pregunta_si_no_1');
            $table->string('justificacion_1',255);

            $table->boolean('pregunta_si_no_2');
            $table->string('justificacion_2',255);

            $table->boolean('pregunta_si_no_3');
            $table->string('justificacion_3',255);

            $table->boolean('pregunta_si_no_4');
            $table->string('justificacion_4',255);

            $table->boolean('pregunta_si_no_5');
            $table->string('justificacion_5',255);

            $table->boolean('pregunta_si_no_6');
            $table->string('justificacion_6', 255);

            
            $table->text('sugerencias_recomendaciones');

            $table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')
                ->references('id')
                ->on('pacientes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('prioritarias');
    }
}
