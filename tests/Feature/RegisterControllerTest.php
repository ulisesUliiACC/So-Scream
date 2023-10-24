<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use App\Models\User;


class RegisterControllerTest extends TestCase
{
    use RefreshDatabase; // Reinicia la base de datos para cada prueba
    use WithFaker; // Facilita la generación de datos ficticios

    public function testUserRegistration()
{
    $userData = [
        'name' => 'usuariotest', // Cambia el nombre a "usuariotest"
        'apellido_P' => 'ApellidoP', // Cambia el apellido paterno si es necesario
        'apellido_M' => 'ApellidoM', // Cambia el apellido materno si es necesario
        'email' => 'usuariotest@example.com', // Cambia el correo electrónico si es necesario
        'password' => 'password123', // Cambia la contraseña si es necesario
        'password_confirmation' => 'password123', // Confirma la contraseña
    ];

    $response = $this->post('/register', $userData); // Envía una solicitud POST para registrar un usuario
    $response->assertRedirect(); // Verifica que se redirija después del registro

    $this->assertDatabaseHas('users', [
        'email' => 'usuariotest@example.com', // Verifica que el correo electrónico del usuario sea el correcto
    ]); // Verifica que el usuario se haya registrado en la base de datos

    $this->assertTrue(Hash::check($userData['password'], User::where('email', 'usuariotest@example.com')->first()->password));
    // Verifica que la contraseña se haya almacenado de manera segura
}

}

