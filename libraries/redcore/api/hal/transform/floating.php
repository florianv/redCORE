<?php
/**
 * @package     Redcore
 * @subpackage  Api
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

/**
 * Transform api output
 *
 * @package     Redcore
 * @subpackage  Api
 * @since       1.2
 */
class RApiHalTransformFloating extends RApiHalTransformBase
{
	/**
	 * Method to transform an internal representation to an external one.
	 *
	 * @param   string  $definition  Field definition.
	 *
	 * @return string Transformed value.
	 */
	public static function toExternal($definition)
	{
		switch ($definition)
		{
			case '':
				$return = 'global';
				break;

			case 'left':
			case 'right':
			case 'none':
				$return = $definition;
				break;

			default:
				$return = 'undefined';
				break;
		}

		return $return;
	}
}
