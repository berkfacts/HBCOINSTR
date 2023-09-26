<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Form</title>
    <link rel="stylesheet" href="stylee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="js/tawk-to.js"></script>
</head>
<body>
    <input type="checkbox" id="toggle">
    <label for="toggle" class="show-btn">Show Modal</label>
    <div class="wrapper">
        <label for="toggle" class="cancel-btn"><i class="fas fa-times"></i></label>
        <div class="icon"><i class='far fa-envelope' ></i></div>
        <div class="content">
            <header>Abone Ol</header> 
            <p>Bloğumuza abone olun ve <br> en son güncellemeleri doğrudan gelen kutunuza alın </p>
        </div>
        <form action="abone.php" method="POST">
            <?php
            $userEmail = "";
            if(isset($_POST['subscribe'])){ 
                $userEmail = $_POST['email']; 
                if(filter_var($userEmail,FILTER_VALIDATE_EMAIL)){ 
                    
                    $subject = "Bize abone olduğunuz için teşekkür ederiz - HBCOİNSTR Ekibi";
                    $message = "Bloğumuza abone olduğunuz için teşekkür ederiz. Her zaman en son güncellemeleri alacaksınız";
                    $sender = "From: hbcoinstr@gmail.com";
                    if(mail($userEmail,$subject,$message,$sender)){
                    ?>
                        
                    <div class="alert success">Bize abone olduğunuz için teşekkür ederiz.</div>
                    <?php
                    $userEmail = ""; 

                    } else{
                    ?>
                        <!-- show an error message if somehow mail can't be sent   -->
                    <div class="alert error">E-postanız gönderilirken hata oluştu!</div>
                    <?php
                    }
                }
                 else{
                    ?>
                    <!--show an error message if user email is not valid -->
                    <div class="alert error"><?php echo $userEmail ?> Geçerli bir e-posta değil!</div>
                    <?php
                   
                }
            }
            ?>
            <div class="field">
                <input type="text" name="email" placeholder="Email Adresiniz" required value="<?php echo $userEmail ?>">
            </div>
            <div class="field btn">
                <input type="submit" name="subscribe" value="Abone Ol">
            </div>
        </form>
        <div class="text">Bilgilerinizi paylaşmıyoruz.</div>
    </div>
    
</body>
</html>