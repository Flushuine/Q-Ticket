<?php 

define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "q-ticket");
define("DB_HOST", "localhost");

try
{
    $conn = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME, DB_USER, DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "koneksi berhasil";
}
catch (PDOException $e)
{
    echo $e->getMessage();
}


//functions
function validateDate($date, $format = 'Y-m-d')
{
    $d = DateTime::createFromFormat($format, $date);

    return $d && $d->format($format) === $date;
}

//functions sql

function save($email, $password, $fullname, $address, $gender, $birth_date, $phone_number)
{
    global $conn;

    $sql = "INSERT INTO users (email, password, fullname, address, gender, birth_date, phone_number)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(1, $email);
    $stmt->bindParam(2, $password);
    $stmt->bindParam(3, $fullname);
    $stmt->bindParam(4, $address);
    $stmt->bindParam(5, $gender);
    $stmt->bindParam(6, $birth_date);
    $stmt->bindParam(7, $phone_number);

    $stmt->execute();

    return true;
}

function login($email)
{
    global $conn;

    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(":email" => $email));
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
}