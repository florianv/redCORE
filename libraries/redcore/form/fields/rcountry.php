<?php
/**
 * @package     Redcore
 * @subpackage  Field
 *
 * @copyright   Copyright (C) 2008 - 2015 redCOMPONENT.com. All rights reserved.
 * @license     GNU General Public License version 2 or later, see LICENSE.
 */

defined('JPATH_PLATFORM') or die;

JFormHelper::loadFieldClass('list');

/**
 * Form Field to load a list of country
 *
 * @package     Redcore
 * @subpackage  Field
 * @since       1.0
 */
class JFormFieldRcountry extends JFormFieldList
{
	/**
	 * The form field type.
	 *
	 * @var    string
	 * @since  1.0
	 */
	protected $type = 'Rcountry';

	/**
	 * Cached array of the items.
	 *
	 * @var    array
	 * @since  1.0
	 */
	protected static $options = array();

	/**
	 * Translate options labels ?
	 *
	 * @var  boolean
	 * @since  1.0
	 */
	protected $translate = false;

	/**
	 * Method to get the options to populate list
	 *
	 * @return  array  The field option objects.
	 *
	 * @since   1.0
	 */
	protected function getOptions()
	{
		$options = array_merge(parent::getOptions(), RHelperCountry::getOptions());

		return $options;
	}
}
