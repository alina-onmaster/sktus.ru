<?php
/**
 * Футер
 *
 * @package    Diafan.CMS
 * @author     diafan.ru
 * @version    6.0
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2016 OOO «Диафан» (http://diafan.ru)
 */

if (!defined('DIAFAN')) {
    $path = __FILE__;
    $i = 0;
    while (!file_exists($path . '/includes/404.php')) {
        if ($i == 10) {
            exit;
        }

        $i++;
        $path = dirname($path);
    }
    include $path . '/includes/404.php';
}
?>
<div class="footer__wrapper footer-list">

  <div class="footer-list__item footer-about">
    <p><insert name="show_year" year="2017"></b> Микрорайон «Университет» <span>АО "Специализированный застройщик "ТУС".</span></p>
  </div>

  <div class="footer-list__item footer-contacts">
    <p>г. Чебоксары, ул. Мичмана Павлова, 39 <strong>Тел.: +7 (8352) 32-45-75</strong></p>
  </div>

  <div class="footer-list__item social">
    <a class="social__link social__link--vk" href="https://vk.com/mkr_universitet" target="_blank">
      <svg class="social__image" xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="-8 -8 38 38"><path class="st0" d="M13.162 18.994c.609 0 .858-.406.851-.915-.031-1.917.714-2.949 2.059-1.604 1.488 1.488 1.796 2.519 3.603 2.519h3.2c.808 0 1.126-.26 1.126-.668 0-.863-1.421-2.386-2.625-3.504-1.686-1.565-1.765-1.602-.313-3.486 1.801-2.339 4.157-5.336 2.073-5.336h-3.981c-.772 0-.828.435-1.103 1.083-.995 2.347-2.886 5.387-3.604 4.922-.751-.485-.407-2.406-.35-5.261.015-.754.011-1.271-1.141-1.539-.629-.145-1.241-.205-1.809-.205-2.273 0-3.841.953-2.95 1.119 1.571.293 1.42 3.692 1.054 5.16-.638 2.556-3.036-2.024-4.035-4.305-.241-.548-.315-.974-1.175-.974h-3.255c-.492 0-.787.16-.787.516 0 .602 2.96 6.72 5.786 9.77 2.756 2.975 5.48 2.708 7.376 2.708z"/></svg>
    </a>
    <a class="social__link social__link--ok" href="https://ok.ru/group/58856774959139" target="_blank">
      <svg class="social__image" xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="-5 -4 38 38">
          <path d="M120.001,753.38c10.372,0,18.807-8.435,18.807-18.807c0-10.362-8.435-18.799-18.807-18.799 c-10.362,0-18.807,8.437-18.807,18.799C101.194,744.945,109.639,753.38,120.001,753.38z M120.001,689.164 c25.055,0,45.422,20.367,45.422,45.409c0,25.052-20.367,45.427-45.422,45.427c-25.049,0-45.422-20.375-45.422-45.427 C74.579,709.532,94.952,689.164,120.001,689.164z M138.378,652.109c9.247,2.107,18.165,5.765,26.377,10.925 c6.215,3.917,8.089,12.134,4.172,18.35c-3.912,6.23-12.124,8.103-18.35,4.186c-18.605-11.703-42.561-11.698-61.156,0 c-6.227,3.917-14.438,2.043-18.346-4.186c-3.917-6.221-2.049-14.433,4.168-18.35c8.211-5.154,17.129-8.818,26.376-10.925 l-25.395-25.394c-5.192-5.197-5.192-13.621,0.005-18.817c2.601-2.596,6.004-3.897,9.406-3.897c3.408,0,6.816,1.3,9.417,3.897 l24.943,24.954l24.965-24.954c5.192-5.197,13.616-5.197,18.812,0c5.202,5.196,5.202,13.626,0,18.817 C163.773,626.715,138.378,652.109,138.378,652.109z" transform="matrix(.125 0 0 -.125 0 102.5)"/>
      </svg>
    </a>
    <a class="social__link social__link--youtube" href="https://www.youtube.com/channel/UCpV_zwPqV-d3YREJngR7E4g/featured?view_as=subscriber" target="_blank">
      <svg class="social__image" xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="-8 -8 38 38"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
    </a>
  </div>

  <div class="footer-list__item footer-copyright">
    <p><a href="https://onmaster.ru/" target="_blank">Сайт  для застройщика</a> от Onmaster.ru</p>
  </div>
</div>
<div class="footer-whiteline">
  <p>Копирование и последующее размещение информации с сайта разрешено только при установке активной гиперссылки на сайт застройщика</p>
</div>
