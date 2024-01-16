<?php

namespace App\Http\Controllers;

class BaseController extends Controller {
    public function sendSuccess($data, $msg, $success = true) {
        $res = [
            'success' => $success,
            //            array_key_first($data) => array_values($data),
            'data' => $data,
            'message' => $msg,
        ];

        return response()->json($res, 200);
    }

    public function sendError($error, $errorMsg = [], $code = 200) {
        $res = [
            'success' => false,
            'message' => $error,
        ];
        if (!empty($errorMsg)) {
            $res['data'] = $errorMsg;
        }
        return response()->json($res, $code);
    }
}
