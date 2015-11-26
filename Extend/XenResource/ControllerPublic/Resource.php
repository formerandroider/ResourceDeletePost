<?php

class LiamW_ResourceDeletePost_Extend_XenResource_ControllerPublic_Resource extends XFCP_LiamW_ResourceDeletePost_Extend_XenResource_ControllerPublic_Resource
{
	public function actionDelete()
	{
		if ($this->isConfirmedPost())
		{
			/** @var XenForo_ControllerHelper_Editor $editorHelper */
			$editorHelper = $this->getHelper('Editor');

			$message = $editorHelper->getMessageText('delete_post_message', $this->_input);
			$message = XenForo_Helper_String::autoLinkBbCode($message);

			if ($message)
			{
				XenForo_Application::set('liam_resourceDeletePost_message', $message);
			}

			return parent::actionDelete();
		}
		else
		{
			$response = parent::actionDelete();

			list($resource, $category) = $this->_getResourceHelper()->assertResourceValidAndViewable();

			if ($response instanceof XenForo_ControllerResponse_View)
			{
				$response->params['canCreateDeleteMessage'] = $this->_getResourceModel()
					->canCreateCustomResourceDeletePostMessage($resource, $category);
			}

			return $response;
		}
	}
}

if (false)
{
	class XFCP_LiamW_ResourceDeletePost_Extend_XenResource_ControllerPublic_Resource extends XenResource_ControllerPublic_Resource
	{
	}
}
