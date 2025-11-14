<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kampanyes', function (Blueprint $table) {
            $table->id();
            $table->string('judulKampanye');
            $table->text('deskKampanye');
            $table->decimal('targetKampanye', 15, 2);
            $table->text('gambarKampanye')->nullable();
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
        Schema::dropIfExists('kampanyes');
    }
};
