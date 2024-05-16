<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MahasiswaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'npm' => $this->npm,
            'nama' => $this->nama,
            'jurusan' => $this->jurusan,
            'semester' => $this->semester,
 
        ];
    }
}
