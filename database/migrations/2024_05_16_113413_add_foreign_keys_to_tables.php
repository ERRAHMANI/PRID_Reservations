<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Add foreign key constraint for artist_types table
        Schema::table('artist_type', function (Blueprint $table) {
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade')->onUpdate('cascade');
        });

        // Add foreign key constraint for artist_type_shows table
        Schema::table('artist_type_show', function (Blueprint $table) {
            $table->foreign('artist_type_id')->references('id')->on('artist_type')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('show_id')->references('id')->on('shows')->onDelete('cascade')->onUpdate('cascade');
        });

        // Add foreign key constraint for locations table
        Schema::table('locations', function (Blueprint $table) {
            $table->foreign('locality_id')->references('id')->on('localities')->onDelete('cascade')->onUpdate('cascade');
        });

        // Add foreign key constraint for representations table
        Schema::table('representations', function (Blueprint $table) {
            $table->foreign('show_id')->references('id')->on('shows')->onDelete('cascade')->onUpdate('cascade');
        });

        // Add foreign key constraint for representation_users table
        Schema::table('representation_user', function (Blueprint $table) {
            $table->foreign('representation_id')->references('id')->on('representations')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });

        // Add foreign key constraint for role_users table
        Schema::table('role_user', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });

        // Add foreign key constraint for shows table
        Schema::table('shows', function (Blueprint $table) {
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop foreign key constraints
        Schema::table('artist_type', function (Blueprint $table) {
            $table->dropForeign(['artist_id']);
            $table->dropForeign(['type_id']);
        });

        Schema::table('artist_type_show', function (Blueprint $table) {
            $table->dropForeign(['artist_type_id']);
            $table->dropForeign(['show_id']);
        });

        Schema::table('locations', function (Blueprint $table) {
            $table->dropForeign(['locality_id']);
        });

        Schema::table('representations', function (Blueprint $table) {
            $table->dropForeign(['show_id']);
        });

        Schema::table('representation_user', function (Blueprint $table) {
            $table->dropForeign(['representation_id']);
            $table->dropForeign(['user_id']);
        });

        Schema::table('role_user', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
            $table->dropForeign(['user_id']);
        });

        Schema::table('shows', function (Blueprint $table) {
            $table->dropForeign(['location_id']);
        });
    }
}
