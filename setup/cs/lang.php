<?php
/**
 *    This file is part of OXID eShop Community Edition.
 *
 *    OXID eShop Community Edition is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    OXID eShop Community Edition is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with OXID eShop Community Edition.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @package   lang
 * @copyright (C) OXID eSales AG 2003-2012
 * @version OXID eShop CE
 * @translators: admin (3161), inquisitor8 (298), SYSKO (8)
 */

$sLangName  = 'Česky';

// -------------------------------
// RESOURCE IDENTIFIER = STRING
// -------------------------------
$aLang = array(
'charset' => 'utf-8',
'ATTENTION' => 'Pozor, důležité',
'BUTTON_BEGIN_INSTALL' => 'Start instalace',
'BUTTON_DB_INSTALL' => 'Vytvořit databázi',
'BUTTON_LICENCE' => 'Pokračovat',
'BUTTON_PROCEED_INSTALL' => 'Pokračovat v nastavení',
'BUTTON_RADIO_INSTALL_DB_DEMO' => 'Instalovat demodata',
'BUTTON_RADIO_LICENCE_ACCEPT' => 'Souhlasím s licenčními podmínkami.',
'BUTTON_RADIO_LICENCE_NOT_ACCEPT' => 'Nesouhlasím s licenčními podmínkami.',
'BUTTON_RADIO_NOT_INSTALL_DB_DEMO' => '<strong>Ne</strong>instalovat demodata',
'BUTTON_START_INSTALL' => 'Restartovat instalátor',
'BUTTON_WRITE_DATA' => 'Uložit a pokračovat',
'BUTTON_WRITE_LICENCE' => 'Uložit licenční klíč',
'ERROR_BAD_DEMODATA' => 'CHYBA: Záznamy z průběhu zápisu SQL dat:',
'ERROR_BAD_SERIAL_NUMBER' => 'CHYBA: Chybný licenční klíč!',
'ERROR_BAD_SQL' => 'CHYBA: Záznamy z průběhu zápisu SQL dat:',
'ERROR_CONFIG_FILE_IS_NOT_WRITABLE' => 'CHYBA: Do souboru %s/config.inc.php  není možné zapisovat!',
'ERROR_COULD_NOT_CREATE_DB' => 'CHYBA: Databáze není k dispozici, a také nemůže být vytvořena!',
'ERROR_COULD_NOT_FIND_FILE' => 'Instalátor nemohl nalézt "%s"!',
'ERROR_COULD_NOT_OPEN_CONFIG_FILE' => 'Soubor %s se nepodařilo otevřít pro čtení! Prosím konzultujte tento problém na našem fóru',
'ERROR_COULD_NOT_READ_FILE' => 'Instalátor nemohl otevřít "%s" pro čtení!',
'ERROR_COULD_NOT_WRITE_TO_FILE' => 'Instalátor nemohl zapsat do "%s"!',
'ERROR_DB_ALREADY_EXISTS' => 'CHYBA: Zdá se, že je již OXID eShop v databázi %s instalován. Prosím, odstraňte před pokračováním data!',
'ERROR_DB_CONNECT' => 'CHYBA: Nelze se připojit k žádné databázi!',
'ERROR_FILL_ALL_FIELDS' => 'CHYBA: Prosím, vyplňte všechna povinná pole!',
'ERROR_MYSQL_VERSION_DOES_NOT_FIT_REQUIREMENTS' => 'Verze MySQL nesplňuje systémové požadavky',
'ERROR_NOT_AVAILABLE' => 'CHYBA: %s nebyla nalezena!',
'ERROR_NOT_WRITABLE' => 'CHYBA: %s není možné zapisovat!',
'ERROR_OPENING_SQL_FILE' => 'CHYBA: Nelze otevřít soubor SQL!',
'ERROR_PASSWORDS_DO_NOT_MATCH' => 'Hesla se neshodují!',
'ERROR_PASSWORD_TOO_SHORT' => 'Heslo je příliš krátké!',
'ERROR_SETUP_CANCELLED' => 'Instalační program byl ukončen, protože jste neakceptovali licenční podmínky.',
'ERROR_USER_NAME_DOES_NOT_MATCH_PATTERN' => 'Prosím, zadejte platnou e-mailovou adresu!',
'ERROR_VIEWS_CANT_CREATE' => 'CHYBA: Nelze vytvořit pohledy. Zkontrolujte prosím uživatelská práva v databázi.',
'ERROR_VIEWS_CANT_DROP' => 'CHYBA: Nelze smazat pohledy. Zkontrolujte prosím uživatelská práva v databázi.',
'ERROR_VIEWS_CANT_SELECT' => 'CHYBA: Nelze číst data z pohledůews. Zkontrolujte prosím uživatelská práva v databázi.',
'FOOTER_OXID_ESALES' => '© Oxid eSales AG 2003 - Y',
'HEADER_META_MAIN_TITLE' => 'OXID eShop průvodce instalací',
'HEADER_TEXT_SETUP_NOT_RUNS_AUTOMATICLY' => 'Pokud instalace nebude pokračovat během několika sekund, klikněte prosím',
'HERE' => 'sem',
'LOAD_DYN_CONTENT_NOTICE' => '<p>Pokud je políčko "více informací" zaškrtnuto, uvidíte doplňkové menu v admin oblasti Vašeho OXID eShopu. </p> <p>V tomto menu získáte další informace o e-commerce službách jako je Google, vyhledávání produktů.</p> <p> Tato nastavení můžete kdykoliv změnit.</p>',
'MOD_ALLOW_URL_FOPEN' => 'allow_url_fopen nebo fsockopen na portu 80',
'MOD_BC_MATH' => 'BCMath',
'MOD_BUG53632' => 'Možné problémy na serveru z důvodu chyb PHP',
'MOD_CURL' => 'cURL',
'MOD_FILE_UPLOADS' => 'Nahrávání souborů je povoleno (file_uploads)',
'MOD_GD_INFO' => 'GDlib v2 [v1] včetně podpory JPEG',
'MOD_INI_SET' => 'ini_set povoleno',
'MOD_I_CONV' => 'ICONV',
'MOD_J_SON' => 'JSON',
'MOD_LIB_XML2' => 'LIB XML2',
'MOD_MB_STRING' => 'mbstring',
'MOD_MEMORY_LIMIT' => 'PHP Memory limit (odporúčané min. 14MB, 30MB)',
'MOD_MOD_REWRITE' => 'Apache mod_rewrite modul',
'MOD_MYSQL_CONNECT' => 'MySQL modul for MySQL 5',
'MOD_OPEN_SSL' => 'OpenSSL',
'MOD_PHP4_COMPAT' => 'Zend režimu kompatibility, musí být vypnutý',
'MOD_PHP_CONFIG' => 'PHP konfigurace',
'MOD_PHP_EXTENNSIONS' => 'Rozšíření PHP',
'MOD_PHP_VERSION' => 'PHP verze alespoň 5.2.0',
'MOD_PHP_XML' => 'DOM',
'MOD_REGISTER_GLOBALS' => 'register_globals musí být vypnuté',
'MOD_REQUEST_URI' => 'REQUEST_URI nastavené',
'MOD_SERVER_CONFIG' => 'Konfigurace serveru',
'MOD_SERVER_PERMISSIONS' => 'Přístupová práva souborů/adresářů',
'MOD_SESSION_AUTOSTART' => 'session.auto_start must be off',
'MOD_SOAP' => 'SOAP',
'MOD_TOKENIZER' => 'Tokenizer',
'MOD_UNICODE_SUPPORT' => 'Podpora UTF-8',
'MOD_ZEND_OPTIMIZER' => 'Zend Optimizer instalován',
'MOD_ZEND_PLATFORM_OR_SERVER' => 'Zend Platform instalován',
'PRIVACY_POLICY' => 'ochrany osobních údajů',
'SELECT_COUNTRY_LANG' => 'Vyberte zemi',
'SELECT_DELIVERY_COUNTRY' => 'Main delivery country',
'SELECT_DELIVERY_COUNTRY_HINT' => 'Pokud bude potřeba, snadno si aktivujte více zemí pro doručení v administraci e-shopu.',
'SELECT_PLEASE_CHOOSE' => 'Please choose',
'SELECT_SETUP_LANG' => 'Vyberte jazyk',
'SELECT_SETUP_LANG_HINT' => '. Pokud bude potřeba, snadno si aktivujte více jazyků v administraci e-shopu.',
'SELECT_SETUP_LANG_SUBMIT' => 'Vybrat',
'SELECT_SHOP_LANG' => 'Shop language',
'SELECT_SHOP_LANG_HINT' => 'If needed, activate easily more languages in admin.',
'SELECT_SHOP_LOCATION' => 'Your market',
'SELECT_SHOP_LOCATION_HINT' => 'Please choose the market to which shop is focused. According to it, additional eCommerce Services will be loaded from OXID server, if you allow that.',
'SETUP_CONFIG_PERMISSIONS' => 'Z bezpečnostních důvodů nastavte konfigurační soubor config.inc.php pouze pro čtení!',
'SETUP_DIR_DELETE_NOTICE' => 'Z bezpečnostních důvodů odstraňte adresář s instalací, pokud se tak nestalo v průběhu instalace.',
'STEP_0_DESC' => 'V tomto kroku si zkontrolujte, zda váš systém vyhovuje požadavkům:',
'STEP_0_ERROR_TEXT' => 'Váš systém nesplňuje požadavky OXID eShopu',
'STEP_0_ERROR_URL' => 'http://www.oxid-esales.com/en/products/community-edition/system-requirements',
'STEP_0_TEXT' => '<ul class="req"><li class="pass"> - Váš systém vyhovuje požadavku.</li><li class="pmin"> - Tento požadavek není vhodný, nebo jen částečně. OXID eShop je bude fungovat stejně, a může být instalován ..</li><li class="fail"> - Váš systém neodpovídá požadavkům. OXID eShop bez nich nebude fungovat a nemůže být nainstalován.</li><li class="null"> - Tento požadavek nemohl být zkontrolován.</ul>',
'STEP_0_TITLE' => 'Systémové požadavky ke kontrole',
'STEP_1_ADDRESS' => 'oXy Online, s.r.o.<br>
                                                      Hudcova 78b<br>
                                                      612 00 Brno<br>
                                                      Česká republika<br>',
'STEP_1_CHECK_UPDATES' => 'Pravidelně ověřovat dostupnost nových verzí',
'STEP_1_DESC' => 'Vítejte na stránkách průvodce instalací Oxid eShopu',
'STEP_1_TEXT' => 'Přečtěte si prosím pozorně následující pokyny, aby instalace proběhla v pořádku.
                                                      Přejeme Vám úspěšnou instalaci',
'STEP_1_TITLE' => 'Vítejte',
'STEP_2_TITLE' => 'Licenční podmínky',
'STEP_3_1_CREATING_TABLES' => 'Vytváření tabulek, vložení dat ...',
'STEP_3_1_DB_CONNECT_IS_OK' => 'Připojení do databáze bylo úspěšně ověřeno ...',
'STEP_3_1_DB_CREATE_IS_OK' => 'Databáze je úspěšně vytvořena ...',
'STEP_3_1_TITLE' => 'Databáze - vytváření ...',
'STEP_3_2_CONTINUE_INSTALL_OVER_EXISTING_DB' => 'Pokud chcete přepsat všechny existující údaje a pokračovat v instalaci klikněte',
'STEP_3_2_CREATING_DATA' => 'Databáze byla úspěšně vytvořena. Čekejte prosím ...',
'STEP_3_2_TITLE' => 'Databáze - nyní jsou tabulky vytvořeny ...',
'STEP_3_CREATE_DB_WHEN_NO_DB_FOUND' => 'Pokud databáze neexistuje, bude vytvořena.',
'STEP_3_DB_DATABSE_NAME' => 'Název databáze',
'STEP_3_DB_DEMODATA' => 'Demodata',
'STEP_3_DB_HOSTNAME' => 'Databáze hostname nebo IP',
'STEP_3_DB_PASSWORD' => 'Databázové heslo',
'STEP_3_DB_PASSWORD_SHOW' => 'Zobrazit heslo',
'STEP_3_DB_USER_NAME' => 'Uživatelské jméno databáze',
'STEP_3_DESC' => 'Bude vytvořena databáze a příslušné tabulky. Uveďte prosím informace:',
'STEP_3_TITLE' => 'Databáze',
'STEP_3_UTFINFO' => 'UTF-8 kódování poskytuje lepší podporu pro speciální znaky a diakritiku než ostatní kódování. To je mimořádně důležité pro vícejazyčné eShopy. Nicméně, UTF-8 je o něco pomalejší, než je standardní kódování (ISO 8859-15). <br /> Pokud hodláte mít v eShopu vícejazyčná data, použijte UTF-8.',
'STEP_3_UTFMODE' => 'Použijte UTF-8 kódování',
'STEP_3_UTFNOTSUPPORTED' => 'OXID eShop nemůže pracovat v režimu UTF-8, v důsledku:',
'STEP_3_UTFNOTSUPPORTED1' => 'chybějící mbstring PHP modulu',
'STEP_3_UTFNOTSUPPORTED2' => 'nainstalovaný PCRE nepodporuje UTF-8',
'STEP_4_1_DATA_WAS_WRITTEN' => 'Kontrola dat a možnosti zápisu proběhla úspěšně. Čekejte prosím ...',
'STEP_4_1_TITLE' => 'Adresáře - vytváření ...',
'STEP_4_ADMIN_LOGIN_NAME' => 'E-mail administrátora (bude sloužit jako přihlašovací jméno)',
'STEP_4_ADMIN_PASS' => 'Heslo administrátora',
'STEP_4_ADMIN_PASS_CONFIRM' => 'Potvrdit heslo administrátora',
'STEP_4_ADMIN_PASS_MINCHARS' => 'libovolné znaky, min. 6 znaků',
'STEP_4_DESC' => 'Uveďte prosím nutná data pro spuštění OXID eShopu:',
'STEP_4_SHOP_DIR' => 'Adresář umístění OXID eShopu',
'STEP_4_SHOP_TMP_DIR' => 'Adresář pro dočasné soubory',
'STEP_4_SHOP_URL' => 'URL eShopu',
'STEP_4_TITLE' => 'Nastavení adresářů a URL OXID eShop',
'STEP_5_1_SERIAL_ADDED' => 'Licenční klíč úspěšně vložen. Čekejte prosím ...',
'STEP_5_1_TITLE' => 'Licenční klíč je vložen ...',
'STEP_5_DESC' => 'Prosím, potvrďte licenční klíč:',
'STEP_5_LICENCE_DESC' => 'Poskytnutý klíč je platný po dobu 30 dnů. Po uplynutí této doby vložte platný licenční klíč. Všechna vaše data a nastavení budou zachována',
'STEP_5_LICENCE_KEY' => 'Licenční klíč',
'STEP_5_TITLE' => 'OXID eShop licence',
'STEP_6_DESC' => 'Vaše OXID eShop byl nainstalován.',
'STEP_6_LINK_TO_SHOP' => 'Pokračovat do vašeho Oxid eShopu',
'STEP_6_LINK_TO_SHOP_ADMIN_AREA' => 'Pokračovat do administračního rozhraní OXID eShopu',
'STEP_6_TITLE' => 'OXID eShop úspěšně instalován',
'STEP_6_TO_SHOP' => 'Do obchodu',
'STEP_6_TO_SHOP_ADMIN' => 'Do administračního rozhraní',
'TAB_0_DESC' => 'Kontrola, zda váš systém vyhovuje požadavkům',
'TAB_0_TITLE' => 'Systémové požadavky',
'TAB_1_DESC' => 'Vítejte v průvodci instalací OXID eShopu',
'TAB_1_TITLE' => 'Vítejte',
'TAB_2_DESC' => 'Potvrdit licenční podmínky',
'TAB_2_TITLE' => 'Licenční podmínky',
'TAB_3_DESC' => 'Test připojení do databáze, vytváření tabulek',
'TAB_3_TITLE' => 'Databáze',
'TAB_4_DESC' => 'Nastavení eShopu a zápis konfiguračních souborů',
'TAB_4_TITLE' => 'Adresář',
'TAB_5_DESC' => 'Použít licenční klíč',
'TAB_5_TITLE' => 'Licence',
'TAB_6_DESC' => 'Instalace byla úspěšně dokončena',
'TAB_6_TITLE' => 'Konec',
'USE_DYNAMIC_PAGES' => 'Pro zvýšení Vašeho obchodního úspěchu získejte další informace ze serveru OXID eShop. Více informací najdete v části',
);
