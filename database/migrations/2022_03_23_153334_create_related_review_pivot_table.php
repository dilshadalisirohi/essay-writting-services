<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelatedReviewPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('related_review_pivot', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id');
            $table->unsignedBigInteger('related_id');
            $table->foreign('parent_id')
                ->references('id')
                ->on('reviews')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('related_id')
                ->references('id')
                ->on('reviews')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->index('parent_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('related_review_pivot');
    }
}
