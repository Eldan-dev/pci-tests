<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class APIController extends Controller
{
	/**
	 * @return string|false
	 */
	public function test(): bool|string {
		Log::info("Reached backend");
		return json_encode('bla');
	}
}
