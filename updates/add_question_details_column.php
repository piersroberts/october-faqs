<?php

namespace BuzzwordCompliant\FAQs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddQuestionDetailsColumn extends Migration
{
    public function up()
    {
        Schema::table('bc_questions', function ($table) {
            $table->text('details')->nullable();
        });
    }

    public function down()
    {
        Schema::table('bc_questions', function ($table) {
            $table->dropColumn('details');
        });
    }
}
