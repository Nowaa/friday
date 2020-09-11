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
            $table->string('description', 255)->default('-')->nullable(false);
            $table->string('owner', 60)->default('No owner')->nullable(false);
            $table->string('status', 50)->default('-')->nullable(false);
            $table->string('category', 100)->default('-')->nullable(false);
            $table->timestamp('created_at')->default(now())->nullable(false);
            $table->dateTime('finished_at')->nullable();
            $table->string('priority', 20)->default('Low')->nullable(false);
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
