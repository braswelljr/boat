<?php
/*
 *PDO database class
 * Connect to database
 * Create prepared statements
 * Bind values
 * Return rows and results
 */

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $password = DB_PASSWORD;
    private $dbname = DB_NAME;

    private $databasehandler;
    private $statement;
    private $error;

    public function __construct()
    {
        //set the Database Source Name(DSN)
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;

        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        );

        //set the PDO instance
        try {
            $pdo = new PDO($dsn, $this->user, $this->password, $options);
        } catch (PDOException $except) {
            $this->error = $except->getMessage();
            echo $this->error;
        }
    }

    //prepared statements with query
    public function query($sql)
    {
        $this->statement = $this->databasehandler->prepare($sql);
    }

    //Bind values
    public function bind($parameter, $value, $type = null)
    {
        if (isNull($type)) {
            switch (true) {
                case isInteger($value):
                    $type = PDO::PARAM_INT;
                    break;
                case isBool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case isNull($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->statement = bindValue($parameter, $value, $type);
    }

    //execute prepared statements
    public function execute()
    {
        return $this->statement->execute();
    }

    //fetching results as objects
    public function resultSet()
    {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }

    //fetch single record as an object
    public function single()
    {
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_OBJ);
    }

    //Get row count
    public function rowCount()
    {
        $this->execute();
        return $this->statement->rowCount();
    }
}
