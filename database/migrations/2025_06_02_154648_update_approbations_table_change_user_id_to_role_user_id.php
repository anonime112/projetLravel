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
        Schema::table('approbations', function (Blueprint $table) {
            if (Schema::hasColumn('approbations', 'users_id')) {
                $table->dropForeign(['users_id']);
                $table->dropColumn('users_id');
            }

            if (Schema::hasColumn('approbations', 'role')) {
                $table->dropColumn('role');
            }

            $table->foreignId('role_user_id')
                  ->after('statut')
                  ->constrained('role_users')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('approbations', function (Blueprint $table) {
            $table->dropForeign(['role_user_id']);
            $table->dropColumn('role_user_id');

            $table->string('role')->nullable();
            $table->foreignId('users_id')
                  ->nullable()
                  ->constrained('users')
                  ->onDelete('cascade');
        });
    }
};
