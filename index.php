<?php
$text = "The first dynamic text issued by PHP" . "<br>";
class Bot
{
    public $track = "Tracking";
    public $found = "Have been located ";
    public $missing = "Unable to be located ";

    function bot_details(){
        return "This bot is capable of " . $this->track . " You, so you
         better hope you are " . $this->missing . ". Oops! Too late " 
         , $this->found . "<br>";
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