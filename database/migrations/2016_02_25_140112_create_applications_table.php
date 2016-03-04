<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('platform');
            $table->string('version');
            $table->string('build');
            $table->boolean('is_beta');
            $table->string('download');
            $table->timestamps();
        });

        DB::table('applications')->insert([
            ["platform" => "iOS", "version" => "1.0", "build" => "1090", "is_beta" => false],
            ["platform" => "tvOS", "version" => "1.0", "build" => "100", "is_beta" => false],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('applications');
    }
}
