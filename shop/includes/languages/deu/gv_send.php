<?php
/* ----------------------------------------------------------------------
   $Id: gv_send.php,v 1.4 2008/06/04 14:41:38 r23 Exp $

   MyOOS [Shopsystem]
   http://www.oos-shop.de/

   Copyright (c) 2003 - 2017 by the MyOOS Development Team.
   ----------------------------------------------------------------------
   Based on:

   File: gv_send.php,v 1.1.2.1 2003/05/15 23:04:32 wilt
   ----------------------------------------------------------------------
   The Exchange Project - Community Made Shopping!
   http://www.theexchangeproject.org

   Gift Voucher System v1.0
   Copyright (c) 2001,2002 Ian C Wilson
   http://www.phesis.org
   ----------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------- */

$aLang['heading_title'] = 'Gutschein versenden';
$aLang['navbar_title'] = 'Gutschein versenden';
$aLang['email_subject'] = 'Gutschein ' . STORE_NAME;
$aLang['heading_text'] = '<br />Hier können Sie leicht und unkompliziert einem Bekannten einen Gutschein für den Einkauf bei ' . STORE_NAME . ' zukommen lassen.<br /> Einfach den Namen und die e-Mail Adresse der Person eintragen, die Sie mit einem Gutschein beschenken möchten, dann noch den
Wert angeben, den Sie verschenken möchten, auf <strong><tt>weiter</tt></strong> drücken, und los gehts. Weitere Informationen über die Gutschein-Funktionen finden Sie in den <a href="' . oos_href_link($aContents['gv_faq']).'">Gutschein FAQ\'s</a><br />';
$aLang['entry_name'] = 'Empfäger - Name:';
$aLang['entry_email'] = 'Empfäger - eMail Adresse:';
$aLang['entry_message'] = 'Ihre Nachricht (wird mit dem Gutschein versendet):';
$aLang['entry_amount'] = 'Wert (Betrag):';
$aLang['error_entry_amount_check'] = '&nbsp;&nbsp;<span class="errorText">Ungültiger Betrag</span>';
$aLang['error_entry_email_address_check'] = '&nbsp;&nbsp;<span class="errorText">Ungültige Email-Adresse</span>';
$aLang['main_message'] = 'Sie möchten einen Gutschein mit dem Wert von %s an %s  E-Mail-Adresse  %s senden.<br /><br />Folgender Test wird in der E-Mail stehen: <br /><br />Hallo %s<br /><br /> Ihnen wurde ein Gutschein im Wert ber %s von %s geschickt.';

$aLang['personal_message'] = '%s teils mit';
$aLang['text_success'] = 'Glückwunsch, Ihr Gutschein wurde erfolgreich verschickt.';

$aLang['email_separator'] = '----------------------------------------------------------------------------------------';
$aLang['email_gv_text_header'] = 'Herzlichen Glückwunsch, Sie haben einen Gutschein im Wert von %s';
$aLang['email_gv_text_subject'] = 'Dies ist ein Gutschein von %s';
$aLang['email_gv_from'] = 'Dieser Gutschein wurde Ihnen geschickt von %s';
$aLang['email_gv_message'] = 'mit folgender Mitteilung ';
$aLang['email_gv_send_to'] = 'Hallo, %s';
$aLang['email_gv_redeem'] = 'Um diesen Gutschein zu benutzen, klicken Sie bitte auf den untenstehenden Link. Bitte schreiben Sie auch den Gutscheincode auf, der % s ist. Falls Sie Probleme haben.';
$aLang['email_gv_link'] = 'Zum benutzen bitte klicken ';
$aLang['email_gv_visit'] = ' oder besuchen ';
$aLang['email_gv_enter'] = ' und den Gutscheincode eingeben ';
$aLang['email_gv_fixed_footer'] = 'Falls Sie Probleme haben den Gutschein mit dem automatisierten Link zu benutzen, ' . "\n" . 
                                'können Sie den Gutscheincode auch bei der Bestellung eingeben, wenn Sie diese an der Kasse beenden.' . "\n\n";
$aLang['email_gv_shop_footer'] = '';

