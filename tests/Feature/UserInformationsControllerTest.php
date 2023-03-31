<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserInformationsControllerTest extends TestCase
{
    /**
    * testing route status
    */
    public function test_behaves_expected(): void
    {
        $data = [
            'name' => 'teste',
            'linkedin' => 'https://teste.com/teste',
            'github' => 'https://teste1.com/teste1'
        ];
        
        $response = $this->get('/user-informations', $data);
        
        $response->assertStatus(200);
    }
}
