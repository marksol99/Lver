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
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->integer('personalId')->unique();
            $table->string('firstName');
            $table->string('lastName');
            $table->date('dob');
            $table->string('phonenumber');
            $table->string('gender')->nullable();
            $table->string('email')->unique();
            $table->string('address');
            $table->integer('postCode');
            $table->string('place');
           
        });
        
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
        });

        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personId')->constrained('persons')->onDelete('cascade');
            $table->foreignId('courseId')->constrained('courses')->onDelete('cascade');
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personId')->constrained('persons')->onDelete('cascade');
            $table->decimal('totalPrice', 10, 2);
        });

        Schema::create('orderLines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orderId')->constrained('orders')->onDelete('cascade');
            $table->foreignId('courseId')->constrained('courses')->onDelete('cascade');
            $table->decimal('price', 10, 2);

        });


        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persons');
        Schema::dropIfExists('courses');
        Schema::dropIfExists('registrations');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('orderLines');
        Schema::dropIfExists('sessions');
    }
};
