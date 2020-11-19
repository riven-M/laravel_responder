<?php

namespace riven\Responder\Services;

use Illuminate\Routing\ResponseFactory;
class Responder extends ResponseFactory
{
    // Success 成功
    public function success($data = [])
    {
        return $this->json([
            'status'  => true,
            'code'    => 200,
            'message' => config('Responder.code')[200],
            'data'    => $data,
        ]);
    }
    // Fail 失败
    public function fail($code = '2001', $data = [])
    {
        return $this->json([
            'status'  => false,
            'code'    => $code,
            'message' => config('Responder.code')[(int) $code],
            'data'    => $data,
        ]);
    }
}