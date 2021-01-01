<?php

class Auth
{
    public static function validateRegisterForm(array $form): array
    {
        $requiredFields = [
            'username' => 'nome usuário', 
            'password' => 'senha', 
            'password_confirm' => 'confirmar senha', 
            'email' => 'e-mail',
        ];
        
        $errors = [];
        foreach ($requiredFields as $field => $name) {
            if (!isset($form[$field]) || empty($form[$field])) {
                $errors[$field] = "O campo \"$name\" é obrigatório";
            }
        }

        if (count($errors) >= 1) {
            return $errors;
        }

        if ($form['password'] !== $form['password_confirm']) {
            $errors = [
                'password' => 'As senhas não coincidem',
                'password_confirm' => 'As senhas não coincidem',
            ];
        }

        if (User::count(["username" => $form['username']])) {
            $errors['username'] = 'Esse nome de usuário já está em uso';
        }

        if (User::count(["email" => $form['email']])) {
            $errors['email'] = 'Esse e-mail já está em uso';
        }

        return $errors;
    }

    public static function login($form)
    {
        $requiredFields = [
            'password' => 'senha', 
            'email' => 'e-mail',
        ];
        
        $errors = [];
        foreach ($requiredFields as $field => $name) {
            if (!isset($form[$field]) || empty($form[$field])) {
                $errors[$field] = "O campo \"$name\" é obrigatório";
            }
        }
        
        if (count($errors) >= 1) {
            return $errors;
        }
        
        $user = User::one(['email' => $form['email']]);
        if (count($user->getValues())) {
            if (!password_verify($form['password'], $user->password)) {
                $errors['password'] = 'Senha incorreta';
            } else {
                $_SESSION['user'] = serialize($user);
            }
        } else {
            $errors['email'] = 'E-mail não cadastrado';
        }

        return $errors;

    }

}