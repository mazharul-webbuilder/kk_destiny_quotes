<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;




Route::get('quotes', [ApiController::class, 'index']);

Route::post('quote/create', [ApiController::class, 'create']);



