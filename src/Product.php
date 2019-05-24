<?php
namespace Osc2nuke\OSCOM;

//use App\ProductTranslations;

use Illuminate\Database\Eloquent\Model;
use App;

/**
* Model of the table tasks.
*/
class Product extends Model
{
    public $table = "products";
    protected $primaryKey = 'products_id';

   // protected $fillable = [
   //     'name',
   // ];
    
    public function translation($language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }
        return $this->hasMany('Osc2nuke\OSCOM\ProductTranslations', 'products_id')->where('language_id', '=', $language);
    } 
}