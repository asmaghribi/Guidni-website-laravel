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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('password');
            $table->string('fax')->nullable();
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->text('adresse')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('status')->default(true);
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->text('adresse')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('villes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('image')->nullable();
        });
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('ville_id');
            $table->foreign('ville_id')->references('id')->on('villes')->onDelete('cascade');
            $table->unsignedBigInteger('supplier_id');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
            $table->text('adresse')->nullable();
            $table->text('description')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->decimal('prix_table', 10, 3)->nullable()->default(0.000);
            $table->boolean('status')->default(false);
            $table->text('images')->nullable();
            $table->timestamps();
        });

         Schema::create('reservation_restaurants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('restaurant_id');
            $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('nombre')->nullable();
            $table->time('heure');
            $table->date('date');
            $table->decimal('prix', 10, 3)->nullable()->default(0.000);
            $table->enum('status', ['pending', 'rejected','confirmed'])->default('pending');
            $table->timestamps();
        });

        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('etoile');
            $table->unsignedBigInteger('ville_id');
            $table->foreign('ville_id')->references('id')->on('villes')->onDelete('cascade');
            $table->unsignedBigInteger('supplier_id');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
            $table->text('adresse')->nullable();
            $table->text('description')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->boolean('status')->default(false);
            $table->boolean('vue_mere')->default(false);
            $table->boolean('plage')->default(false);
            $table->boolean('piscine')->default(false);
            $table->decimal('prix_chambre', 10, 3)->nullable()->default(0.000);
            $table->text('images')->nullable();
            $table->timestamps();
        });
        Schema::create('reservation_hotels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hotel_id');
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->date('date_arrive');
            $table->date('date_migration');
            $table->string('nombre_chambre');
            $table->decimal('prix', 10, 3)->nullable()->default(0.000);
            $table->enum('status', ['pending', 'rejected','confirmed'])->default('pending');

            $table->timestamps();
        });
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date_evenement');
            $table->unsignedBigInteger('ville_id');
            $table->foreign('ville_id')->references('id')->on('villes')->onDelete('cascade');
            $table->unsignedBigInteger('supplier_id');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
            $table->text('adresse')->nullable();
            $table->text('description')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->boolean('status')->default(false);
            $table->text('images')->nullable();
            $table->decimal('prix_reservation', 10, 3)->nullable()->default(0.000);
            $table->timestamps();
        });
        Schema::create('reservation_evenements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('evenement_id');
            $table->foreign('evenement_id')->references('id')->on('evenements')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->decimal('prix', 10, 3)->nullable()->default(0.000);
            $table->enum('status', ['pending', 'rejected','confirmed'])->default('pending');
            $table->timestamps();
        });

        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('subject')->nullable();
            $table->string('message')->nullable();
            $table->boolean('status')->default(false);
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
        Schema::dropIfExists('users');
        Schema::dropIfExists('admins');
        Schema::dropIfExists('villes');
        Schema::dropIfExists('restaurants');
        Schema::dropIfExists('reservation_restaurants');
        Schema::dropIfExists('hotels');
        Schema::dropIfExists('reservation_hotels');
        Schema::dropIfExists('evenements');
        Schema::dropIfExists('reservation_evenements');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('contacts');
    }
};
