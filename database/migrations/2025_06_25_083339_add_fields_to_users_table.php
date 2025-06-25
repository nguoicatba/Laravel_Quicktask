<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Attributes\After;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('name');
            $table->string('username')->after('id');
            $table->string('firstname')->after('id');
            $table->string('lastname')->after('id');
            $table->boolean('isAdmin')->after('password');
            $table->boolean('isActive')->after('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn(['firstname', 'lastname', 'username']);
            $table->string('name')->after('id');
        });
    }
};
