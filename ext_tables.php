<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mail2news_importer');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
mod.tx_mail2news {
	fieldPresetValues {
		imageorient = 17
		imagecols = 1
		sectionindex = 1
	}
	fieldMarkers {
		short = #short#
		allow_comments = #comments#
		tagClouds = #tags#
		categories = #cats#
		header = #header#
		tx_newscalendar_state = #cal#
	}
}
');

// Add CSH support (Help icons) to extension tables
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_mail2news_importer','EXT:mail2news/Resources/Private/Languages/locallang_csh_importer.xlf');

$tabgeneral = '--div--;LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.tabs.general, hidden;;1;;1-1-1, title;;;;2-2-2, allowed_senders, override_sections;;;;3-3-3,';
$tabmailbox = '--div--;LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.tabs.mailbox, mail_server, mail_username, mail_password, imap, use_ssl, self_signed_certificate, portno, delete_after_download, delete_rejected_mail,';
$tabprocessing = '--div--;LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.tabs.processing, concatenate_text_parts, max_image_size, max_attachment_size, imageextensions, attachmentextensions,';
$tabextended = '--div--;LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.tabs.extended,';
$tabrecord = '--div--;LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.tabs.record, record_type';

// Change available fields and options depending on which extensions are installed
if ( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('tt_news') ) {
	$GLOBALS['TCA']['tx_mail2news_importer']['columns']['record_type']['config']['items'][0] = array('LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.record_type.I.1' , 'tt_news');

	// Copy TCA definition of tt_news category field, and only change the label
	$GLOBALS['TCA']['tx_mail2news_importer']['columns']['default_category'] = $GLOBALS['TCA']['tt_news']['columns']['category'];
	$GLOBALS['TCA']['tx_mail2news_importer']['columns']['default_category']['label'] = 'LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.default_category';
	$GLOBALS['TCA']['tx_mail2news_importer']['columns']['default_category']['config']['minitems'] = 0;
	unset($GLOBALS['TCA']['tx_mail2news_importer']['columns']['default_category']['config']['MM']);

	$GLOBALS['TCA']['tx_mail2news_importer']['showRecordFieldList'] .= ',default_category';
	$tabrecord .= ', default_category';
}

if ( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('t3blog') ) {
	$GLOBALS['TCA']['tx_mail2news_importer']['columns']['record_type']['config']['items'][1] = array('LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.record_type.I.2' , 't3blog');

	// Copy TCA definition of t3blog category field, and only change the label and set it as not-required
	$GLOBALS['TCA']['tx_mail2news_importer']['columns']['default_t3blog_category'] = $GLOBALS['TCA']['tx_t3blog_post']['columns']['cat'];
	$GLOBALS['TCA']['tx_mail2news_importer']['columns']['default_t3blog_category']['label'] = 'LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.default_t3blog_category';
	$GLOBALS['TCA']['tx_mail2news_importer']['columns']['default_t3blog_category']['config']['minitems'] = 0;
	unset($GLOBALS['TCA']['tx_mail2news_importer']['columns']['default_t3blog_category']['config']['MM']);

	$GLOBALS['TCA']['tx_mail2news_importer']['showRecordFieldList'] .= ',default_t3blog_category';
	$tabrecord .= ', default_t3blog_category';
}

$tabrecord .= ', cruser_id, hide_by_default, clearcachecmd,';


$GLOBALS['TCA']['tx_mail2news_importer']['types'] = array (
	'0' => array('showitem' => $tabgeneral . $tabmailbox . $tabprocessing . $tabrecord . $tabextended),
	'6' => array('showitem' => $tabgeneral . $tabmailbox . $tabextended),
	'5' => array('showitem' => $tabgeneral . $tabprocessing . $tabextended),
	'3' => array('showitem' => $tabgeneral . $tabrecord . $tabextended),
	'4' => array('showitem' => $tabgeneral . $tabmailbox . $tabprocessing . $tabextended),
	'2' => array('showitem' => $tabgeneral . $tabmailbox . $tabrecord . $tabextended),
	'1' => array('showitem' => $tabgeneral . $tabprocessing . $tabrecord . $tabextended),
	'7' => array('showitem' => $tabgeneral . $tabextended),
);

?>