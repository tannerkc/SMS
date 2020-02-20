<?php
$currentPage = "verify";
require '../includes/header.php';


    if(isset($_POST['submit'])){

        if(isset($_POST['code'])){
            $code = $_SESSION['code'];

            $res = $con->query("SELECT * FROM verification WHERE code = '{$code}'");
            $row = $res->fetch_assoc();

            if(trim($_POST['code']) == $row['code']){
                $con->query("DELETE FROM verification WHERE code='{$code}'");
                header("Location: success.php");
            }
            else{
                echo "
                <div class='row'>
                <h3 class='bg-danger text-center'>Wrong code, please try again</h3>
                </div>
                ";
            }
        }

    }
?>

<div class="row">
    <div class="col-sm-6 col-sm-offset-3">
    <form role="form" method="POST">
        <div class="form-group">
            <input name="code" type="text" class="form-control" id="code" placeholder="Verify Code">
        </div>
        <input name="submit" type="submit" class="btn btn-primary btn-block" value="Enter">
    </form>
    </div>
</div>

<?php
require '../includes/footer.php';
?>