<?php

namespace App;


class Role extends \Spatie\Permission\Models\Role
{
   /**
     * The database connection used by the model.
     *
     * @var string
     */
    //protected $connection = "wipsys";

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = 'pluto_roles';

   /**
     * The primary key used by the model.
     *
     * @var string
     */
    //protected $primaryKey = 'id';


}
