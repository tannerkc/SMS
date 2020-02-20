<?php
header("content-type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>

<?php
    // Check accounts database for number that replied, get the users name and reply with person message.

    $people = array(
        '+19197693319' => 'Tanner Cottle',
        '+16455767473' => 'John Smith',
    );

    if($name != $people[$_REQUEST['From']]){
        $name = "nobody";
    }
?>

<Response>
    <Sms>
    <?php 
    if ($name == "nobody"){
        echo "Your number is not in our records. Please goto www.example.com to create an account or verify your number.";
    }
    else{
        echo "Hello " . $name . ", How are you today?<br><br>Here are some actions I can help you with:<br><br> Check username (username)<br> Check email (email)";
    }
    ?>
    </Sms>
</Response>