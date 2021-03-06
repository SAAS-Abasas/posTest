<?php

namespace App\Http\Controllers;

use App\Models\onlineSync;
use App\Models\unit;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function calPricePerUnit($sell,$unit_id){

        $unit = unit::find($unit_id);
        $price_per_unit=  $sell/$unit->value;
        return $price_per_unit;

    }

    
    public function onlineSync($model,$action_type,$reference_id){
        $onlineSync = new onlineSync;
        $onlineSync->model = "App\Models\\" . $model;
        $onlineSync->action_type = $action_type;
        $onlineSync->reference_id = $reference_id;
        $onlineSync->save();
    }

}
