<?php defined('_JEXEC') or die;

/**
 * File       wtf.php
 * Created    10/28/13 5:05 PM
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Support    https://github.com/betweenbrain/
 * Copyright  Copyright (C) 2013 betweenbrain llc. All Rights Reserved.
 * License    GNU GPL v3 or later
 */

class plgSystemWtf extends JPlugin {

	function plgSystemWtf(&$subject, $params) {
		parent::__construct($subject, $params);

		$this->app = JFactory::getApplication();
		$this->doc = JFactory::getDocument();
	}

	function onAfterRoute() {


			die('WTF Joomla!');
	}
}
