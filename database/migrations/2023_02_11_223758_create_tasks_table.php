<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('manager_id')->nullable();
            $table->foreign('manager_id')->references('id')->on('users')->nullOnDelete();
            
            $table->unsignedBigInteger('project_id')->nullable();
            $table->foreign('project_id')->references('id')->on('projects')->nullOnDelete();

            $table->unsignedBigInteger('statu_id')->nullable();
            $table->foreign('statu_id')->references('id')->on('status')->nullOnDelete();

            $table->string('title');
            $table->date('deadline');
            $table->text('description')->nullable();
            $table->softDeletes();


            

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
        Schema::dropIfExists('tasks');
    }
}
