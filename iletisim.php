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
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>İletişim - HBCOINSTR Fifa Coins</title>
    <meta name="keyword" content="hbcoinstr,eafc, eafc24, fut, fut24, eafccoin, eafccoinal, futcoin, futcoinal, eafcultimate, PS5coin, pccoin,xboxcoin,ps4coin,ucuzeafccoin,eafccoins, eafc24coin, eafccoinsat.">
  <meta name="description" content="İletişim formumuzu doldurarak bizimle iletişime geçebilirsiniz.En kısa zamanda sizlere geri dönüş sağlayacağız.">
    <link rel="stylesheet" href="iletisim.css">
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
      <li><a href="referanslarımız.php"><?php echo $lang['referanslarımız']; ?></a></li>
      <li><a href="iletisim.php" class="active"><?php echo $lang['iletişim']; ?></a></li>
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
  <!------------------İLETİŞİM---------------------------------->
  <section id="iletisim">
    <div class="inner_contact">
      <div class="child_contact">
        <img class=contact src="./img/contactt.png" alt="contact">
      </div>
      <div class="child_contact">
        <form method="POST" action="iletisim-post.php">
        <?php if(isset($_GET['success'])): ?>
             <div class="alert-success"><?php echo $lang['Mesajınız başarıyla iletildi.']; ?></div>
       <?php endif ?>
          <input placeholder=<?php echo $lang['Adınız Soyadınız']; ?> name="adi_soyadi" type="text" required="">
          <input placeholder=<?php echo $lang['Email']; ?> name="email" type="email" required="">
          <input placeholder=<?php echo $lang['Telefon']; ?> name="telefon" type="text" required="">
          <textarea placeholder=<?php echo $lang['Mesaj']; ?> name="mesaj" cols="30" rows="10" required=""></textarea>
          <input type="submit" value=<?php echo $lang['Gönder']; ?>>
        </form>
      </div>
    </div>
  </section>
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