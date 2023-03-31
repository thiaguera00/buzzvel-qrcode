<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormQrcodeControllerTest extends TestCase
{
 
    public function test_behaves_expected_by_calling_the_welcome_route (): void
    {
        $response = $this->get('/');
        
        $response->assertStatus(200);
    }

    public function test_behaves_expected_data_types(): void
    {
        $data = [
            'name' => 'teste',
            'linkedin' => 'https://teste.com/teste',
            'github' => 'https://teste1.com/teste1'
        ];

        $response = $this->post('generate-qrcode', $data);
        // dd($response);
        $response->assertStatus(200);
    }

    public function test_behaves_expected_data_type_null_arguments()
    {
        $data = [
            'name' => 'teste',
            'linkedin' => 'https://teste.com/teste',
        ];

        $response = $this->post('generate-qrcode', $data);

        $response->assertStatus(302);
    }
}
