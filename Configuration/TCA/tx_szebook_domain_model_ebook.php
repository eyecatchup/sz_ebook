<?php

return array(
    'ctrl' => array(
        'title'    => 'LLL:EXT:sz_ebook/Resources/Private/Language/locallang_db.xml:tx_szebook_domain_model_ebook',
        'label' => 'header',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,

        'versioningWS' => 2,
        'versioning_followPages' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ),
        'searchFields' => 'pdf,',
        'iconfile' => 'EXT:sz_ebook/Resources/Public/Icons/tx_szebook_domain_model_ebook.gif'
    ),
    'interface' => array(
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, image, pdf, header, scale, type',
    ),
    'types' => array(
        '1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, header, image, pdf, scale, type,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access'),
    ),
    'palettes' => array(
        '1' => array('showitem' => ''),
    ),
    'columns' => array(
        'sys_language_uid' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => array(
                    array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
                    array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
                ),
            ),
        ),
        'l10n_parent' => array(
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => array(
                    array('', 0),
                ),
                'foreign_table' => 'tx_szebook_domain_model_ebook',
                'foreign_table_where' => 'AND tx_szebook_domain_model_ebook.pid=###CURRENT_PID### AND tx_szebook_domain_model_ebook.sys_language_uid IN (-1,0)',
            ),
        ),
        'l10n_diffsource' => array(
            'config' => array(
                'type' => 'passthrough',
            ),
        ),
        't3ver_label' => array(
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            )
        ),
        'hidden' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
            'config' => array(
                'type' => 'check',
            ),
        ),
        'starttime' => array(
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
            'config' => array(
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
            ),
        ),
        'endtime' => array(
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
            'config' => array(
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
            ),
        ),
        'image' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:sz_ebook/Resources/Private/Language/locallang_db.xml:tx_szebook_domain_model_ebook.image',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image', array(
                'appearance' => array(
                    'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference'
                ),
                'minitems' => 1,
                'maxitems' => 1,
                ), $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ),
        'pdf' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:sz_ebook/Resources/Private/Language/locallang_db.xml:tx_szebook_domain_model_ebook.pdf',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'pdf', array(
                'appearance' => array(
                    'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:media.addFileReference'
                ),
                'minitems' => 1,
                'maxitems' => 1,
                ), 'pdf'
            ),
        ),
        'header' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:sz_ebook/Resources/Private/Language/locallang_db.xml:tx_szebook_domain_model_ebook.header',
            'config' => array(
                'type' => 'input',
            ),
        ),
        'scale' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:sz_ebook/Resources/Private/Language/locallang_db.xml:tx_szebook_domain_model_ebook.scale',
            'config' => array(
                'type' => 'input',
                'default' => 0.6,
                'eval' => 'double',
                'size' => 4,
                'range' => array(
                    'lower' => 0.1,
                    'upper' => 2
                ),
            ),
        ),
        'type' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:sz_ebook/Resources/Private/Language/locallang_db.xml:tx_szebook_domain_model_ebook.type',
            'config' => array(
                'type' => 'select',
                'readOnly' => true,
                'items' => array(
                    array('LLL:EXT:sz_ebook/Resources/Private/Language/locallang_db.xml:tx_szebook_domain_model_ebook.type.0', 0)
                ),
            ),
        ),
    ),
);
