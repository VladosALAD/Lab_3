<?php

if (!isset($_SESSION["firstName"]) || !isset($_SESSION["lastName"]) || !isset($_SESSION["age"])) {
    http_response_code(401);
    echo "Unauthorized";
    return;
}

if (isset($_SESSION["Name"]) && isset($_SESSION["Surname"]) && isset($_SESSION["Age"])) {
    echo "I am {$_SESSION['Name']} {$_SESSION['Surname']}. I am {$_SESSION['Age']} y.o.";
}