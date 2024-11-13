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
    Schema::table('menus', function (Blueprint $table) {
        $table->text('category')->change();  // Mengubah menjadi TEXT
    });
}

public function down()
{
    Schema::table('menus', function (Blueprint $table) {
        $table->string('category')->change();  // Ubah kembali jika rollback
    });
}
};
