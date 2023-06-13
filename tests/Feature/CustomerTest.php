<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerTest extends TestCase
{
   /** @test */
   public function only_logged_can_see_treinamentos_list()
   {
       $response = $this->get('/')
           ->assertRedirect('/login');

   }

   /** @test */

   public function only_logged_can_see_create_treinamentos_page()
   {
       $response = $this->get('/treinamentos/criar')
           ->assertRedirect('/login');

   }

   /** @test */

   public function only_logged_can_see_vagas_page()
   {
       $response = $this->get('/vagas')
           ->assertRedirect('/login');

   }

   /** @test */

   public function only_logged_can_see_create_vagas_page()
   {
       $response = $this->get('/vagas/criar')
           ->assertRedirect('/login');

   }

   /** @test */

   public function only_logged_can_see_dashboard_page()
   {
       $response = $this->get('/dashboard')
           ->assertRedirect('/login');

   }
   
}
