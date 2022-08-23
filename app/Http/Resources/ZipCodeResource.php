<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ZipCodeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'zip_code' => $this->d_codigo,
            'locality' => $this->stripAccentsUpper($this->d_ciudad),
            'federal_entity' => [
                'key' => intval($this->c_estado),
                'name' => $this->stripAccentsUpper($this->d_estado),
                'code' => $this->c_CP ?: null,
            ],
            'settlements' => [
                [
                    'key' => intval($this->id_asenta_cpcons),
                    'name' => $this->stripAccentsUpper($this->d_asenta),
                    'zone_type' => $this->stripAccentsUpper($this->d_zona),
                    'settlement_type' => [
                        'name' => $this->d_tipo_asenta,
                    ]
                ]
            ],
            'municipality' => [
                'key' => intval($this->c_mnpio),
                'name' => $this->stripAccentsUpper($this->D_mnpio),
            ]
        ];
    }

    private function stripAccentsUpper($str) {
        $str = strtr(utf8_decode($str), utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'), 'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
        return strtoupper($str);
    }
}
