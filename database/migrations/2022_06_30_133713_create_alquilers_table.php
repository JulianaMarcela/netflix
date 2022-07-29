<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlquilersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alquilers', function (Blueprint $table) {
            $table->id();
            $table->date('fechaAlquiler');
            $table->date('fechaDevulucion');
            $table->string('nombre',45);
            $table->integer('cantidad')->length(10);
            $table->float('subTotal',12,2);
            $table->float('iva',12,2);
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references("id")->on("clientes")->onDelate("cascade")->onUpdate("cascade");
            $table->unsignedBigInteger('pelicula_id');
            $table->foreign('pelicula_id')->references("id")->on("peliculas")->onDelate("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('alquilers');
    }
}
