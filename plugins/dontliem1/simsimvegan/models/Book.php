<?php namespace Dontliem1\Simsimvegan\Models;

use Winter\Storm\Database\Model;

/**
 * Сборник рецептов
 */
class Book extends Model
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
    public $table = 'dontliem1_simsimvegan_books';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];

    public $belongsToMany = [
        'recipes' => [
            Recipe::class,
            'table'    => 'dontliem1_simsimvegan_book_recipe',
            'key'      => 'recipe_id',
            'otherKey' => 'book_id'
        ]
    ];
}
