<?php
if (!defined ('TYPO3_MODE')) {
 	die ('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['JBartels\\mail2news\\Scheduler\\GetMailTask'] = array(
	'extension' => 'mail2news',
	'title' => 'LLL:EXT:mail2news/Resources/Private/Languages/locallang.xlf:tasks.getmail.name',
	'description' => 'LLL:EXT:mail2news/Resources/Private/Languages/locallang.xlf:tasks.getmail.description',
);

?>