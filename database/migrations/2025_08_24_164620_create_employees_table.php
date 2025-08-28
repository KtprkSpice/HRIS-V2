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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string("fullname");
            $table->string("email")->unique();
            $table->string("address")->nullable();
            $table->foreignId("department_id")->constrained("departments")->onDelete("cascade");
            $table->enum("status", ["active", "inactive"]);
            $table->string("phone")->nullable();
            $table->decimal("salary", 10, 2)->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
