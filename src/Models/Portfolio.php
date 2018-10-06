<?php

namespace Litecms\Portfolio\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Litepie\Database\Model;
use Litepie\Database\Traits\Slugger;
use Litepie\Filer\Traits\Filer;
use Litepie\Hashids\Traits\Hashids;
use Litepie\Repository\Traits\PresentableTrait;
use Litepie\Database\Traits\DateFormatter;
use Litepie\Trans\Traits\Translatable;
class Portfolio extends Model
{
    use Filer, SoftDeletes, Hashids, Slugger, Translatable, DateFormatter, PresentableTrait;


    /**
     * Configuartion for the model.
     *
     * @var array
     */
     protected $config = 'litecms.portfolio.portfolio.model';


    /**
     * The category that belong to the portfolio.
     */
     public function category()
    {

        return $this->belongsTo('Litecms\Portfolio\Models\Category', 'category_id');
    }

   
}
