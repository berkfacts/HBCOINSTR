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
  <title>EA FC 24 Coins Al &amp; Buy EA FC 24 Coins - HBCOINSTR Fifa Coins</title>
  <meta name="keyword" content="eafc, eafc24, fut, fut24, eafccoin, eafccoinal, futcoin, futcoinal, eafcultimate, PS5coin, pccoin,xboxcoin,ps4coin,ucuzeafccoin,eafccoins, eafc24coin, eafccoinsat.">
  <meta name="description" content="Güvenli ve uygun fiyatlı eafc 24 coins al-sat. Ps4/Ps5 - Xbox ve Pc platformu için coins satışlarımız mevcuttur.Kalitenin tek adresi. ">
  <link rel="stylesheet" href="style.css">
  <script  src="js/main.js"></script>
  <script  src="js/tawk-to.js"></script>  
</head>
<body>
  <div class="container">
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
      <li><a href="index.php" class="active"><?php echo $lang['anasayfa']; ?></a></li>
      <li><a href="coinsal.php"><?php echo $lang['fifa coins al']; ?></a></li>
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
</div>
  <!------------------------NEDEN BİZ BÖLÜMÜ--------------------->
  <div class="center">
      <div class="buttons">
        <button class="coinal" onclick="window.location.href='coinsal.php'"><?php echo $lang['COİNS AL']; ?></button>
        <button class="coinsat" onclick="window.location.href='coinsat.php'"><?php echo $lang['COİNS SAT']; ?></button>
      </div>
  <section class="neden-biz">
    <h2><?php echo $lang['Neden Biz?']; ?></h2>
    <div class="feature">
      <div class="feature-box">
        <img src="img/add-to-cart.png" alt="TEK TIKLA SİPARİŞ VER">
        <p><?php echo $lang['TEK TIKLA SİPARİŞ VER']; ?></p>
      </div>
      <div class="feature-box">
        <img src="img/quick.png" alt="HIZLI TESLİMAT">
        <p><?php echo $lang['HIZLI TESLİMAT']; ?></p>
      </div>
      <div class="feature-box feature-box-guvenli">
        <div class="feature-title">
          <img src="img/shield.png" alt="GÜVENLİ ALIŞVERİŞ">
          <p><?php echo $lang['GÜVENLİ ALIŞVERİŞ']; ?></p>
        </div>
      </div>
      <div class="feature-box">
        <img src="img/reduce-cost.png" alt="EN DÜŞÜK FİYAT">
        <p><?php echo $lang['EN DÜŞÜK FİYAT']; ?></p>
      </div>
      <div class="feature-box">
        <img src="img/comment.png" alt="CANLI DESTEK">
        <p><?php echo $lang['CANLI DESTEK']; ?></p>
      </div>
    </div>
  </section>
  <!------------------------REFERANSLARIMIZ--------------------->
  <section class="referanslar">
    <h2><?php echo $lang['REFERANSLARIMIZ']; ?></h2>
    <div class="referanslar-listesi">
      <div class="referans">
        <img src=aktarımlar/6-2048.jpeg alt="Referans 1">
        <img src=aktarımlar/2-2048.jpeg alt="Referans 2">
        <img src=aktarımlar/3-2048.jpeg alt="Referans 3">
        <img src=aktarımlar/10-2048.jpeg alt="Referans 4">
      </div>
      <div class="referans-buton">
        <button onclick="window.location.href='referanslarımız.php'"><?php echo $lang['REFERANSLARIMIZ']; ?> <i class='bx bx-right-arrow-alt'></i></button>
      </div>
    </div>
  </section>
  <!------------------------SIKÇA SORULAN SORULAR--------------------->
  <div class="faq-header"><?php echo $lang['Sıkça Sorulan Sorular']; ?></div>
  <div class="faq-content">
    <div class="faq-question">
      <input id="q1" type="checkbox" class="panel">
      <div class="plus">+</div>
      <label for="q1" class="panel-title"><?php echo $lang['Nasıl Alırım?']; ?></label>
      <div class="panel-content"><?php echo $lang['İhtiyaç duyduğunuz fifa coin miktarını belirleyip havale veya kredi kartı ile ödeme
        seçenekleri için bizimle iletişime geçebilirsiniz.']; ?>
      </div>
    </div>
    <div class="faq-question">
      <input id="q2" type="checkbox" class="panel">
      <div class="plus">+</div>
      <label for="q2" class="panel-title"><?php echo $lang['Nasıl satarım?']; ?></label>
      <div class="panel-content"><?php echo $lang['Coin satışı için, sitemizde bulunan sosyal medya hesaplarımız veya Whatsapp hattımız
        üzerinden bize ulaşabilirsiniz,<br> en kısa sürede sizinle iletişime geçeceğiz.']; ?>
      </div>
    </div>
    <div class="faq-question">
      <input id="q3" type="checkbox" class="panel">
      <div class="plus">+</div>
      <label for="q3" class="panel-title"><?php echo $lang['Fifa coin satın aldıktan sonra aldığım coinler hesabıma nasıl aktarılacak?']; ?></label>
      <div class="panel-content"><?php echo $lang['Aktarımlar oyun üzerindeki transfer pazarı aracılığı ile yapılır, bunun için bazı
        oyuncu kartları <br> kullanılmaktadır, bu kartların satın alınması ile aktarımları sağlıyoruz, satın alma
        işleminizin ardından <br> gerekli yönlendirmeler anlık olarak tarafımızca yapılacaktır.']; ?>
      </div>
    </div>
    <div class="faq-question">
      <input id="q4" type="checkbox" class="panel">
      <div class="plus">+</div>
      <label for="q4" class="panel-title"><?php echo $lang['Hesabımın banlanma ihtimali nedir?']; ?></label>
      <div class="panel-content"><?php echo $lang['Yıllardır en güvenilir yöntemler ile coin tedarik hizmeti veriyoruz. <br> Banlanma
        ihtimaliniz yok denecek kadar azdır. <br> Ayrıca coin sizlerin hesabına geçtikten sonra 2 saat içerisinde
        harcamanızı tavsiye ediyoruz.']; ?>
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
  <script  src="js/menu.js"></script>
  <script  src="js/dil.js"></script>
</body>
</html>