<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToKontingensTable extends Migration
{
    public function up()
    {
        Schema::table('kontingens', function (Blueprint $table) {
            $table->string('address')->nullable()->after('name');
            $table->string('phone')->nullable()->after('address');
            $table->string('email')->nullable()->after('phone');
            $table->date('tanggal_berdiri')->nullable()->after('email'); // Tanggal pendirian
            $table->text('deskripsi')->nullable()->after('tanggal_berdiri'); // Deskripsi kontingen
            $table->integer('total_atlet')->default(0)->after('deskripsi'); // Jumlah atlet
            $table->integer('total_official')->default(0)->after('total_atlet'); // Jumlah official
        });
    }

    public function down()
    {
        Schema::table('kontingens', function (Blueprint $table) {
            $table->dropColumn(['address', 'phone', 'email']);
        });
    }
}
