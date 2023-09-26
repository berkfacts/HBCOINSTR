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
  <title>EA FC 24 Coins Al &amp; Buy EA FC 24 Coins - HBCOINSTR EAFC 24 Coins</title>
  <meta name="keyword" content="hbcoinstr,eafc, eafc24, fut, fut24, eafccoin, eafccoinal, futcoin, futcoinal, eafcultimate, PS5coin, pccoin,xboxcoin,ps4coin,ucuzeafccoin,eafccoins, eafc24coin, eafccoinsat.">
  <meta name="description" content="Güvenilir bir şekilde ve uygun fiyata EA FC 24 coins al-sat. Ps4/Ps5, Xbox ve Pc platformları için coins alış-satış işlemlerimiz mevcuttur.">

  <link rel="stylesheet" href="coinsal.css">
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
      <li><a href="coinsal.php"  class="active"><?php echo $lang['fifa coins al']; ?></a></li>
      <li><a href="coinsat.php"><?php echo $lang['fifa coins sat']; ?></a></li>
      <li><a href="referanslarımız.php"><?php echo $lang['referanslarımız']; ?></a></li>
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
  <!------------------------ÜRÜNLER--------------------->
  <div class="product-list">
    <div class="platform-buttons">
      <button class="platform-button" id="ps4-ps5-xbox-button">PS4-PS5-XBOX</button>
      <button class="platform-button" id="pc-button">PC</button>
    </div>
    <div class="product-rows">
      <div class="product-row">
        <div class="product">
          <h4 class="product-title">EAFC 24 Coins 100k</h4>
          <p class="product-platform">PS4-PS5-XBOX</p>
          <img src="img/hbcoinstr logolar/100k.png" alt="Ürün Fotoğrafı" class="product-image">
          <p class="product-price"><?php echo $lang['400 ₺']; ?></p>
          <button class="buy-button" onclick="window.location.href='havale.php'"><?php echo $lang['SATIN AL']; ?></button>
        </div>
      </div>
      <div class="product-row">
        <div class="product">
          <h4 class="product-title">EAFC 24 Coins 150k</h4>
          <p class="product-platform">PS4-PS5-XBOX</p>
          <img src="img/hbcoinstr logolar/150k.png" alt="Ürün Fotoğrafı" class="product-image">
          <p class="product-price"><?php echo $lang['600 ₺']; ?></p>
          <button class="buy-button" onclick="window.location.href='havale.php'"><?php echo $lang['SATIN AL']; ?></button>
        </div>
      </div>
      <div class="product-row">
        <div class="product">
          <h4 class="product-title">EAFC 24 Coins 250k</h4>
          <p class="product-platform">PS4-PS5-XBOX</p>
          <img src="img/hbcoinstr logolar/250k.png" alt="Ürün Fotoğrafı" class="product-image">
          <p class="product-price"><?php echo $lang['800 ₺']; ?></p>
          <button class="buy-button" onclick="window.location.href='havale.php'"><?php echo $lang['SATIN AL']; ?></button>
        </div>
      </div>
      <div class="product-row">
        <div class="product">
          <h4 class="product-title">EAFC 24 Coins 500k</h4>
          <p class="product-platform">PS4-PS5-XBOX</p>
          <img src="img/hbcoinstr logolar/500k.png" alt="Ürün Fotoğrafı" class="product-image">
          <p class="product-price"><?php echo $lang['2000 ₺']; ?></p>
          <button class="buy-button" onclick="window.location.href='havale.php'"><?php echo $lang['SATIN AL']; ?></button>
        </div>
      </div>
      <div class="product-row">
        <div class="product">
          <h4 class="product-title">EAFC 24 Coins 1000k</h4>
          <p class="product-platform">PS4-PS5-XBOX</p>
          <img src="img/hbcoinstr logolar/1000k.png" alt="Ürün Fotoğrafı" class="product-image">
          <p class="product-price"><?php echo $lang['4000 ₺']; ?></p>
          <button class="buy-button" onclick="window.location.href='havale.php'"><?php echo $lang['SATIN AL']; ?></button>
        </div>
      </div>
      <div class="product-row">
        <div class="product">
          <h4 class="product-title">EAFC 24 Coins 2000k</h4>
          <p class="product-platform">PS4-PS5-XBOX</p>
          <img src="img/hbcoinstr logolar/2000k.png" alt="Ürün Fotoğrafı" class="product-image">
          <p class="product-price"><?php echo $lang['8000 ₺']; ?></p>
          <button class="buy-button" onclick="window.location.href='havale.php'"><?php echo $lang['SATIN AL']; ?></button>
        </div>
      </div>
      <div class="product-row">
        <div class="product">
          <h4 class="product-title">EAFC 24 Coins 100k</h4>
          <p class="product-platform">PC</p>
          <img src="img/hbcoinstr logolar/pc100k.png" alt="Ürün Fotoğrafı" class="product-image">
          <p class="product-price"><?php echo $lang['400 ₺']; ?></p>
          <button class="buy-button" onclick="window.location.href='havale.php'"><?php echo $lang['SATIN AL']; ?></button>
        </div>
      </div>
      <div class="product-row">
        <div class="product">
          <h4 class="product-title">EAFC 24 Coins 150k</h4>
          <p class="product-platform">PC</p>
          <img src="img/hbcoinstr logolar/pc150k.png" alt="Ürün Fotoğrafı" class="product-image">
          <p class="product-price"><?php echo $lang['600 ₺']; ?></p>
          <button class="buy-button" onclick="window.location.href='havale.php'"><?php echo $lang['SATIN AL']; ?></button>
        </div>
      </div>
      <div class="product-row">
        <div class="product">
          <h4 class="product-title">EAFC 24 Coins 250k</h4>
          <p class="product-platform">PC</p>
          <img src="img/hbcoinstr logolar/pc250k.png" alt="Ürün Fotoğrafı" class="product-image">
          <p class="product-price"><?php echo $lang['800 ₺']; ?></p>
          <button class="buy-button" onclick="window.location.href='havale.php'"><?php echo $lang['SATIN AL']; ?></button>
        </div>
      </div>
      <div class="product-row">
        <div class="product">
          <h4 class="product-title">EAFC 24 Coins 500k</h4>
          <p class="product-platform">PC</p>
          <img src="img/hbcoinstr logolar/pc500k.png" alt="Ürün Fotoğrafı" class="product-image">
          <p class="product-price"><?php echo $lang['2000 ₺']; ?></p>
           <button class="buy-button" onclick="window.location.href='havale.php'"><?php echo $lang['SATIN AL']; ?></button>
        </div>
      </div>
      <div class="product-row">
        <div class="product">
          <h4 class="product-title">EAFC 24 Coins 1000k</h4>
          <p class="product-platform">PC</p>
          <img src="img/hbcoinstr logolar/pc1000k.png" alt="Ürün Fotoğrafı" class="product-image">
          <p class="product-price"><?php echo $lang['4000 ₺']; ?></p>
           <button class="buy-button" onclick="window.location.href='havale.php'"><?php echo $lang['SATIN AL']; ?></button>
        </div>
      </div>
      <div class="product-row">
        <div class="product">
          <h4 class="product-title">EAFC 24 Coins 2000k</h4>
          <p class="product-platform">PC</p>
          <img src="img/hbcoinstr logolar/pc2000k.png" alt="Ürün Fotoğrafı" class="product-image">
          <p class="product-price"><?php echo $lang['8000 ₺']; ?></p>
           <button class="buy-button" onclick="window.location.href='havale.php'"><?php echo $lang['SATIN AL']; ?></button>
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
    <a href="https://wa.me/905446651866?text=Coins almak istiyorum" title="whatsapp'a gider"  class="whatsapp-link">
      <img src="img/whatsapp.png" alt="whatsapp">
    </a>
  </div>
  <script>

   
    // buton hareketi
    const ps4Ps5XboxButton = document.getElementById("ps4-ps5-xbox-button");
    const pcButton = document.getElementById("pc-button");
    ps4Ps5XboxButton.addEventListener("click", () => scrollToElement(".product-row:first-child"));
    pcButton.addEventListener("click", () => scrollToElement(".product-row:nth-child(7)"));
    function scrollToElement(selector) {
      const element = document.querySelector(selector);
      if (element) {
        element.scrollIntoView({ behavior: "smooth" });
      }
    }
  </script>
  <script src="js/menu.js"></script>
  <script src="js/dil.js"></script>
</body>
</html>