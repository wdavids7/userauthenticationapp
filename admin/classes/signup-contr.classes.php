<?php

class SignupContr extends Signup
{

    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdRepeat, $email)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }

    public function signupUser()
    {
        if ($this->emptyInput() == false) {
            // echo "Empty input!";
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if ($this->invalidUid() == false) {
            // echo "Invalid username!";
            header("location: ../index.php?error=username");
            exit();
        }
        if ($this->invalidEmail() == false) {
            // echo "Invalid email!";
            header("location: ../index.php?error=email");
            exit();
        }
        if ($this->pwdMatch() == false) {
            // echo "Passwords don't match!";
            header("location: ../index.php?error=passwordmatch");
            exit();
        }
        if ($this->uidTakenCheck() == false) {
            // echo "Username or email taken!";
            header("location: ../index.php?error=usernameoremailtaken");
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
    }

    private function emptyInput()
    {
        '$result';
        if (empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    // CHECKING IF THE USER NAME IS A VALID USER NAME TYPE
    private function invalidUid()
    {
        '$result';
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) { //Checking a string for particular set of characters
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    // VERIFY EMAIL ADDRESS
    private function invalidEmail()
    {
        '$result';
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    // CHECKING IF PASSWORD MATCHES PASSWORD REPEAT
    private function pwdMatch()
    {
        '$result';
        if ($this->pwd !== $this->pwdRepeat) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    // CHECKING IF THE EMAIL OR USER NAME IS UNIQUE AND NOT ALREADY TAKEN
    private function uidTakenCheck()
    {
        '$result';
        if (!$this->checkUser($this->uid, $this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
