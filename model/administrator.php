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




    public function getUserName()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUserName($username)

    {
        $this->username = $username;
    }



    public function getDateOfBirth()
    {
        return $this->dateofbirth;
    }

    /**
     * @param mixed $dateofbirth
     */
    public function setDateOfBirth($dateofbirth)
    {
        $this->dateofbirth = $dateofbirth;
    }


    public function getTeleNo()
    {
        return $this->teleNo;
    }

    /**
     * @param mixed $teleNo
     */
    public function setTeleNo($teleNo)
    {
        $this->teleNo = $teleNo;
    }



    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }


    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $gender
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
}
