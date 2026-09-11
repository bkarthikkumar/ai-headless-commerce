<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HealthController extends Controller
{
    public function index()
    {
        return response()->json([
            'status' => 'ok',
            'service' => 'commerce-api',
        ]);
    }

    public function customerFunction()
    {
        return response()->json([
            'status' => 'ok',
            'service' => 'commerce-api-customer-function',
        ]);
    }

    public function anotherFunction(int $id)
    {
        return response()->json([
            'status' => 'ok',
            'service' => 'commerce-api-another-function',
            'id' => $id
        ]);
    }
}
