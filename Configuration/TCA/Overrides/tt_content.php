<?php

defined('TYPO3') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'ccm19',
	'CCM19',
	'CCM19',
    'tx-ccm19-icon'
);

$GLOBALS['TCA']['tt_content']['ctrl']['type-icon_classes']['ccm19_ccm19'] = 'tx-ccm19-icon';
$GLOBALS['TCA']['tt_content']['types']['ccm19_ccm19'] = [
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;;general,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended'
];
