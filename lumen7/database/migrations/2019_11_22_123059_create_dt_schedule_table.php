<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDtScheduleTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'dt_schedule';

    /**
     * Run the migrations.
     * @table dt_schedule
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->comment('ID of Schedule');
            $table->integer('train_id')->comment('Train ID of Schedule');
            $table->integer('class_id')->comment('Class ID of Schedule');
            $table->integer('station_departure_id')->comment('Station Departure of Schedule');
            $table->integer('station_arrived_id')->comment('Station Arrived of Schedule');
            $table->time('departure_time')->comment('Departure Time of Schedule');
            $table->time('arrived_time')->comment('Arrived Time of Schedule');
            $table->index(["class_id"], 'class_id');
            $table->index(["station_arrived_id"], 'station_arrived_id');
            $table->index(["train_id"], 'train_id');
            $table->index(["station_departure_id"], 'station_departure_id');
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