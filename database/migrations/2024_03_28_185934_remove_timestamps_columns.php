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
        // Obtenez la liste des tables dans la base de données
        $tables = Schema::getConnection()->getDoctrineSchemaManager()->listTableNames();

        foreach ($tables as $table) {
            // Vérifiez si la table a les colonnes 'created_at' et 'updated_at' avant de les supprimer
            if (Schema::hasColumns($table, ['created_at', 'updated_at'])) {
                Schema::table($table, function (Blueprint $table) {
                    $table->dropTimestamps();
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
