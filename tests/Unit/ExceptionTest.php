<?php
use App\Models\User;
use PHPUnit\Framework\TestCase;
class UsuarioTest extends TestCase {
    public function testCriacaoUsuario() {
        $usuario = new User(["Bruno", "bruno@teste.com"]);
        $this->assertEquals("Bruno", $usuario->getNome());
        $this->assertEquals("bruno@teste.com", $usuario->getEmail());
    }
}
