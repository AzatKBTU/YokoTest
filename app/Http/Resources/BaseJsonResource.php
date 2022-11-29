<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

abstract class BaseJsonResource extends JsonResource
{
    public $with = [
        'code'    => 0,
        'success' => true,
        'message' => ''
    ];

    public function setMessage(string $message): self
    {
        $this->with['message'] = $message;
        return $this;
    }

    public function setStatusCode(int $code): self
    {
        $this->response()->setStatusCode($code);
        return $this;
    }
}
