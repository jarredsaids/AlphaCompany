<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetadataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metadata', function (Blueprint $table) {
            $table->id();

            $timestampColumns = [
                'passing_apft_at',
                'bh_at',                // behavioral health
                'qualified_at',         // rifle qualification
                'rfo_submitted_at',     // request for orders (DSA)
                'academy_date_at',      // USADSA start date
                'first_three_at',       // first three modules completed
                'prt_at',               // led PRT successfully
                'taught_smct_at',       // taught two SMCT classes
                'voice_commands_at',
                'dnc_at',               // passed drill and ceremony
                'creeds_at',            // passed ds creed and soldier creed
                'ds_history_at',
                'crm_course_at',        // composite risk management
                'sensitive_duty_at',    // DA 7424
                'medical_release_at',   // DA 2870
                'asu_certified_at',     // possesses all required ASU items
                'ta_50_certified_at',   // possesses all required TA-50
            ];

            foreach ($timestampColumns as $column) {
                $table->timestamp($column)->nullable();
            }

            $table->boolean('passed_mental_eval')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Don't ever drop metadata automatically. Backup and then drop manually.
        // Schema::dropIfExists('metadata');
    }
}
