<?php

class LiamW_ResourceDeletePost_Installer
{
	protected static function _canBeInstalled(&$error)
	{
		$activeAddons = XenForo_Application::get('addOns');

		if (!isset($activeAddons['XenResource']))
		{
			$error = 'XenForo Resource Manager must be installed and active prior to installation!';

			return false;
		}

		return true;
	}

	public static function install()
	{
		if (!self::_canBeInstalled($error))
		{
			throw new XenForo_Exception($error, true);
		}
	}

	public static function uninstall()
	{

	}
}