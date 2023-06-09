<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormQrcodeControllerTest extends TestCase
{
 
    /**
    * testing route status
    */
    public function test_behaves_expected_by_calling_the_welcome_route (): void
    {
        $response = $this->get('/');
        
        $response->assertStatus(200);
    }

    /**
    * testing route with correctly populated data
    */
    public function test_behaves_expected_data_types(): void
    {
        $data = [
            'name' => 'teste',
            'linkedin' => 'https://teste.com/teste',
            'github' => 'https://teste1.com/teste1'
        ];

        $response = $this->post('generate-qrcode', $data);

        $response->assertStatus(200);
    }
    
    /**
    * testing error when not entering mandatory data
    */
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
