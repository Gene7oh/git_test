<?php
$text = "The first dynamic text issued by PHP" . "<br>";
class Bot
{
    var $track = "Tracking" . "<br>";
    var $found = "Have been located " . "<br>";
    var $missing = "Unable to located " . "<br>";

    function bot_details(){
        return "This app is " . $this->track . " you, so be careful. 
        You will find you " . $this->found . " and ideally you should be " 
        . $this->missing . "!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home git_test</title>
</head>
<body>
    <div class="container">
        <div class="row">
        <h1>Odin Project<small>Test Git</small></h1>
            <div class="col-8">
            <?php
            echo $text;
            $bot = new Bot();
            echo $bot->bot_details();
            ?>
            </div>
            <div class="col-4">
            side bar col
            </div>
        </div>
    </div>
</body>
</html>