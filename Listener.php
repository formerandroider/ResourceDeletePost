<?php

class LiamW_ResourceDeletePost_Listener
{
	public static function extendPostDataWriter($class, array &$extend)
	{
		$extend[] = 'LiamW_ResourceDeletePost_Extend_XenForo_DataWriter_DiscussionMessage_Post';
	}

	public static function extendResourceModel($class, array &$extend)
	{
		$extend[] = 'LiamW_ResourceDeletePost_Extend_XenResource_Model_Resource';
	}

	public static function extendResourceController($class, array &$extend)
	{
		$extend[] = 'LiamW_ResourceDeletePost_Extend_XenResource_ControllerPublic_Resource';
	}

	public static function extendResourceDeleteView($class, array &$extend)
	{
		$extend[] = 'LiamW_ResourceDeletePost_Extend_XenResource_ViewPublic_Resource_Delete';
	}
}