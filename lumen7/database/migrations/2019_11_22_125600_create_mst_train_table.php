<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstTrainTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'mst_train';

    /**
     * Run the migrations.
     * @table mst_train
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->comment('ID of train');
            $table->string('train_name', 100)->comment('Name of train');
            $table->integer('train_class_id')->comment('Class ID of train');
            $table->integer('train_area_id')->comment('Area ID of train');
            $table->index(["train_area_id"], 'train_area_id');
            $table->index(["train_class_id"], 'train_class_id');
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