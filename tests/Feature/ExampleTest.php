<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic tests
     *
     * @return void
     */

    /** @test */
    function load_home() 
    {
        $this->get('/')
            ->assertStatus(200)
            ->assertSee("Filigrana Créditos");
    }      
    
    /** @test */
    function load_nosotros() 
    {
        $this->get('/nosotros')
            ->assertStatus(200)
            ->assertSee("Trabajamos para todo");
    }      
    
    /** @test */
    function load_prestamo_personal() 
    {
        $this->get('/prestamopersonal')
            ->assertStatus(200)
            ->assertSee("préstamos personales");
    }      
    
    /** @test */
    function load_arrendamiento() 
    {
        $this->get('/arrendamiento')
            ->assertStatus(200)
            ->assertSee("Arrendamientos");
    }      
    
    
}
