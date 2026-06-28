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
        Schema::table('clients', function (Blueprint $table) {
            $table->unique('company_name');
        });
        
        Schema::table('departments', function (Blueprint $table) {
            $table->unique('name');
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->foreign('client')->references('company_name')->on('clients')->onDelete('set null');
            $table->index('name');
        });

        Schema::table('employees', function (Blueprint $table) {
            $table->foreign('department')->references('name')->on('departments')->onDelete('set null');
            $table->index('name');
        });

        Schema::table('jobs', function (Blueprint $table) {
            $table->foreign('department')->references('name')->on('departments')->onDelete('set null');
            $table->index('title');
        });

        Schema::table('news', function (Blueprint $table) {
            $table->index('title');
        });
    }

    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign(['client']);
            $table->dropIndex(['name']);
        });

        Schema::table('employees', function (Blueprint $table) {
            $table->dropForeign(['department']);
            $table->dropIndex(['name']);
        });

        Schema::table('jobs', function (Blueprint $table) {
            $table->dropForeign(['department']);
            $table->dropIndex(['title']);
        });

        Schema::table('news', function (Blueprint $table) {
            $table->dropIndex(['title']);
        });

        Schema::table('clients', function (Blueprint $table) {
            $table->dropUnique(['company_name']);
        });

        Schema::table('departments', function (Blueprint $table) {
            $table->dropUnique(['name']);
        });
    }
};
