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
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->string('ref_letter_no');
            $table->date('letter_date');
            $table->text('meeting_title');
            $table->date('meeting_date');
            $table->time('meeting_time');
            $table->string('meeting_location');
            $table->string('meeting_organizer');
            $table->date('due_date');
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
        Schema::dropIfExists('meetings');
    }
};
