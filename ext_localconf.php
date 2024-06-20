<?php 
defined('TYPO3') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
'ccm19.typo3-plugin',
'ccm19',
[
ccm19\pluginTypo3\Controller\CCM19Controller::class => 'dataprotection'
],
[],
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

$extensionConfiguration = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class)
->get('ccm19');

if (isset($extensionConfiguration['API-KEY'])) {
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
'ccm19',
'constants',
'ccm19-key = ' . $extensionConfiguration['API-KEY']
);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:ccm19/Configuration/TypoScript/setup.typoscript">'
);


    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

    $iconRegistry->registerIcon(
    'tx-ccm19-icon',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
    'source' => 'EXT:ccm19/Resources/Public/Icons/Extension.svg'
    ]
    );
