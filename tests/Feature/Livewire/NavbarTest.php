<?php

namespace Tests\Feature\Livewire;

use App\Models\User;
use Livewire\Livewire;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class NavbarTest extends TestCase
{
    public function testLogoutRedirectsToLoginPage()
    {
        $user = User::factory()->create([
            'phone' => '1234567890',
        ]);

        $this->actingAs($user);

        $component = Livewire::test('App\Livewire\Layouts\Navbar')
            ->call('logout'); 
        
        $component->assertRedirect(route('login')); 
        
        $this->assertGuest(); 
    }

    public function testUserIsDisplayedInNavbar()
{
    $user = User::factory()->create();

    $this->actingAs($user);

    $component = Livewire::test('App\Livewire\Layouts\Navbar')
        ->assertSee($user->name); 
}

}
