<?php

/**
 * Created by PhpStorm.
 * User: gusta
 * Date: 18/07/2016
 * Time: 15:07
 */
class usuario
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $db = $database->dbConnection();
        $this->conn = $db;
    }

    public function runQuery($sql)
    {
        $stmt = $this->conn->prepare($sql);
        return $stmt;
    }

    public function registrar($nome,$email,$senha)
    {
        try
        {
            $novasenha = password_hash($senha, PASSWORD_DEFAULT);

            $stmt = $this->conn->prepare("INSERT INTO usuario(user_name,user_email,user_senha) 
                                                   VALUES(:nome, :email, :senha)");

            $stmt->bindparam(":nome", $nome);
            $stmt->bindparam(":email", $email);
            $stmt->bindparam(":senha", $novasenha);

            $stmt->execute();

            return $stmt;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function logar($nome,$email,$senha)
    {
        try
        {
            $stmt = $this->conn->prepare("SELECT * FROM usuario WHERE user_name=:nome OR user_email=:email");
            $stmt->execute(array(':nome'=>$nome, ':email'=>$email));
            $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
            if($stmt->rowCount() == 1)
            {
                if(password_verify($senha, $userRow['user_senha']))
                {
                    $_SESSION['user_session'] = $userRow['user_id'];
                    return true;
                }
                else
                {
                    return false;
                }
            }
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function logado()
    {
        if(isset($_SESSION['user_session']))
        {
            return true;
        }
    }

    public function redireciona($url)
    {
        header("Location: $url");
    }

    public function logout()
    {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
    }

}