<?php
class Administrator
{

    private $id;
    private $username;
    private $email;
    private $dateofbirth;
    private $teleNo;
    private $gender;
    private $password;

    public function __constructWithId($id, $username, $email, $dateofbirth, $teleNo, $gender, $password)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->dateofbirth = $dateofbirth;
        $this->teleNo = $teleNo;
        $this->gender = $gender;
        $this->password = $password;
    }

    public function __constructWithoutId($username, $email, $dateofbirth, $teleNo, $gender, $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->dateofbirth = $dateofbirth;
        $this->teleNo = $teleNo;
        $this->gender = $gender;
        $this->password = $password;
    }

    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }




    public function getusername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setusername($username)
    {
        $this->username = $username;
    }



    public function getdateofbirth()
    {
        return $this->dateofbirth;
    }

    /**
     * @param mixed $$dateofbirth
     */
    public function setdateofbirth($dateofbirth)
    {
        $this->dateofbirth = $dateofbirth;
    }


    public function getteleNo()
    {
        return $this->teleNo;
    }

    /**
     * @param mixed $teleNo
     */
    public function setteleNo($teleNo)
    {
        $this->teleNo = $teleNo;
    }



    public function getgender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setgender($gender)
    {
        $this->gender = $gender;
    }


    public function getpassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $gender
     */
    public function setpassword($password)
    {
        $this->password = $password;
    }
}
