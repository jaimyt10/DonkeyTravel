<?php
require_once "dbConnect.php";
class Accounts
{
    public $id;
    public $fullname;
    public $birthday;
    public $password;
    public $mail;
    


    function __construct($fullname = null, $birthday = null, $password = null, $mail = null)
    {
        $this->fullname = $fullname;
        $this->birthday = $birthday;
        $this->password = $password;
        $this->mail = $mail;
      


    }

    public function Create()
    {


        global $conn;
        $query = $conn->prepare("INSERT INTO accounts (fullname,birthday, password, mail) VALUES (:fullname,:birthday, :password, :mail)");
        $query->bindParam(":fullname", $this->fullname);
        $query->bindParam(":birthday", $this->birthday);
        $query->bindParam(":password", $this->password);
        $query->bindParam(":mail", $this->mail);
      
        $query->execute();
    }

    public function Delete($id)
    {
        global $conn;
        $sql = "DELETE FROM accounts WHERE id=$id";
        $query = $conn->prepare($sql);
        $query->execute();

    }



        public function Update(){
            global $conn;
            $query = $conn->prepare("UPDATE accounts SET fullname=:fullname, birthday=:birthday, password=:password, mail=:mail WHERE id=:id");
            $query->bindParam(":fullname", $this->fullname);
            $query->bindParam(":birthday", $this->birthday);
            $query->bindParam(":password", $this->password);
            $query->bindParam(":mail", $this->mail);
            $query->bindParam(":adres", $this->adres);
            $query->execute();

        }

    public function Read() {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM accounts");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    public function Search(){
        global $conn;

        $id = $_POST["id"];


        $stmt = $conn->prepare("SELECT * FROM accounts WHERE id = :id");

        $stmt->bindParam(":id", $id);

        $stmt->execute();

         $result = $stmt->fetch(PDO::FETCH_ASSOC);

         $_SESSION['result'] = $result;

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
    public function getfullname()
    {
        return $this->fullname;
    }

    /**
     * @param mixed $fullname
     */
    public function setfullname($fullname)
    {
        $this->fullname = $fullname;
    }

    /**
     * @return mixed
     */
    public function getbirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setbirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getpassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setpassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getmail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setmail($mail)
    {
        $this->mail = $mail;
    }

 /**
     * @return mixed
     */
    public function getadres()
    {
        return $this->adres;
    }

 /**
     * @param mixed $mail
     */
    public function setadres($adres)
    {
        $this->adres = $adres;
    }

}