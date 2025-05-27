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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("slug")->nullable();
            $table->string("iso_code_2", 2)->unique();
            $table->string("iso_code_3", 3)->unique();
            $table->mediumText("address_format")->nullable();
            $table->integer("postcode_required")->default(0);
            $table->string("status", 50)->default(config("constant.status.passive", 'PASSIVE'));
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
