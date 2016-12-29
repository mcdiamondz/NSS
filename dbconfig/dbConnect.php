<?php

    class Database{
      public $connect = NULL;
      public $row = NULL;



        public function __construct($dbaccount)
        {
          try{

              require('dbConfig.php');

              $this->connect = '';

              // $dsn = 'mysql:host='.DB_HOST_ADDRESS.';dbname='.DB_CONNECT;
              // $dbuser = DB_USERNAME;
              // $dbpass = DB_PASSWORD;


              $this->connect = new PDO($dsn, $dbuser, $dbpass);
              // $this->connect = new PDO($dsn, $dbuser, $dbpass);
              $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $this->connect->exec("SET CHARACTER SET utf8");
            }

            catch (PDOException $e) {
                // TODO: Handling.
                echo "Database connectoion Error :" . $e->getMessage();
            }
        }

      public function select_query($selectquery, $selectvalue = array()){
        try{
            $select = "$selectquery";
            $stmt = $this->connect->prepare($select);
            $stmt->execute($selectvalue);
            $this->row = $stmt->rowCount();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
          $this->connect = null;
        }
        catch (PDOException $e) {
            // TODO: Handling.
            echo "select connection Error : " . $e->getMessage();
        }
      }


      public function select($selectquery){
        try{
            $select = $selectquery;
            $stmt = $this->connect->prepare($select);
            $stmt->execute();
            $this->row = $stmt->rowCount();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
          $this->connect = null;
        }
        catch (PDOException $e) {
            // TODO: Handling.
            echo "select Error : " . $e->getMessage();
        }
      }



      public function insert_query($insertquery, $insertvalue = array()){
        try{
            $insert = $insertquery;
            $stmt = $this->connect->prepare($insert);
            $result = $stmt->execute($insertvalue);
            return $result;
            $this->connect = null;
          }
        catch (PDOException $e) {
            // TODO: Handling.
            echo "insert Error : " . $e->getMessage();
        }
      }

      public function delete_query($deletequery, $deletevalue = array()){
        try{
            $delete = $deletequery;
            $stmt = $this->connect->prepare($delete);
            $result = $stmt->execute($deletevalue);
            return $result;
            $this->connect = null;
        }
        catch (PDOException $e) {
            // TODO: Handling.
            // echo "delete Error : " . $e->getMessage();
        }
      }

      public function delete($deletequery){
        try{
            $delete = $deletequery;
            $stmt = $this->connect->prepare($delete);
            $stmt->execute();
            $this->connect = null;
        }
        catch (PDOException $e) {
            // TODO: Handling.
            echo "delete Error : " . $e->getMessage();
        }
      }

       public function update_query($updatequery, $updatevalue = array()){
         try{
             $update = $updatequery;
             $stmt = $this->connect->prepare($update);
             $result = $stmt->execute($updatevalue);
             $this->row = $stmt->rowCount();
             return $result;
             $this->connect = null;
         }
         catch (PDOException $e) {
             // TODO: Handling.
            //  echo "update Error : " . $e->getMessage();
         }
       }

       public function update($updatequery){
         try{
             $update = $updatequery;
             $stmt = $this->connect->prepare($update);
             $stmt->execute();
             $this->row = $stmt->rowCount();
             $this->connect = null;
         }
         catch (PDOException $e) {
             // TODO: Handling
            //  echo "update Error : " . $e->getMessage();
         }
       }

       public function start_session()
       {
         $sessionanme = 'sec_session_name';
         session_name($sessionanme);
         session_start();
       }
    }
?>
