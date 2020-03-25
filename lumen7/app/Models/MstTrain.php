<?php
/**
 * @Author: C Yongky Pranowo
 * @Date:   2019-11-24 19:12:32
 * @Last Modified by:   C Yongky Pranowo
 * @Last Modified time: 2020-03-22 15:09:56
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MstTrain extends Model
{
    protected $table = 'mst_train';
    protected $fillable = ['train_name','train_class_id','train_area_id'];
}
