<?php

namespace App\Http\Controllers;

use App\Models\ZipCode;
use Illuminate\Http\Request;
use App\Http\Resources\ZipCodeResource;

class ZipCodeController extends Controller
{
    public function show(ZipCode $zipCode)
    {
        return response()->json(
            ZipCodeResource::make($zipCode)
        );
    }
}
