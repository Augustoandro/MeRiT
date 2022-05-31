<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>S3 Configuration</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
	<script type="text/javascript" src="../jquery.min.js"></script>
	<script type="text/javascript" src="../bootstrap.min.js"></script>
    </head>
    <body>
        <div class="row">
            <div class="container-fluid">
                <center>
                    <h2>S3 Configuration</h2>
                <div>
                    <center>
                        <p>
                            On this page you can enter your S3 instance details where the files have been stored.
                        </p>
                    </center>
                </div>
                <div>
                    <h4>Update your S3 instance details here</h4>
                    <form method="post" action="s3_config.php">
                        <input type="text" name="s3_access_key_id" placeholder="Access Key ID"><br><br>
                        <input type="text" name="s3_sec_access_key" placeholder="Secret Access Key"><br><br>
                        <input type="text" name="s3_bucket_name" placeholder="Bucket Name"><br><br>
                        <input type="submit" name="s3_update_btn" value="Submit"><br><br><br><br>
                    </form>
                        <?php
                        if(isset($_POST['s3_update_btn'])){
                            $access_key_id = $_POST['s3_access_key_id'];
                            $secret_key = $_POST['s3_sec_access_key'];
                            $bucket_name = $_POST['s3_bucket_name'];
                            $sql1 = "UPDATE `s3config` SET `access_key_id` = '$access_key_id', `secret_key` = '$secret_key', `bucket_name` = '$bucket_name' WHERE `s3config`.`email` = `$login_user`";
                            $rs1 = mysqli_query($db,$sql1);
                        }
                        ?>
                </div>
                <div>
                    <h4>Update the hashes of your files by clicking on the button for faster detection</h4>
                              <form method="post" action="s3_hash_update.php">
              <input type="hidden" name="email" value="">
                        <input type="submit" name="s3_hash_update_btn" value="Update S3 Files Hash">
                    </form>
                    <?php
                    if(isset($_POST['s3_hash_update_btn'])){
                        
                    }
                    ?>
                </div>
                    </center>
            </div>
        </div>
        
    </body>
</html>
