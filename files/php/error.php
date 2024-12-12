<?php
if (isset($_GET["error"])){
    $error = $_GET["error"];

    if ($error == "400"){
        echo <<<EOT
        <h1 style="text-align: center; font-size: 72px; padding: 100px;">
            error: $error ! Bad request...
        </h1>
        EOT;
    }
    if ($error == "401"){
        echo <<<EOT
        <h1 style="text-align: center; font-size: 72px; padding: 100px;">
            error: $error ! Unauthorized...
        </h1>
        EOT;
    }
    if ($error == "403"){
        echo <<<EOT
        <h1 style="text-align: center; font-size: 72px; padding: 100px;">
            error: $error ! Forbidden...
        </h1>
        EOT;
    }
    if ($error == "404"){
        echo <<<EOT
        <h1 style="text-align: center; font-size: 72px; padding: 100px;">
            error: $error ! Page not found...
        </h1>
        EOT;
    }
    if ($error == "503"){
        echo <<<EOT
        <h1 style="text-align: center; font-size: 72px; padding: 100px;">
            error: $error ! Service Unavailable...
        </h1>
        EOT;
    }
}
else {
    echo <<<EOT
    <h1 style="text-align: center; font-size: 72px; padding: 100px;">
        error: 404 ! Page not found...
    </h1>
    EOT;
}
?>