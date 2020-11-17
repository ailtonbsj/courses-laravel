<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UsuarioController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->all();

        $validacao = Validator::make($data, [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string'
        ]);

        if ($validacao->fails()) {
            return $validacao->errors();
        }

        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            $user = auth()->user();
            $user->token = $user->createToken($data['email'])->accessToken;
            return $user;
        } else {
            return ['status' => false];
        }
    }

    public function cadastro(Request $request)
    {
        $data = $request->all();

        $validacao = Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed'
        ]);

        if ($validacao->fails()) {
            return $validacao->errors();
        }

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'image' => 'perfis/default.png'
        ]);
        $user->token = $user->createToken($data['email'])->accessToken;

        return $user;
    }

    public function update(Request $request)
    {
        $user = $request->user();
        $data = $request->all();

        if (isset($data['password'])) {
            $validacao = Validator::make($data, [
                'name' => 'required|string|max:255',
                'email' => [
                    'required', 'string', 'email', 'max:255',
                    Rule::unique('users')->ignore($user->id)
                ],
                'password' => 'required|string|min:6|confirmed'
            ]);

            if ($validacao->fails()) {
                return $validacao->errors();
            }

            $user->password = bcrypt($data['password']);
        } else {
            $validacao = Validator::make($data, [
                'name' => 'required|string|max:255',
                'email' => [
                    'required', 'string', 'email', 'max:255',
                    Rule::unique('users')->ignore($user->id)
                ]
            ]);

            if ($validacao->fails()) {
                return $validacao->errors();
            }
        }

        if (isset($data['image'])) {

            Validator::extend('base64image', function ($attribute, $value) {
                $explode = explode(',', $value);
                $allow = ['png', 'jpg', 'svg', 'jpeg'];
                $format = str_replace(['data:image/', ';', 'base64'], ['', '', ''], $explode[0]);
                // check file format
                if (!in_array($format, $allow)) {
                    return false;
                }
                // check base64 format
                if (!preg_match('%^[a-zA-Z0-9/+]*={0,2}$%', $explode[1])) {
                    return false;
                }
                return true;
            });

            $validacao = Validator::make($data, [
                'image' => 'base64image'
            ], ['base64image' => 'Imagem inválida']);

            if ($validacao->fails()) {
                return $validacao->errors();
            }

            $time = time();
            $diretorioPai = 'perfis';
            $diretorioImage = $diretorioPai . DIRECTORY_SEPARATOR . 'perfil' . $user->id;
            $ext = substr($data['image'], 11, strpos($data['image'], ';') - 11);
            $urlImage = $diretorioImage . DIRECTORY_SEPARATOR . $time . '.' . $ext;
            $file = str_replace('data:image/' . $ext . ';base64,', '', $data['image']);
            $file = base64_decode($file);

            if (isset($user->image) && file_exists($user->image)) {
                unlink($user->image);
            }
            if (!file_exists($diretorioPai)) {
                mkdir($diretorioPai, 0700);
            }
            if (!file_exists($diretorioImage)) {
                mkdir($diretorioImage, 0700);
            }

            file_put_contents($urlImage, $file);
            $user->image = $urlImage;
        }

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->save();

        $user->token = $user->createToken($user->email)->accessToken;

        return $user;
    }

    public function get (Request $request) {
        return $request->user();
    }
}
