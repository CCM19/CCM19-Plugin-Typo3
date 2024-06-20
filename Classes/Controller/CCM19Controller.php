<?php

namespace ccm19\typo3Plugin\Controller;

use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;

class CCM19Controller extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    public function dataprotectionAction(): void
    {
		$extensionConfiguration = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(ExtensionConfiguration::class)
			->get('ccm19');
		$this->view->assign('ccm19-key', $extensionConfiguration['API-KEY']);
    }
}
