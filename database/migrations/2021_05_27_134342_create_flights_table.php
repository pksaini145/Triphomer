<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
        $table->bigIncrements('id');
         $table->tinyInteger('parent')->nullable();
         $table->string('heading')->nullable();
         $table->string('subheading')->nullable();
         $table->string('hero_heading')->nullable();
         $table->string('slug')->nullable();
         $table->string('imagename')->nullable();
         $table->string('imagealt')->nullable();
         $table->string('imagetitle')->nullable();
         $table->text('content')->nullable();
         $table->string('seo_title')->nullable();
         $table->string('gp_title')->nullable();
         $table->string('fb_title')->nullable();
         $table->string('cnonical_tag')->nullable();
         $table->string('seo_keywords')->nullable();
         $table->string('seo_desc')->nullable();
         $table->string('gp_desc')->nullable();
         $table->string('fb_desc')->nullable();
         $table->string('seo_url')->nullable();
         $table->boolean('footer_link')->defaut(0)->nullable();
         $table->boolean('index')->nullable();
         $table->boolean('deal')->defaut(0)->nullable();
         $table->boolean('content_variation')->defaut(0)->nullable();
         $table->boolean('status')->defaut(1)->nullable();
         $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
