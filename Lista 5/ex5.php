<?php 

    $text = $_POST['txtArea'];
    $words = explode(" ", $text);

    for ($i=0; $i<count($words); $i++){
    echo "<table border='1'>
            <tr>
            <td> $i </td>
            <td> $words[$i] </td>
            </tr></table>";
    }

    echo "<br><br>";

    sort($words);
    for ($i=0; $i<count($words); $i++){
        echo "<table border='1'>
            <tr>
            <td> $i </td>
            <td> $words[$i] </td>
            </tr></table>";

    }

    echo "<br><br>";

    for ($i=0; $i<count($words); $i++){
        echo "<table border='1'>
            <tr>
            <td> $i </td>
            <td> ".strtoupper($words[$i]). " </td>
            </tr></table>";
    }

?> 