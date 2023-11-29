<?php namespace Dontliem1\Simsimvegan\Models;

use Winter\Storm\Database\Model;

/**
 * Model
 */
class Recipe extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'dontliem1_simsimvegan_recipes';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = ['ingridients_lists'];

    public $belongsTo = ['category' => Category::class];
    public $belongsToMany = [
        'books' => [
            Book::class, 
            'table'    => 'dontliem1_simsimvegan_book_recipe',
            'key' => 'book_id',
            'otherKey' => 'recipe_id',
        ]
    ];

    static function getUnitOptions() {
        return [
            'pcs' => 'шт.',
            'g' => 'г',
            'kg' => 'кг',
            'ml' => 'мл',
            'l' => 'л',
            'tsp' => 'ч. л.',
            'tbsp' => 'ст. л.',
        ];
    }

    static function getIngridientIdOptions() {
        return Ingridient::all()->mapWithKeys(function (Ingridient $item) {
            return [$item['id'] => $item['name']];
        })->all();
    }
}
