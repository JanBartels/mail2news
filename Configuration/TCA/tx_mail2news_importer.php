<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

return array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer',
		'label'     => 'title',
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'type' => 'override_sections',
		'sortby' => 'sorting',
		'delete' => 'deleted',
		'enablecolumns' => array (
			'disabled' => 'hidden',
		),
		'iconfile'          => 'EXT:mail2news/Resources/Public/Icons/icon_tx_mail2news_importer.gif',
		'dividers2tabs'     => true,
	),

	'interface' => array (
		'showRecordFieldList' => 'hidden,title,override_sections,allowed_senders,mail_server,mail_username,mail_password,imap,use_ssl,self_signed_certificate,portno,delete_after_download,delete_rejected_mail,concatenate_text_parts,max_image_size,max_attachment_size,imageextensions,attachmentextensions,record_type,category_identifier,subheader_identifier,default_category,news_cruser_id,hide_by_default,clearcachecmd'
	),
	'columns' => array (
		'hidden' => array (
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'title' => array (
			'exclude' => 0,
			'label' => 'LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.title',
			'config' => array (
				'type' => 'input',
				'size' => '30',
			)
		),
		'override_sections' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.override_sections',
			'config' => array (
				'type' => 'select',
				'items' => array (
					array('LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.override_sections.I.0', '0'),
					array('LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.override_sections.I.1', '6'),
					array('LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.override_sections.I.2', '5'),
					array('LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.override_sections.I.3', '3'),
					array('LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.override_sections.I.4', '4'),
					array('LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.override_sections.I.5', '2'),
					array('LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.override_sections.I.6', '1'),
					array('LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.override_sections.I.7', '7'),
				),
				'size' => 1,
				'maxitems' => 1,
			)
		),
		'allowed_senders' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.allowed_senders',
			'config' => array (
				'type' => 'input',
				'size' => '30',
				'eval' => 'required',
			)
		),
		'mail_server' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.mail_server',
			'config' => array (
				'type' => 'input',
				'size' => '30',
				'eval' => 'nospace',
			)
		),
		'mail_username' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.mail_username',
			'config' => array (
				'type' => 'input',
				'size' => '30',
				'eval' => 'nospace',
			)
		),
		'mail_password' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.mail_password',
			'config' => array (
				'type' => 'input',
				'size' => '30',
				'eval' => 'nospace,password',
			)
		),
		'imap' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.imap',
			'config' => array (
				'type' => 'select',
				'items' => array (
					array('LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.imap.I.0', '0'),
					array('LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.imap.I.1', '1'),
				),
				'size' => 1,
				'maxitems' => 1,
			)
		),
		'use_ssl' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.use_ssl',
			'config' => array (
				'type' => 'check',
			)
		),
		'self_signed_certificate' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.self_signed_certificate',
			'config' => array (
				'type' => 'check',
			)
		),
		'portno' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.portno',
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'delete_after_download' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.delete_after_download',
			'config' => array (
				'type' => 'check',
			)
		),
		'delete_rejected_mail' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.delete_rejected_mail',
			'config' => array (
				'type' => 'check',
			)
		),
		'concatenate_text_parts' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.concatenate_text_parts',
			'config' => array (
				'type' => 'check',
			)
		),
		'max_image_size' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.max_image_size',
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'max_attachment_size' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.max_attachment_size',
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'imageextensions' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.imageextensions',
			'config' => array (
				'type' => 'input',
				'size' => '48',
				'max' => '255',
				'checkbox' => '',
				'eval' => 'nospace',
			)
		),
		'attachmentextensions' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.attachmentextensions',
			'config' => array (
				'type' => 'input',
				'size' => '48',
				'max' => '255',
				'checkbox' => '',
				'eval' => 'nospace',
			)
		),
		'record_type' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.record_type',
			'config' => array (
				'type' => 'select',
				'items' => array (),
				'size' => 1,
				'maxitems' => 1,
				'suppress_icons' => 1,
			)
		),
//		'default_category' => array (),
//		'default_t3blog_category' => array (),
		'cruser_id' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.news_cruser_id',
			'config' => array (
				'type' => 'select',
				'foreign_table' => 'be_users',
				'foreign_table_where' => 'AND be_users.username NOT LIKE "_cli_%" ORDER BY be_users.uid',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
				'suppress_icons' => 1,
			)
		),
		'hide_by_default' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.hide_by_default',
			'config' => array (
				'type' => 'check',
			)
		),
		'clearcachecmd' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mail2news/Resources/Private/Languages/locallang_db.xlf:tx_mail2news_importer.clearcachecmd',
			'config' => array (
				'type' => 'input',
				'size' => '30',
				'eval' => 'nospace',
			)
		)
	),
	'palettes' => array (
		'1' => array('showitem' => ''),
	),
);
?>