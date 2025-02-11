<?php
//login user 

use cors\validationExceptions;
use Http\Forms\LoginForm;
use cors\Authentactor;
use cors\session;






$form = LoginForm::validate($attribute=
    [
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ]
);

$signIn = (new Authentactor)->attempt($attribute['email'], $attribute['password']);

if (!$signIn) {
    $form->error("email", "invalid semail or password")->throw();

}
redirect("/backendphp/public");






// return view("sessions/create.view.php", [
//     'errors' => $form->errors()
// ]);






