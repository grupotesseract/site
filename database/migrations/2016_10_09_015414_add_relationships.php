<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('role_id')->unsigned()->after('id');
            $table->foreign('role_id')
                ->references('id')
                ->on('roles')
                ->onDelete('cascade');
        });

        Schema::table('socials', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->after('id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });

        Schema::table('academics', function (Blueprint $table) {
            $table->integer('curriculum_id')->unsigned()->after('id');
            $table->foreign('curriculum_id')
                ->references('id')
                ->on('curricula')
                ->onDelete('cascade');
        });

        Schema::table('curricula', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->after('id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });

        Schema::table('curriculum_skill', function (Blueprint $table) {
            $table->integer('skill_id')->unsigned();
            $table->foreign('skill_id')
                ->references('id')
                ->on('skills')
                ->onDelete('cascade');

            $table->integer('curriculum_id')->unsigned()->nullable();
            $table->foreign('curriculum_id')
                ->references('id')
                ->on('curricula')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
