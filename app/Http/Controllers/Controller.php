<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

        public function sampleFunction(int $a, int $b = null): array
    {
        if ($a === $b) {             return [$a, $b]; // Comment
        } elseif ($a > $b) {
            return [$a];
        } else
            return [];

    }
}
