<?php

namespace App\DTO;

use Illuminate\Http\Request;

class ProductDTO
{

    /**
     * @return array
     */
    public function getArray($request): array
    {
        return [
            "name" => $this->request->name,
            "price" => $this->request->price,
            "description" => $this->request->description
        ];
    }
}
