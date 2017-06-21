<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Analysis extends Model
{

   /**
     * The database connection used by the model.
     *
     * @var string
     */
    protected $connection = "pacsys";

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Analysis';

   /**
     * The primary key used by the model.
     *
     * @var string
     */
    protected $primaryKey = 'ID';





    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['RecordName', 'FormName', 'Date', 'Value1', 'Value2', 'Value3', 'Value4', 'Value5', 'Value6',
        'Value7', 'Value8', 'Value9', 'Value10', 'Value11', 'Value12', 'Value13', 'Value14', 'Value15', 'Value16',
        'Value17', 'Value18', 'Value19', 'Value20', 'EmpCode', 'TimeStamp', 'DeleteVistible', 'IDy', 'ActValue1',
        'ActValue2', 'ActValue3', 'ActValue4', 'ActValue5', 'ActValue6', 'ActValue7', 'ActValue8', 'ActValue9',
        'ActValue10', 'ActValue11', 'ActValue12', 'ActValue13', 'ActValue14', 'ActValue15', 'ActValue16',
        'ActValue17', 'ActValue18', 'ActValue19', 'ActValue20'];

   /**
     * Convert dates into Carbon objects
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'TimeStamp','Date'];
}
