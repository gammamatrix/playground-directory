<?php

/**
 * Playground
 */

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * \Playground\Directory\Models\Tagged
 */
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('directory_tagged', function (Blueprint $table) {

            // Primary key

            $table->uuid('id')->primary();

            // IDs

            $table->uuid('created_by_id')->nullable()->index();
            $table->uuid('tag_id')->nullable()->index();
            $table->uuid('location_id')->nullable()->index();
            $table->uuid('contact_id')->nullable()->index();

            // Dates

            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('directory_tagged');
    }
};
