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
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->string('ref_file_no');
            $table->date('letter_date');
            $table->text('visit_title');
            $table->date('visit_date');
            $table->time('visit_time');
            $table->string('location');
            $table->bigInteger('officer_id');
            $table->text('issue');
            $table->bigInteger('created_by');
            $table->timestamp('created_at');
            $table->bigInteger('updated_by');
            $table->timestamp('updated_at');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};
