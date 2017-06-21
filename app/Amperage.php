<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Amperage extends Model
{
   /**
     * The database connection used by the model.
     *
     * @var string
     */
    protected $connection = "process_data";

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'amp';

   /**
     * The primary key used by the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

   /**
     * Convert dates into Carbon objects
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];
}
