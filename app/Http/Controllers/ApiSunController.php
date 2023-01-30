<?php

namespace App\Http\Controllers;

use App\Models\Sun;
use Illuminate\Http\Request;

class ApiSunController extends Controller
{
    /*function __construct() {
        $this->middleware('auth:api')->only(['store', 'update', 'destroy']);
    }*/
    
    function sincos(Request $request) {
        date_default_timezone_set('Europe/Madrid');
        $current = date('hi');
        $sunrise = intval(preg_replace('/[^0-9]/', '', (date_sunrise(time(), SUNFUNCS_RET_STRING, 37.18817, -3.60667, 90, 1))));
        $sunset = intval(preg_replace('/[^0-9]/', '', (date_sunset(time(), SUNFUNCS_RET_STRING, 37.18817, -3.60667, 90, 1))));
        $sunData = ($current - $sunrise)/($sunset - $sunrise);
        
        return response()->json([
            'sin' => sin($sunData),
            'cos' => cos($sunData),
            'sensor1' => rand(0, 10) / 10,
            'sensor2' => rand(0, 10) / 10,
            'sensor3' => rand(0, 10) / 10,
            'sensor4' => rand(0, 10) / 10
        ], 200);
    }
    
    function sunday(Request $request) {
        date_default_timezone_set('Europe/Madrid');
        $current = date('hi');
        $sunrise = preg_replace('/[^0-9]/', '', (date_sunrise(time(), SUNFUNCS_RET_STRING, 37.18817, -3.60667, 90, 1))); //Ej.: 827
        $sunset = preg_replace('/[^0-9]/', '', (date_sunset(time(), SUNFUNCS_RET_STRING, 37.18817, -3.60667, 90, 1))); //Ej.: 1821
        
        $numhours = intval(substr($sunset, 0, 2) - substr($sunrise, 0, 1));
        $sundata = array();
        
        for($i = 0; $i < $numhours; $i++) {
            
        }
    }
    
    public function index() {
        
    }

    public function create() {
        
    }

    public function store(Request $request) {
        
    }

    public function show($id) {
        
    }

    public function edit($id) {
        
    }

    public function update(Request $request, $id) {
        
    }

    public function destroy($id) {
        
    }
    
    
}
