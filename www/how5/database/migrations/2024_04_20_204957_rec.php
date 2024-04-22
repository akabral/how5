<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recebimentos', function (Blueprint $table) {
            $table->id();
            $table->string('itemdesc');
            
            $table->decimal('qtd', 9, 3);
            $table->decimal('valor', 9, 3);
            $table->longText('obs');
            $table->string('situacao');

            $table->date('datapag');
            $table->date('datavenc');
            $table->timestamps();
        });

        /*
        'situacao',
        */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recebimentos');
    }

};
