<?php

namespace App\Traits;

use App\Models\UserFinancial;
use Illuminate\Support\Facades\Log;

trait AddFinancial {

    public static function bootAddFinancial()
    {
        static::created(function($model){
            UserFinancial::create([
                'user_id' => $model->id
            ]);
        });
    }

}


?>