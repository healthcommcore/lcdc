<?php
class JConfig {
/* Site Settings */
var $offline = '0';
var $offline_message = 'This site is down for maintenance.<br /> Please check back again soon.';
var $sitename = 'Lung Cancer Disparities Center';
var $editor = 'tinymce';
var $list_limit = '20';
var $legacy = '0';
/* Debug Settings */
var $debug = '0';
var $debug_lang = '0';
/* Database Settings */
var $dbtype = 'mysql';
var $host = 'localhost';
var $user = 'lcdc';
var $password = 'lcdc123';
var $db = 'lcdc';
var $dbprefix = 'jos_';
/* Server Settings */
var $live_site = '';
var $secret = 'oMS3cs2E19L9b3fL';
var $gzip = '0';
var $error_reporting = '-1';
var $helpurl = 'http://help.joomla.org';
var $xmlrpc_server = '0';
var $ftp_host = '127.0.0.1';
var $ftp_port = '21';
var $ftp_user = '';
var $ftp_pass = '';
var $ftp_root = '';
var $ftp_enable = '0';
var $force_ssl = '0';
/* Locale Settings */
var $offset = '0';
var $offset_user = '0';
/* Mail Settings */
var $mailer = 'mail';
var $mailfrom = 'gvfa@oiunfd.com';
var $fromname = 'Lung Cancer Disparities Center';
var $sendmail = '/usr/sbin/sendmail';
var $smtpauth = '0';
var $smtpsecure = 'none';
var $smtpport = '25';
var $smtpuser = '';
var $smtppass = '';
var $smtphost = 'localhost';
/* Cache Settings */
var $caching = '0';
var $cachetime = '90';
var $cache_handler = 'file';
/* Meta Settings */
var $MetaDesc = 'Harvard\'s Lung Cancer Disparities Center performs innovative, interdisciplinary research to address the determinants economic status disparities in lung cancer';
var $MetaKeys = 'joomla, Joomla';
var $MetaTitle = '1';
var $MetaAuthor = '1';
/* SEO Settings */
var $sef           = '1';
var $sef_rewrite   = '0';
var $sef_suffix    = '0';
/* Feed Settings */
var $feed_limit   = 10;
var $feed_email   = 'author';
var $log_path = './logs';
var $tmp_path = './tmp';
/* Session Setting */
var $lifetime = '90';
var $session_handler = 'database';
}
?>
