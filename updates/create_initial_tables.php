<?php

namespace BuzzwordCompliant\FAQs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateInitialTables extends Migration
{
    public function up()
    {
        Schema::create('bc_faqs', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('bc_questions', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('faq_id')->unsigned()->nullable();
            $table->foreign('faq_id')->references('id')->on('bc_faqs');
            $table->text('question')->nullable();
            $table->text('answer')->nullable();
            $table->integer('sort_order')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('bc_questions');
        Schema::drop('bc_faqs');
    }
}
