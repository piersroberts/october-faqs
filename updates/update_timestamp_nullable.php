<?php namespace BuzzwordCompliant\FAQs\Updates;

use October\Rain\Database\Updates\Migration;
use DbDongle;

class UpdateTimestampsNullable extends Migration
{
    public function up()
    {
        DbDongle::disableStrictMode();

        DbDongle::convertTimestamps('bc_faqs');
        DbDongle::convertTimestamps('bc_questions');
    }

    public function down()
    {
        // ...
    }
}
