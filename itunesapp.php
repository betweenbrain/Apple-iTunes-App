<?php defined('_JEXEC') or die;

/**
 * File       itunesapp.php
 * Created    4/17/13 4:48 PM
 * Author     Matt Thomas
 * Website    http://betweenbrain.com
 * Email      matt@betweenbrain.com
 * Support    https://github.com/betweenbrain/
 * Copyright  Copyright (C) 2013 betweenbrain llc. All Rights Reserved.
 * License    GNU GPL v3 or later
 */

jimport('joomla.plugin.plugin');
jimport('joomla.html.parameter');

class plgSystemItunesapp extends JPlugin {

	function plgSystemItunesapp(&$subject, $params) {
		parent::__construct($subject, $params);

		$this->doc = JFactory::getDocument();
	}

	function onAfterRoute() {

		$appId     = htmlspecialchars($this->params->get('appId'));
		$appArg    = htmlspecialchars($this->params->get('appArg'));
		$menuItems = htmlspecialchars($this->params->get('menuItems'));

		if (!is_array($menuItems)) {
			$menuItems = str_split($menuItems, strlen($menuItems));
		}

		if (in_array($this->active->id, $menuItems)) {

			$this->doc->setMetaData('apple-itunes-app', 'app-id=' . $appId . ', app-argument=' . $appArg . '');
		}
	}
}
