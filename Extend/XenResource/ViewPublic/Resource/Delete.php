<?php

class LiamW_ResourceDeletePost_Extend_XenResource_ViewPublic_Resource_Delete extends XFCP_LiamW_ResourceDeletePost_Extend_XenResource_ViewPublic_Resource_Delete
{
	public function renderHtml()
	{
		if ($this->_params['canCreateDeleteMessage'])
		{
			$message = new XenForo_Phrase('resource_message_delete_resource', array(
				'title' => $this->_params['resource']['title'],
				'tagLine' => $this->_params['resource']['tag_line'],
				'username' => $this->_params['resource']['username'],
				'userId' => $this->_params['resource']['user_id'],
				'resourceLink' => XenForo_Link::buildPublicLink('canonical:resources', $this->_params['resource'])
			), false);

			$this->_params['deleteMessageEditorTemplate'] = XenForo_ViewPublic_Helper_Editor::getEditorTemplate(
				$this, 'delete_post_message', $message, array('height' => 200)
			);
		}
	}
}

if (false)
{
	class XFCP_LiamW_ResourceDeletePost_Extend_XenResource_ViewPublic_Resource_Delete extends XenResource_ViewPublic_Resource_Delete
	{
	}

	class XenResource_ViewPublic_Resource_Delete extends XenForo_ViewPublic_Base
	{
	} // Fake base in XFCP system
}
