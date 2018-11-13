<?php namespace Kevinlyh\User\Models;

use Model;

/**
 * Model
 */
class User extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
//    use \October\Rain\Database\Traits\NestedTree;
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'kusers';


    /**
     * @var array Validation rules
     */
    public $rules = [
        'email' => 'required|email|unique:kusers',
        'password' => 'required|between:6,20'
    ];

    protected $guarded = [];
    protected $primaryKey = 'id';

}
