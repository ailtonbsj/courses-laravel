<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('admin')
        ];
        $user = User::where('email', '=', $dados['email']);
        if ($user->count()){
           $usuario = $user->first();
           $usuario->update($dados);
           echo "Usuario alterado!\n";
        } else {
            User::create($dados);
            echo "Usuario criado!\n";
        }
    }
}
