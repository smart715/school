<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->date('registration_date');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email');
            $table->string('currency')->nullable();
            $table->string('currency_symbol')->nullable();
            $table->string('subdomain')->unique();
            $table->text('footer')->nullable();
            $table->string('logo')->nullable();
            $table->string('frontend_logo')->nullable();
            $table->text('about_text')->nullable();
            $table->string('about_image')->nullable();
            $table->text('facebook_url')->nullable();
            $table->text('twitter_url')->nullable();
            $table->text('linkedin_url')->nullable();
            $table->text('google_plus_url')->nullable();
            $table->text('youtube_url')->nullable();
            $table->text('instagram_url')->nullable();
            $table->text('pinterest_url')->nullable();
            $table->boolean('status')->default(0);
            $table->integer('created_by');
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
        Schema::dropIfExists('schools');
    }
}
