<?php
session_start();
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'tr';
} else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
    if ($_GET['lang'] == "tr") {
        $_SESSION['lang'] = 'tr';
    } else if ($_GET['lang'] == "en") {
        $_SESSION['lang'] = "en";
    }
    else if ($_GET['lang'] == "it") {
        $_SESSION['lang'] = "it";
    }
    else if ($_GET['lang'] == "es") {
        $_SESSION['lang'] = "es";
    }
    else if ($_GET['lang'] == "fr") {
        $_SESSION['lang'] = "fr";
    }
     else if ($_GET['lang'] == "gr") {
        $_SESSION['lang'] = "gr";
    }
    else if ($_GET['lang'] == "du") {
        $_SESSION['lang'] = "du";
    }
}
require_once $_SESSION['lang'] . ".php";
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Referanslarımız - HBCOINSTR Fifa Coins</title>
    <meta name="keyword" content="hbcoinstr,eafc, eafc24, fut, fut24, eafccoin, eafccoinal, futcoin, futcoinal, eafcultimate, PS5coin, pccoin,xboxcoin,ps4coin,ucuzeafccoin,eafccoins, eafc24coin, eafccoinsat.">
  <meta name="description" content="Fifa serilerindeki önceki satışlarımızdan bazılarını görmek için tıklayın.">
    <link rel="stylesheet" href="referanslarımız.css">
    <script src="js/main.js"></script>
    <script src="js/tawk-to.js"></script>
</head>
<body>
   <nav>
    <div class="nav-logo">
       <img src="img/coins.png" alt="logomuz">
    </div> 
  <select id="language-select" onchange="changeLanguage()">
   <option value="tr">🇹🇷 <?php echo $lang['Türkçe']; ?></option>
   <option value="en">🇬🇧 <?php echo $lang['İngilizce']; ?></option>
   <option value="it">🇮🇹 <?php echo $lang['İtalyanca']; ?></option>
   <option value="es">🇪🇸 <?php echo $lang['İspanyolca']; ?></option>
   <option value="fr">🇫🇷 <?php echo $lang['Fransızca']; ?></option>
   <option value="gr">🇩🇪 <?php echo $lang['Almanca']; ?></option>
   <option value="du">🇳🇱 <?php echo $lang['Flemenkçe']; ?></option>
</select>  
    <ul class="nav-links">
      <li><a href="index.php"><?php echo $lang['anasayfa']; ?></a></li>
      <li><a href="coinsal.php"><?php echo $lang['fifa coins al']; ?></a></li>
      <li><a href="coinsat.php"><?php echo $lang['fifa coins sat']; ?></a></li>
      <li><a href="referanslarımız.php" class="active"><?php echo $lang['referanslarımız']; ?></a></li>
      <li><a href="iletisim.php"><?php echo $lang['iletişim']; ?></a></li>
    </ul>
    <div class="social-icon">
        <a href="https://www.instagram.com/hbcoinstr/" title="instagram'a gider"><img src="img/instagram.png" alt="instagram"></a>
        <a href="https://twitter.com/hbcoinstr43869" title="twitter'a gider"><img src="img/twitter.png" alt="twitter"></a>
        <a href="https://discord.gg/RBG8EdgU" title="discord'a gider"><img src="img/discord.png" alt="discord"></a>
    </div>
    <div class="burger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
  </nav>
    <div class="product-list">
        <div class="product-rows">
            <div class="product-row">
                <div class="product">
                    <img src="aktarımlar/11-2048.jpg" alt="Ürün Fotoğrafı" class="product-image">
                </div>
            </div>
            <div class="product-row">
                <div class="product">
                    <img src="aktarımlar/2-2048.jpeg" alt="Ürün Fotoğrafı" class="product-image">
                </div>
            </div>
            <div class="product-row">
                <div class="product">
                    <img src="aktarımlar/3-2048.jpeg" alt="Ürün Fotoğrafı" class="product-image">
                </div>
            </div>
            <div class="product-row">
                <div class="product">
                    <img src="aktarımlar/4-2048.jpg" alt="Ürün Fotoğrafı" class="product-image">
                </div>
            </div>
            <div class="product-row">
                <div class="product">
                    <img src="aktarımlar/5-2048.jpg" alt="Ürün Fotoğrafı" class="product-image">
                </div>
            </div>
            <div class="product-row">
                <div class="product">
                    <img src="aktarımlar/6-2048.jpeg" alt="Ürün Fotoğrafı" class="product-image">
                </div>
            </div>
            <div class="product-row">
                <div class="product">
                    <img src="aktarımlar/7-2048.jpg" alt="Ürün Fotoğrafı" class="product-image">
                </div>
            </div>
            <div class="product-row">
                <div class="product">
                    <img src="aktarımlar/8-2048.jpg" alt="Ürün Fotoğrafı" class="product-image">
                </div>
            </div>
            <div class="product-row">
                <div class="product">
                    <img src="aktarımlar/9-2048.jpg" alt="Ürün Fotoğrafı" class="product-image">
                </div>
            </div>
            <div class="product-row">
                <div class="product">
                    <img src="aktarımlar/10-2048.jpeg" alt="Ürün Fotoğrafı" class="product-image">
                </div>
            </div>
            <div class="product-row">
                <div class="product">
                    <img src="aktarımlar/12-2048.jpg" alt="Ürün Fotoğrafı" class="product-image">
                </div>
            </div>
            <div class="product-row">
                <div class="product">
                    <img src="aktarımlar/13-2048.jpeg" alt="Ürün Fotoğrafı" class="product-image">
                </div>
            </div>
            <div class="product-row">
                <div class="product">
                    <img src="aktarımlar/14-2048.jpeg" alt="Ürün Fotoğrafı" class="product-image">
                </div>
            </div>
            <div class="product-row">
                <div class="product">
                    <img src="aktarımlar/1-1600.jpg" alt="Ürün Fotoğrafı" class="product-image">
                </div>
            </div>
            <div class="product-row">
                <div class="product">
                    <img src="aktarımlar/2-1600.jpg" alt="Ürün Fotoğrafı" class="product-image">
                </div>
            </div>
            <div class="product-row">
                <div class="product">
                    <img src="aktarımlar/3-1600.jpg" alt="Ürün Fotoğrafı" class="product-image">
                </div>
            </div>
            <div class="product-row">
                <div class="product">
                    <img src="aktarımlar/aktarım1.jpg" alt="Ürün Fotoğrafı" class="product-image">
                </div>
            </div>
            <div class="product-row">
                <div class="product">
                    <img src="aktarımlar/aktarım7.jpg" alt="Ürün Fotoğrafı" class="product-image">
                </div>
            </div>
            <div class="product-row">
                <div class="product">
                    <img src="aktarımlar/aktarım3.jpg" alt="Ürün Fotoğrafı" class="product-image">
                </div>
            </div>
            <div class="product-row">
                <div class="product">
                    <img src="aktarımlar/aktarım4.jpg" alt="Ürün Fotoğrafı" class="product-image">
                </div>
            </div>
            <div class="product-row">
                <div class="product">
                    <img src="aktarımlar/1-2048.jpg" alt="Ürün Fotoğrafı" class="product-image">
                </div>
            </div>
            <div class="product-row">
                <div class="product">
                    <img src="aktarımlar/aktarım2.jpg" alt="Ürün Fotoğrafı" class="product-image">
                </div>
            </div>
            <div class="product-row">
                <div class="product">
                    <img src="aktarımlar/aktarım6.jpg" alt="Ürün Fotoğrafı" class="product-image">
                </div>
            </div>
            <div class="product-row">
                <div class="product">
                    <img src="aktarımlar/aktarım5.jpg" alt="Ürün Fotoğrafı" class="product-image">
                </div>
            </div>
        </div>
    </div>
    <!------------------------BÜLTENE ABONE OL KISMI--------------------->
  <div class="newsletter">
    <div class="newsletter-line"></div>
    <div class="newsletter-content">
      <h3><?php echo $lang['Abone Ol']; ?></h3>
      <p><?php echo $lang['Yeniliklerden haberdar olmak için bültenimize abone olun!']; ?> <span></span></p>
      <form class="newsletter-form" method="post">
        <button type="submit"><a href="abone.php"><?php echo $lang['İlgili linke gitmek için tıkla!']; ?></a></button>
      </form>
      <p class="privacy-link">
        <a href="kvkk.php"><?php echo $lang['Gizlilik İlkeleri & Kullanım Koşulları']; ?></a>
      </p>
      <div class="social-icons">
        <a href="https://www.instagram.com/hbcoinstr/" title="instagram'a gider"><img src="img/instagram.png" alt="instagram"></a>
        <a href="https://www.tiktok.com/@hbcoinstr?lang=tr" title="tiktok'a gider"><img src="img/tik-tok.png" alt="tiktok"></a>
        <a href="https://twitter.com/hbcoinstr43869" title="twitter'a gider"><img src="img/twitter.png" alt="twitter"></a>
        <a href="https://www.youtube.com/channel/UCPNeKYBLtxrFeX4I1zonOuQ" title="youtube'a gider"><img src="img/youtube.png" alt="youtube"></a>
      </div>
    </div>
  </div>
  <!-----------------------FOOTER KISMI---------------------------------------------->
  <div class="footer">
    <div class="footer-content">
      <p><?php echo $lang['© Copyright 2023 HBcoin Türkiye']; ?></p>
      <span class="powered-by">BerkFacts<span class="powered-text"> (powered by)</span></span>
    </div>
  </div>
  <!-----------------------whatsapp---------------------------------------------->
  <div class="whatsapp-icon">
    <a href="https://wa.me/905446651866?text=Coins almak istiyorum" title="whatsapp'a gider" class="whatsapp-link"> 
      <img src="img/whatsapp.png" alt="whatsapp">
    </a>
  </div>
    <script src="js/menu.js"></script>
    <script src="js/dil.js"></script>
</body>
</html>