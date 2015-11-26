<?php

class LiamW_ResourceDeletePost_Extend_XenResource_Model_Resource extends XFCP_LiamW_ResourceDeletePost_Extend_XenResource_Model_Resource
{
	public function canCreateCustomResourceDeletePostMessage(array $resource, array $category, &$errorPhraseKey = '', array $viewingUser = null, array $categoryPermissions = null)
	{
		$this->standardizeViewingUserReferenceForCategory($category, $viewingUser, $categoryPermissions);

		if (!$resource['discussion_thread_id'] || !XenForo_Application::getOptions()
				->get('resourceDeleteThreadAction', 'add_post')
		)
		{
			return false; // No thread, or no post added for resource deletion
		}

		return XenForo_Permission::hasContentPermission($categoryPermissions, 'enterCustomPDM');
	}
}

if (false)
{
	class XFCP_LiamW_ResourceDeletePost_Extend_XenResource_Model_Resource extends XenResource_Model_Resource
	{
	}
}
