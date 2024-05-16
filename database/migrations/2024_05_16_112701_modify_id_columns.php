<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyIdColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        // Pour chaque table, modifiez le type de données de la colonne 'id' en 'integer'
        Schema::table('artists', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->change();
        });

        Schema::table('artist_type', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->change();
        });

        Schema::table('artist_type_show', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->change();
        });

        Schema::table('localities', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->change();
        });

        Schema::table('locations', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->change();
        });

        Schema::table('representations', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->change();
        });

        Schema::table('representation_user', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->change();
        });

        Schema::table('roles', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->change();
        });

        Schema::table('role_user', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->change();
        });

        Schema::table('shows', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->change();
        });

        Schema::table('types', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->change();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->change();
        });

        // Rétablissez les contraintes de clé étrangère
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();

        // Pour chaque table, modifiez le type de données de la colonne 'id' en 'bigInteger'
        Schema::table('artists', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->change();
        });

        Schema::table('artist_type', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->change();
        });

        Schema::table('artist_type_show', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->change();
        });

        Schema::table('localities', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->change();
        });

        Schema::table('locations', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->change();
        });

        Schema::table('representations', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->change();
        });

        Schema::table('representation_user', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->change();
        });

        Schema::table('roles', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->change();
        });

        Schema::table('role_user', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->change();
        });

        Schema::table('shows', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->change();
        });

        Schema::table('types', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->change();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->change();
        });

        // Rétablissez les contraintes de clé étrangère
        Schema::enableForeignKeyConstraints();
    }
}
