<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
        IncludeTemplateLangFile(__FILE__);
        ?>
<?php
    global $page;
    if ($page['right-sidebar']): ?>
    <div id="right-sidebar">

    </div>
<?php endif;
if ($page['left-sidebar']): ?>
    <div id="left-sidebar">

    </div>
<?php endif;?>

      </div>


            <div id="footer">
                    <div class="width-list">
                        <div class="copyright">
                            <a href="<?=SITE_DIR?>politika-konfi.php" target="_blank"> Политика конфиденциальности</a><br>
                            <a href="client.webpro.su" target="_blank"> Личный кабинет</a><br>
                            2013 © webpro.su Все права защищены
                        </div>
                        <div class="contact">
                            <div class="phone">+7 (4212)944-320</div>
                            <div class="email">info@webpro.su</div>
                            <!--<div class="skype">alexxx_bo</div>
                            <div class="name-phone">Контактное лицо: Алексей Божко</div>-->
                        </div>
                        <div id="footer-design"><?=GetMessage("FOOTER_DISIGN")?></div>
                        <ul id="footer-links">
                            <li><a href="<?=SITE_DIR?>contacts.php"><?=GetMessage("TMPL_FEEDBACK")?></a></li>
                            <?if(!$USER->IsAuthorized()):?>
                                <li><a href="<?=SITE_DIR?>auth.php"><?=GetMessage("TMPL_AUTH")?></a></li>
                            <?endif;?>
                        </ul>
                    </div>
            </div>
    <div id="analitics">
        <?$APPLICATION->IncludeFile(
            SITE_TEMPLATE_PATH."/includes/analitics.php",
            Array(),
            Array("MODE"=>"html")
        );?>
    </div>
    </body>
    </html>
<?//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/blog.css");
//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/common.css");?>