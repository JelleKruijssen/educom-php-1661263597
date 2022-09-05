<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPMySQL</title>
</head>
<body>
    <?php

    echo "<table style='broder: solid 1px black;'>";
    echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

    class TableRows extends RecursiveIteratorIterator {
        function __construct($it) {
            parent::__construct($it, self::LEAVES_ONLY);
        }

        function current() {
            return "<td style='width:150px;border:1px solid black;'>" . parent::current() . "</td>";
        }

        function beginChilderen() {
            echo "<tr>";
        }

        function endChilderen() {
            echo "</tr>" . "/n";
        }

    }

    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "myDBPDO";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribure(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname");
        $stmt->execute();

        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
            echo $v;
        }
    } catch(PDOExeption $e) {
        echo "Error: " . $e->getMessage();
    } 

    $conn = null;
    echo "</table>"
    ?>

    <?php

    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "myDBPDO";

    try{ 
        $conn = new PDO("mysql:$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM MyGuests LIMIT 1";
        $sql = "DELETE FROM MyGuests WHERE id=3";
        $sql = "UPDATE MyGuests SET 'Doe' WHERE id =2";

        $conn->exec($sql);
        echo "Record deleted successfully";
    } catch(PDOException $e) {
        echo $sql . "<br/>" . $e->getMessage();
    }

    $conn =  null;

    ?>
</body>
</html>