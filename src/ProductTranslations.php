<?php

namespace Osc2nuke\OSCOM;

use Osc2nuke\OSCOM\Product;
use Illuminate\Database\Eloquent\Model;

class ProductTranslations extends Model
{
    public $table = "products_description";

    protected $primaryKey = 'products_id';

    //
    public function product()
    {
        return $this->belongsTo('Product');
    }
}
