<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDtTransactTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'dt_transact';

    /**
     * Run the migrations.
     * @table dt_transact
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->comment('ID of Transact');
            $table->integer('user_id')->nullable()->default(null)->comment('ID User');
            $table->integer('dt_schedule_id')->nullable()->default(null)->comment('Schedule ID');
            $table->string('phone_number', 15)->nullable()->default(null)->comment('Phone Number');
            $table->integer('adult')->nullable()->default(null)->comment('Total Adult');
            $table->integer('child')->nullable()->default(null)->comment('Total Child');
            $table->enum('payment_status', ['success', 'failed', 'pending'])->nullable()->default(null)->comment('Status of payment');
            $table->index(["dt_schedule_id"], 'dt_schedule_id');
            $table->index(["user_id"], 'user_id');
            $table->softDeletes();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
