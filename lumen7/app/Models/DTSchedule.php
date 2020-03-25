<?php
/**
 * @Author: C Yongky Pranowo
 * @Date:   2019-11-24 17:52:31
 * @Last Modified by:   C Yongky Pranowo
 * @Last Modified time: 2020-03-22 15:09:52
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DTSchedule extends Model
{
    protected $table = 'dt_schedule';
    protected $fillable = ['train_id','class_id','station_departure_id','station_arrived_id','departure_time','arrived_time'];
}
