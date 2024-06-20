<?php

defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
    'CCM19 Plugin',
    'ccm19_ccm19',
    'EXT:ccm19/Resources/Public/Icons/Extension.svg'
    ],
    'CType',
    'ccm19'
);
