<h1>Add Blog Post</h1>
<?php
include "options.php";
if (strcmp($_SERVER["PHP_AUTH_USER"], $adminUser) != 0 && strcmp($_SERVER["PHP_AUTH_PW"], $adminPassword) != 0) {
    header('WWW-Authenticate: Basic realm="darkblog"');
    header("HTTP/1.0 401 Unauthorized");
    die("Unauthorized.");
}

if (isset($_GET["submit"])) {
    file_put_contents("posts/" . $_GET["filename"] . ".html", $_GET["content"]);
    header("Location: index.php");
}
?>
<form action="add.php" method="get">
    Filename (sans. html):<input type="text" size="30" name="filename"><br>
    Content:<br>
    <textarea name="content" size="30">
    </textarea><br>
    <input type="submit" name="submit">
</form>
