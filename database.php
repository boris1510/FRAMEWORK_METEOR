<?php
/*
class Database

{

    private static $dbName = 'epiz_21673449_boris' ;

    private static $dbHost = sql206.epizy.com' ;

    private static $dbUsername = 'epiz_21673449';

    private static $dbUserPassword = 'dancer1510';

     

    private static $cont  = null;

     

    public function __construct() {

        die('Init function is not allowed');

    }

     

    public static function connect()

    {

       // One connection through whole application

       if ( null == self::$cont )

       {     

        try

        {

          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword); 

        }

        catch(PDOException $e)

        {

          die($e->getMessage()); 

        }

       }

       return self::$cont;

    }

     

    public static function disconnect()

    {

        self::$cont = null;

    }

}


*/


define ('db_host', "sql206.epizy.com");
define ('db_port', 3306);
define ('db_user', "epiz_21673449");
define ('db_pass', "dancer1510");
define ('db_base', "epiz_21673449_boris");


//Database CONNECT
function dbconnect()
{
	$dblink = mysqli_init();
	mysqli_real_connect($dblink, db_host, db_user, db_pass, db_base, db_port/*, "", MYSQLI_CLIENT_SSL*/)
	or die("Could not connect to. ".mysqli_error($dblink));
    
	return $dblink;
}

//Database DISCONNECT
function dbdisconnect($dblink)
{
	mysqli_close($dblink);
}

if (function_exists('mysqli_set_charset') === false) 
{
   function mysqli_set_charset($link_identifier = null, $charset)
   {
	   if ($link_identifier == null) {
		   return mysqli_query('SET CHARACTER SET "'.$charset.'"');
	   } else {
		   return mysqli_query('SET CHARACTER SET "'.$charset.'"', $link_identifier);
	   }
   }
}




?>



<?php

           /*include 'database.php';

           $pdo = Database::connect();

           $sql = 'SELECT * FROM customers ORDER BY id DESC';

           foreach ($pdo->query($sql) as $row) {

                    echo '<tr>';

                    echo '<td>'. $row['name'] . '</td>';

                  

                    echo '<td>'. $row['email'] . '</td>';

                    echo '<td>'. $row['mobile'] . '</td>';

                    echo '</tr>';

           }

           Database::disconnect();*/

?>