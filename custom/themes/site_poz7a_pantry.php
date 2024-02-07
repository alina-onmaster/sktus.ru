<?php
if (!defined("DIAFAN")) {
    include dirname(dirname(__FILE__)) . '/includes/404.php';
}
?><!DOCTYPE HTML>
<html>
<head>
<!-- NT -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WN58XJ5');</script>
<!-- End NT -->
  <insert name="show_block" module="tagmanager" position="head_start">
  <insert name="show_head">
  <meta name="viewport" content="width=1201">
  <link rel="icon" type="image/png" href="<insert name="custom" path="img/favicon.png" absolute="true">"/>
  <insert name="show_css" files="reset.css, style.css, print.css">
  <insert name="show_block" module="tagmanager" position="head_end">

</head>
<body class="bluebg pantry inside">
<!-- NT (noscript)-->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WN58XJ5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End NT (noscript) -->
  <insert name="show_block" module="tagmanager" position="body_start">
  <insert name="show_form" module="feedback" id="6" template="requestcall">
  <a class="header-logo" href="<insert name="path">" title="Микрорайон Университет"></a>
  <insert name="show_include" file="badges">
      <menu>
          <insert name="show_block" module="menu" id="1" tag_start_1="[div class=`menutop`]" tag_start_2="" tag_level_start_2="[div class=`submenu`]" tag_level_end_2="[/div]" tag_end_after_children_1="[/div]" tag_end_after_children_2="">
      </menu>
  <main>
    <a href="#" class="backbutton"></a>
    <div class="poz7a-pantry-wrap">
      <img src="/custom/sktus/img/poz7a/pantry/map.png" class="areaimg" usemap="#areamap" />
      <div class="pantryinfo">
        <p class="pantryinfo-amount">Помещений в продаже: <span></span></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz7a/pantry/sections-7a-a.png" />
        <img data-src="/custom/sktus/img/poz7a/pantry/sections-7a-b.png" />
        <img data-src="/custom/sktus/img/poz7a/pantry/sections-7a-v.png" />
      </div>
      <map name="areamap">
        <area
          shape="poly"
          coords="66, 270, 307, 270, 307, 295, 384, 295, 384, 271, 442, 271, 441, 254, 552, 254, 552, 291, 496, 293, 494, 502, 448, 503, 448, 523, 49, 523, 49, 326, 66, 324"
          class="area-pantryinfo"
          data-poz="7a"
          data-section="А"
          data-amount="26"
          data-marginleft="215"
          data-margintop="345"
          href="/pozitsiya-7a---kladovye-pomescheniya/sektsiya-a/"/>
        <area
          shape="poly"
          coords="555, 269, 611, 269, 612, 295, 690, 296, 689, 268, 745, 269, 746, 253, 847, 253, 845, 268, 837, 267, 837, 291, 790, 292, 790, 501, 750, 501, 750, 525, 547, 525, 546, 501, 499, 503, 501, 297, 556, 295"
          class="area-pantryinfo"
          data-poz="7a"
          data-section="Б"
          data-amount="18"
          data-marginleft="605"
          data-margintop="345"
          href="/pozitsiya-7a---kladovye-pomescheniya/sektsiya-b/"/>
        <area
          shape="poly"
          coords="841, 271, 902, 271, 903, 295, 1036, 296, 1036, 253, 1149, 256, 1149, 298, 1114, 298, 1114, 365, 1092, 365, 1093, 503, 1043, 503, 1044, 523, 839, 524, 838, 501, 794, 502, 792, 295, 841, 295"
          class="area-pantryinfo"
          data-poz="7a"
          data-section="В"
          data-amount="17"
          data-marginleft="895"
          data-margintop="345"
          href="/pozitsiya-7a---kladovye-pomescheniya/sektsiya-v/"/>
      </map>
    </div>
    <div class="garage-caption">
      <p class="dominfo-block-caption"><strong>Позиция №7a</strong></p>
      <p class="dominfo-block-selectfloor">Выберите секцию</p>
    </div>
    <div class="garage-details">
      <p class="garage-details-section">СЕКЦИЯ <span></span></p>
      <p class="pantry-details-amount">Помещений в продаже: <span></span></p>
    </div>
  </main>
  <footer>
    <insert name="show_include" file="footer">
  </footer>
  <insert name="show_js">
  <insert name="show_custom_compressed_js" files="main.js, pantry.js">
  <insert name="show_include" file="counters">
  <insert name="show_block" module="tagmanager" position="body_end">
</body>
</html>
