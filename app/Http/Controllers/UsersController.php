<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends ViewComposingController {

    public function userRegistrationPage() {
        return $this->buildTemplate('register');
    }

}
