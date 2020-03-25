<?php
/**
 * @Author: C Yongky Pranowo
 * @Date:   2019-11-24 17:53:56
 * @Last Modified by:   C Yongky Pranowo
 * @Last Modified time: 2020-03-22 15:09:53
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DTTransact extends Model
{
    protected $table = 'dt_transact';
    protected $fillable = ['user_id','dt_schedule_id','phone_number','adult','child','payment_status'];
}
