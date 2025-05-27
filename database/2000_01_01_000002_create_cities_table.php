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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->integer("country_id");
            $table->string("country_code", 10);
            $table->string("title");
            $table->string("slug")->default();
            $table->string("code", 10)->unique();
            $table->string("status", 50)->default(config("constant.status.passive", 'PASSIVE'));
            $table->timestamps();
            $table->softDeletes();

//            $table->foreign("country_id")->references("id")->on("countries")->constrained()->cascadeOnDelete();
//            $table->foreign("country_code")->references("iso_code_2")->on("countries")->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
