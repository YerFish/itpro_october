<?php namespace Itpro\Projects\Models;

use Model;

/**
 * Model
 */
class Order extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'itpro_projects_orders';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    //связи
    public $belongsTo = [
        'technology' => 'itpro\projects\models\Technology',
        'status' => 'itpro\projects\models\OrderStatus',
        'client' => 'itpro\projects\models\Client',
    ];

    public $attachOne = [
        'order_file' => 'System\Models\File'
    ];

}
