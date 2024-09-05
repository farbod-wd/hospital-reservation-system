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
        Schema::table('patients', function (Blueprint $table) {
            $table->integer('age');
            $table->string('is_precedent')->default(App\Enum\Patientstatus::NotHave->value);
            $table->string('type_sick')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->dropColumn('age');
            $table->dropColumn('is_precedent');
            $table->dropColumn('type_sick');
        });
    }
};
