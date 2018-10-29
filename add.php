<h1>Add Blog Post</h1>
<?php
include "options.php";
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

<?php
include "options.php";
if (!$useBBCode) { exit(); } ?>
<b>BBCode Reference:</b><br>
[b]: Font style bold - [b]Hello world[/b]<br>
[i]: Font style italic - [i]Hello world[/i]<br>
[s]: Font style struck through - [s]Hello world[/s]<br>
[u]: Font style underlined - [u]Hello world[/u]<br>
[code]: Code - [code]Hello world[/code]<br>
[email]: Email (clickable) - [email]test@example.com[/email]<br>
[url]: URL (clickable) - [url=http://example.com]Example.com[/url]<br>
[img]: Image (not clickable) - [img]http://example.com/example.png[/img]<br>
[quote]: Quote - [quote]Hello world[/quote]<br>
[youtube]: Embedded YouTube video - [youtube]a-video-id-123456[/youtube]<br>
[font]: Font (name) - [font=Arial]Hello world![/font]<br>
[size]: Font size - [size=12]Hello world![/size]<br>
[color]: Font color - [color=red]Hello world![/color]<br>
[left]: Text-align: left - [left]Hello world[/left]<br>
[center]: Text-align: center - [center]Hello world[/center]<br>
[right]: Text-align: right - [right]Hello world[/right]<br>
[spoiler]: Spoiler (pure HTML code that needs JavaScript code to add behaviour) - [spoiler]Hello world[/spoiler]<br>
