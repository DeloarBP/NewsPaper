<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

       protected function responseJson(
        string $msg,
        string $redirectTo = '',
        int $statusCode = Response::HTTP_OK,
        array $headers = []
    )
    {
        if ($statusCode == Response::HTTP_OK) {
            session()->flash('success', $msg);
        } else {
            session()->flash('error', $msg);
        }
        return response()->json(
            [
                'message' => $msg,
                'redirect_to' => $redirectTo,
            ],
            $statusCode,
            $headers
        );
    }
}
