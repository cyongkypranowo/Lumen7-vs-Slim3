
<?php

/**
 * @author Cokro Yongky Pranowo
 * @email cokroyongkyp@gmail.com
 * @create date 2019-11-24 13:54:25
 * @modify date 2019-11-24 13:54:25
 * @desc [description]
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'mst_users';

    /**
     * Run the migrations.
     * @table mst_users
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->comment('ID of User');
            $table->string('user_name', 100)->comment('Name of Iser');
            $table->string('user_email', 100)->comment('Email of User');
            $table->timestamp('user_email_verified_at')->nullable()->default(null)->comment('Email Verified ');
            $table->string('user_password')->comment('Password of User');
            $table->string('user_remember_token', 100)->nullable()->default(null)->comment('Token Remember');
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