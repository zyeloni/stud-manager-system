<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_reports', function (Blueprint $table) {
            $table->id();
            $table->string("content");
            $table->unsignedBigInteger("sender_user_id");
            $table->unsignedBigInteger("report_id");

            $table->foreign("sender_user_id")->references("id")->on("users");
            $table->foreign("report_id")->references("id")->on("reports");

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
        Schema::dropIfExists('answer_reports');
    }
}
