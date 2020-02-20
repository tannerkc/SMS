<?php
$currentPage = "sendCode";
require '../includes/header.php';

use Twilio\Rest\Client;

        $_SESSION['code'] = $code = uniqid(); 

        $con->query("INSERT INTO verification(code) VALUES('$code')");


        $sid = $config['account_sid'];
        $token = $config['auth_token'];
        $twilio = new Client($sid, $token);

        $message = $twilio->messages
                        ->create("+19197693319", // to
                                array(
                                    "body" => $code,
                                    "from" => "+19518214609"
                                )
                        );
        echo "A verification code was sent to +1 919 769 3319";
?>

<p>Go <a href="verify.php">HERE</a> to verify your phone number.</p>
<?php
require '../includes/footer.php';
?>