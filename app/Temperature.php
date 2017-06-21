<?php
namespace App;

use Carbon\Carbon as Carbon;
use Illuminate\Database\Eloquent\Model;

class Temperature extends Model
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
    protected $table = 'temperature';

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


   /**
     * Picks the latest entry of temperature. $id should be the record_id of what you are looking for.
     * Grieve is record_id of 1, Quincy is 2, Lindberg is 3.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLatestTemperature($query, $record_id)
    {
            return $query->orderBy('created_at', 'desc')->where('record_id', $record_id)->first();
    }

/*    public function getCreatedAtAttribute($value)
    {
        $this->attributes['created_at'] = Carbon::parse($value)->toDateTimeString();
    } */
}
