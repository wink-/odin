<?php

namespace App;

class Permission extends \Spatie\Permission\Models\Permission
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
    protected $table = 'pluto_permissions';

   /**
     * The primary key used by the model.
     *
     * @var string
     */
    //protected $primaryKey = 'id';


    public static function defaultPermissions()
    {
        return [
            'view_users',
            'add_users',
            'edit_users',
            'delete_users',

            'view_roles',
            'add_roles',
            'edit_roles',
            'delete_roles',

            'view_posts',
            'add_posts',
            'edit_posts',
            'delete_posts',
        ];
    }
}
