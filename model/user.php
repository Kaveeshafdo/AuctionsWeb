<?php
class User
{
    private $id;
    private $username;
    private $email;
    private $password;
    private $dateOfBirth;
    private $telNo;
    private $gender;

    /**
     * @param $id
     * @param $username
     * @param $email
     * @param $password
     * @param $dateOfBirth
     * @param $telNo
     * @param $gender
     */
    public function __constructWithId($id, $username, $email, $password, $dateOfBirth, $telNo, $gender)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->dateOfBirth = $dateOfBirth;
        $this->telNo = $telNo;
        $this->gender = $gender;
    }

    /**
     * @param $username
     * @param $email
     * @param $password
     * @param $dateOfBirth
     * @param $telNo
     * @param $gender
     */
    public function __constructWithoutId($username, $email, $password, $dateOfBirth, $telNo, $gender)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->dateOfBirth = $dateOfBirth;
        $this->telNo = $telNo;
        $this->gender = $gender;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
     /**
     * @return mixed
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param mixed $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return mixed
     */
    public function getTelNo()
    {
        return $this->telNo;
    }

    /**
     * @param mixed $telNo
     */
    public function setTelNo($telNo)
    {
        $this->telNo = $telNo;
    }

    /**
     * @return mixed
     */
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
}