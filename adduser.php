<?php
    print_r($_POST);
    include_once("connection.php");
    $username = "bob";
    $role = 1;

    $stmt1 = $conn->prepare("
    INSERT INTO tbleusers
    (UserID, Username, Surname, Forename, Password, Year, Balance, Role)
    VALUES
    (NULL, :Username, :Surname, :Forename, :Password, :Year, :Balance, Role)
    ");
    $stmt1->bindParam(":Username", $username);
    $stmt1->bindParam(":Surname", $_POST["Surname"]);
    $stmt1->bindParam(":Forename", $username);
    $stmt1->bindParam(":Password", $username);
    $stmt1->bindParam(":Year", $username);
    $stmt1->bindParam(":Balance", $username);
    $stmt1->bindParam(":Role", $username);
    $stmt1->execute();
?>