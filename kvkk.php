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
  <title>KVKK Politikası - HBCOINSTR Fifa Coins</title>
  <meta name="keyword" content="hbcoinstr,eafc, eafc24, fut, fut24, eafccoin, eafccoinal, futcoin, futcoinal, eafcultimate, PS5coin, pccoin,xboxcoin,ps4coin,ucuzeafccoin,eafccoins, eafc24coin, eafccoinsat.">
  <meta name="description" content="KVKK politikamızı okumak için tıklayabilirsiniz.">
  <link rel="stylesheet" href="kvkk.css">
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
  <!--KVKK POLİTİKASI-->
  <div class="kvkk-container">
    <h2 class="kvkk-title"><?php echo $lang['KVKK Politikası']; ?></h2>
    <div class="kvkk-content">
      <p>
        <?php echo $lang['2016/679 sayılı Genel Veri Koruma Yönetmeliğine (“GVKY”) uygun olarak, bu Onay Formunun içeriğini okuduğumu ve anladığımı beyan ederim. Kişisel bilgilerimin (hassas kişisel bilgiler de dahil olmak üzere) Gizlilik Bildirimi’nde belirtilen tüzel kişi ve/veya bağlı kuruluşları (“Kontrolör”) tarafından GVKY’a, Kontrolörün linkte yer alan gizlilik bildirimine (“Gizlilik Bildirimi”) ve kişisel verilerin korunması için yürürlükte olan ilgili diğer tüm mevzuata tamamen uygun olarak işleneceğini kabul ediyorum.']; ?> 
        <br>
        <br>
        <br>
      </p>
      <p>
        <?php echo $lang['GVKY, kişisel verilerin işlenmesi ve kişisel verilerin serbest dolaşımı ile ilgili kurallar hususunda, gerçek kişilerin korunması ile ilgili kuralları belirler. Gerçek kişilerin temel hak ve özgürlüklerini ve özellikle de kişisel verilerin korunmasına ilişkin haklarını korur. Dürüstlük, kanuna uygunluk ve şeffaflık ilkeleri temelinde, kişisel verileriniz sadece bu amaçlarla ve Gizlilik Bildirimi ile uyumlu olacak şekilde toplanır, işlenir ve aktarılır.']; ?>
        <br>
        <br>
        <br>
      </p>
      <p>
         <?php echo $lang['Kişisel verilerimin geçici, sabit veya sürekli iş ve istihdam olanakları sağlama amacıyla; mevcut pozisyonlar ile ilgili uyarı göndermek amacıyla; bireysel gelişim ve kariyer planlarının değerlendirilmesi için profillerin ve mesleki becerilerin değerlendirilmesi (otomatik araçlar dahil) amacıyla; ve eğitim ve değerlendirme kurslarına katılım ve katılım amacıyla (Gizlilik Bildiriminde daha ayrıntılı olarak açıklandığı gibi) işlenmesine ilişkin olarak;']; ?>
      </p>
      <p>
        <?php echo $lang['Kişisel bilgilerimin faks, e-posta, sms ve mms aracılığıyla, (Gizlilik Bildirimi’nde daha ayrıntılı olarak açıklandığı şekilde) yürütülen interaktif iletişim, Pazar anketleri ve istatistiksel çalışmalar dahil olmak üzere pazarlama faaliyetlerinin ve ticari iletişimin tanıtımı amacıyla işlenmesine ilişkin olarak;']; ?>
        <br>
      </p>
      <p>
        <?php echo $lang['Hassas verilerimin yalnızca kaçınılmaz bir şekilde gerekli olduğu durumlarda ve Gizlilik Bildirimi’nde daha ayrıntılı olarak açıklanan amaçlar için işlenmesine ilişkin olarak; kişisel verilerin korunması için yürürlükte olan ilgili diğer tüm mevzuata tamamen uygun olarak işleneceğini kabul ediyorum.']; ?>
      </p>
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
   <script src="js/menu.js"></script>
  <script src="js/dil.js"></script>
</body>
</html>
