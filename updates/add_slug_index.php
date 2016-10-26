<?php

namespace BuzzwordCompliant\FAQs\Updates;

use Schema;
Use Str;
use October\Rain\Database\Updates\Migration;
use BuzzwordCompliant\FAQs\Models\FAQ;

class AddSlugIndex extends Migration
{
    public function up()
    {
        Schema::table('bc_faqs', function ($table) {
            $table->string('slug')->unique()->nullable();
        });

        FAQ::all()->each(function ($question) {
            $question->slug = Str::slug($question->name);
            $question->save();
        });
    }

    public function down()
    {
        Schema::table('bc_faqs', function ($table) {
            $table->dropColumn('slug');
        });
    }
}
