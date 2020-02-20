<?php
$currentPage = "home";
require '../includes/header.php';

use Twilio\Rest\Client;


if(isset($_POST['submit'])){
    if(isset($_POST['number']) && isset($_POST['message'])){

        $sid = $config['account_sid'];
        $token = $config['auth_token'];
        $twilio = new Client($sid, $token);

        $message = $twilio->messages
                        ->create("+1".$_POST['number'], // to
                                array(
                                    "body" => $_POST['message'],
                                    "from" => "+19518214609"
                                )
                        );

        echo "<h3 class='text-center bg-success'>SMS Sent</h3>";
        
    }
}
?>



<div class="col-sm-6 col-sm-offset-3">


    <form role="form" method="post">
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <div class="phoneNumberContainer">
                <span id="countryCode">+1</span>
                <input name="number" type="tel" class="form-control" id="phone" required placeholder="US numbers only">
            </div>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </div>

        <input name="submit" type="submit" class="btn btn-primary btn-block" value="Send Message">
    </form>


</div>

<?php
require '../includes/footer.php';
?>