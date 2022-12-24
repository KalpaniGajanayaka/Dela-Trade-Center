<?php
    include 'components/connect.php';
    session_start();
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    }else{
        $user_id = '';
    };

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_STRING);
        $number = $_POST['number'];
        $number = filter_var($number, FILTER_SANITIZE_STRING);
        $subject = $_POST['subject'];
        $subject = filter_var($subject, FILTER_SANITIZE_STRING);
        $msg = $_POST['msg'];
        $msg = filter_var($msg, FILTER_SANITIZE_STRING);

        $select_message = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND subject = ? AND message = ?");
        $select_message->execute([$name, $email, $number, $subject, $msg]);

        if($select_message->rowCount() > 0){
            $message[] = 'already sent message!';
        }else{

            $insert_message = $conn->prepare("INSERT INTO `messages`(user_id, name, email, number, subject, message) VALUES(?,?,?,?,?,?)");
            $insert_message->execute([$user_id, $name, $email, $number, $subject, $msg]);

            $message[] = 'sent message successfully!';

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dela Trade center</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>
<!-- contact section starts  -->
<section class="contact" id="contact">
    <h1 class="heading"> <span>contact</span> us </h1>
    <div class="icons-container">
        <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3>address</h3>
            <p>Weddagala Road,Kalawana,Ratnapura,Sri Lanka</p>
        </div>
        <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3>email</h3>
            <p>delafoodcity@gmail.com</p>
        </div>
        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>phone</h3>
            <p>+94 76 774 6778</p>
            <p>+94 45 225 6770</p>
    
        </div>
    </div>
    <div class="row">
        <form action="" method="POST">
            <h3>Always touch with us...</h3>
            <div class="inputBox">
                <input type="text" name="name" placeholder="your name" required maxlength="20" class="box">
                <input type="email" name="email" placeholder="your email" required maxlength="50" class="box">
            </div>
            <div class="inputBox">
                <input type="number" name="number" min="0" max="9999999999" placeholder="enter your number" required onkeypress="if(this.value.length == 10) return false;" class="box">
                <input type="text" name="subject" placeholder="your subject" class="box">
            </div>
            <textarea name="msg" placeholder="your message" cols="30" rows="10" class="box"></textarea>
            <input type="submit" value="send message" name="send" class="btn">
        </form>
        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=dela food city kalawana&amp;t=k&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://embedmapgenerator.com">embed code google maps</a></div><style>.mapouter{position:relative;text-align:right;width:600px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:600px!important;height:400px!important;}</style></div>
</section>

<!-- contact section ends -->
<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>