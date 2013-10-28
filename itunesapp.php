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


class plgSystemItunesapp extends JPlugin {

	function plgSystemItunesapp(&$subject, $params) {
		parent::__construct($subject, $params);

		$this->app = JFactory::getApplication();
		$this->doc = JFactory::getDocument();
	}

	function onAfterRoute() {

		if ($this->app->isAdmin()) {
			return TRUE;
		}

		$activeItem = JSite::getMenu()->getActive()->id;
		$appArg     = htmlspecialchars($this->params->get('appArg'));
		$appId      = htmlspecialchars($this->params->get('appId'));
		$menuItems  = $this->params->get('menuItems');

		//die('<pre>' . print_r(JSite::getMenu()->getActive()->id, true) . '</pre>');

		if (!is_array($menuItems)) {
			$menuItems = str_split($menuItems, strlen($menuItems));
		}

		if (in_array($activeItem, $menuItems)) {

			$this->doc->setMetaData('apple-itunes-app', 'app-id=' . $appId . ', app-argument=' . $appArg . '');
		}
	}
}
