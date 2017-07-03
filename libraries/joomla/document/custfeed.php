<?php
/**
 * @package     Joomla.Platform
 * @subpackage  Document
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined('JPATH_PLATFORM') or die;

class JDocumentCustfeed extends JDocumentFeed
{
	public function __construct($options = array())
	{
		parent::__construct($options);

		// Set document type
		$this->_type = 'custfeed';
	}

	public function addItem2(JFeedCustitem $item)
	{
		$item->source = $this->link;
		$this->items[] = $item;

		return $this;
	}
}

class JFeedCustitem extends JFeedItem
{
	public $image;
}