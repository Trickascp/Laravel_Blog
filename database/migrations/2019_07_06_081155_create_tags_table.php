<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nama")->unique();
            $table->timestamps();
        });

        DB::table('tags')->insert(
            array(
                array('nama' => 'PHP'),
                array('nama' => 'Laravel'),
                array('nama' => 'Composer'),
                array('nama' => 'Java'),
                array('nama' => 'Javascript'),
                array('nama' => 'Framework'),
            ));


        Schema::create('artikel_tag', function (Blueprint $table) {
            $table->bigInteger('artikel_id')->unsigned();
            $table->bigInteger('tag_id')->unsigned();

            $table->foreign('artikel_id')->references('id')->on('artikels')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');


        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');

        Schema::dropIfExists('artikel_tags');
    }
}
