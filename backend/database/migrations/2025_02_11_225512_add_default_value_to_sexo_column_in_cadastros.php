<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('cadastros', function (Blueprint $table) {
            $table->string('sexo')->default('não informado')->change();
        });
    }
    
    public function down()
    {
        Schema::table('cadastros', function (Blueprint $table) {
            $table->string('sexo')->nullable()->change();
        });
    }
    
};
