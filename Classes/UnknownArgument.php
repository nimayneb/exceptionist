<?php namespace JayBeeR\Exceptionist;

/*
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

use Exception;
use JayBeeR\Exceptionist\Reason\AbsenceReason;
use JayBeeR\Exceptionist\Reason\DeficiencyReason;
use JayBeeR\Exceptionist\Scope\ArgumentScope;

/**
 *
 */
class UnknownArgument extends Exception implements DeficiencyReason, AbsenceReason, ArgumentScope
{

}
