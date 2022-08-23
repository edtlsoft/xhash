<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\ZipCode;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CanShowAZipCodeTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_show_a_zip_code()
    {
        $zipCode = ZipCode::factory()->create([
            'd_codigo' => '01210',
            'd_asenta' => 'Santa Fe',
            'd_tipo_asenta' => 'Pueblo',
            'D_mnpio' => 'Álvaro Obregón',
            'd_estado' => 'Ciudad de México',
            'd_ciudad' => 'Ciudad de México',
            'd_CP' => '01401',
            'c_estado' => '09',
            'c_oficina' => '01401',
            'c_CP' => '',
            'c_tipo_asenta' => '28',
            'c_mnpio' => '010',
            'id_asenta_cpcons' => '0082',
            'd_zona' => 'Urbano',
            'c_cve_ciudad' => '01',
        ]);

        $response = $this->getJson("/api/zip-codes/{$zipCode->id}");

        $response->assertStatus(200);
        $response->assertJson([
            "zip_code" => "01210",
            "locality" => "CIUDAD DE MEXICO",
            "federal_entity" => [
              "key" => 9,
              "name" => "CIUDAD DE MEXICO",
              "code" => null
            ],
            "settlements" => [
              [
                "key" => 82,
                "name" => "SANTA FE",
                "zone_type" => "URBANO",
                "settlement_type" => [
                  "name" => "Pueblo"
                ]
              ]
            ],
            "municipality" => [
              "key" => 10,
              "name" => "ALVARO OBREGON"
            ]
        ]);
    }
}
