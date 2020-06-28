<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSegmentTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('segment_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('segment_id');
            $table->char('code', 3);
            $table->string('name');
            $table->timestamps();

            $table->foreign('segment_id')
                ->references('id')
                ->on('segments')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('segment_types');
    }
}
