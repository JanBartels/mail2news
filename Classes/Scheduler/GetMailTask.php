<?php
namespace JBartels\mail2news\Scheduler;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * This class provides Scheduler plugin implementation
 *
 * @author Jan Bartels <j.bartels@arcor.de>
 */
class GetMailTask extends \TYPO3\CMS\Scheduler\Task\AbstractTask {

	/**
	 * Function execute from the Scheduler
	 *
	 * @return boolean TRUE on successful execution, FALSE on error
	 * @throws \InvalidArgumentException if the email template file can not be read
	 */
	public function execute() {

		/** @var JBartels\mail2news\Mail\GetMail $getmail */
		$getmail = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\JBartels\mail2news\Mail\GetMail::class);
		$getmail->process_all_importers(unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['mail2news']));

		return TRUE;
	}
}
