<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToAtletsTable extends Migration
{
    public function up()
    {
        Schema::table('atlets', function (Blueprint $table) {
            $table->date('birth_date')->nullable()->after('name');
            $table->integer('weight')->nullable()->after('birth_date');
            $table->integer('height')->nullable()->after('weight');
        });
    }

    public function down()
    {
        Schema::table('atlets', function (Blueprint $table) {
            $table->dropColumn(['birth_date', 'weight', 'height']);
        });
    }
}
