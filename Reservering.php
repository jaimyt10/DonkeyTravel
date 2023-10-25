<?php
require_once "dbConnect.php";
class Reservering
{
    public $reser_id;
    public $reser_naam;
    public $reser_datum_tijd;
    public $reser_datum_tijd_aan;
    public $reser_type;


    function __construct($reser_naam = null, $reser_datum_tijd = null, $reser_datum_tijd_aan = null, $reser_type = null)
    {
        $this->reser_naam = $reser_naam;
        $this->reser_datum_tijd = $reser_datum_tijd;
        $this->reser_datum_tijd_aan = $reser_datum_tijd_aan;
        $this->reser_type = $reser_type;



    }

    public function Create()
    {


        global $conn;
        $query = $conn->prepare("INSERT INTO reserveringen (reser_naam,reser_datum_tijd, reser_datum_tijd_aan, reser_type) VALUES (:reser_naam,:reser_datum_tijd, :reser_datum_tijd_aan, :reser_type)");
        $query->bindParam(":reser_naam", $this->reser_naam);
        $query->bindParam(":reser_datum_tijd", $this->reser_datum_tijd);
        $query->bindParam(":reser_datum_tijd_aan", $this->reser_datum_tijd_aan);
        $query->bindParam(":reser_type", $this->reser_type);
        $query->execute();
    }

    public function Delete($reser_id)
    {
        global $conn;
        $sql = "DELETE FROM reserveringen WHERE reser_id=$reser_id";
        $query = $conn->prepare($sql);
        $query->execute();

    }



        public function Update(){
            global $conn;
            $query = $conn->prepare("UPDATE reserveringen SET reser_naam=:reser_naam, reser_datum_tijd=:reser_datum_tijd, reser_datum_tijd_aan=:reser_datum_tijd_aan, reser_type=:reser_type WHERE reser_id=:reser_id");
            $query->bindParam(":reser_naam", $this->reser_naam);
            $query->bindParam(":reser_datum_tijd", $this->reser_datum_tijd);
            $query->bindParam(":reser_datum_tijd_aan", $this->reser_datum_tijd_aan);
            $query->bindParam(":reser_type", $this->reser_type);

            $query->execute();

        }

    public function Read() {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM reserveringen");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    public function Search(){
        global $conn;

        $reser_id = $_POST["reser_id"];


        $stmt = $conn->prepare("SELECT * FROM reserveringen WHERE reser_id = :reser_id");

        $stmt->bindParam(":reser_id", $reser_id);

        $stmt->execute();

         $result = $stmt->fetch(PDO::FETCH_ASSOC);

         $_SESSION['result'] = $result;

    }


    /**
     * @return mixed
     */
    public function getReser_id()
    {
        return $this->reser_id;
    }

    /**
     * @param mixed $reser_id
     */
    public function setReser_id($reser_id)
    {
        $this->reser_id = $reser_id;
    }

    /**
     * @return mixed
     */
    public function getreser_naam()
    {
        return $this->reser_naam;
    }

    /**
     * @param mixed $reser_naam
     */
    public function setreser_naam($reser_naam)
    {
        $this->reser_naam = $reser_naam;
    }

    /**
     * @return mixed
     */
    public function getreser_datum_tijd()
    {
        return $this->reser_datum_tijd;
    }

    /**
     * @param mixed $reser_datum_tijd
     */
    public function setreser_datum_tijd($reser_datum_tijd)
    {
        $this->reser_datum_tijd = $reser_datum_tijd;
    }

    /**
     * @return mixed
     */
    public function getreser_datum_tijd_aan()
    {
        return $this->reser_datum_tijd_aan;
    }

    /**
     * @param mixed $reser_datum_tijd_aan
     */
    public function setreser_datum_tijd_aan($reser_datum_tijd_aan)
    {
        $this->reser_datum_tijd_aan = $reser_datum_tijd_aan;
    }

    /**
     * @return mixed
     */
    public function getreser_type()
    {
        return $this->reser_type;
    }

    /**
     * @param mixed $reser_type
     */
    public function setreser_type($reser_type)
    {
        $this->reser_type = $reser_type;
    }




}