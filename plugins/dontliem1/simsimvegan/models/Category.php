<?php namespace Dontliem1\Simsimvegan\Models;

use Winter\Storm\Database\Model;

/**
 * Model
 */
class Category extends Model
{
    use \Winter\Storm\Database\Traits\Sortable;
    use \Winter\Storm\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'dontliem1_simsimvegan_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];

    public $hasMany = ['recipes' => Recipe::class];
}
