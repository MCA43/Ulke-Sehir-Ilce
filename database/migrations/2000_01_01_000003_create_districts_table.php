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
        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->integer("city_id");
            $table->string("city_code", 10);
            $table->string("title");
            $table->string("slug")->nullable();
            $table->string("status", 50)->default(config("constant.status.passive", 'PASSIVE'));
            $table->string('code', 10)->unique();
            $table->timestamps();
            $table->softDeletes();

//            $table->foreign("city_id")->references("id")->on("cities")->constrained()->cascadeOnDelete();
//            $table->foreign("city_code")->references("code")->on("cities")->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('districts');
    }
};
