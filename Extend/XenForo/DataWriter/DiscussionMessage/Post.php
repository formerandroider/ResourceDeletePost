<?php

class LiamW_ResourceDeletePost_Extend_XenForo_DataWriter_DiscussionMessage_Post extends XFCP_LiamW_ResourceDeletePost_Extend_XenForo_DataWriter_DiscussionMessage_Post
{
	protected function _messagePreSave()
	{
		if (XenForo_Application::isRegistered('liam_resourceDeletePost_message'))
		{
			$this->set('message', XenForo_Application::get('liam_resourceDeletePost_message'));
		}

		parent::_messagePreSave();
	}
}

if (false)
{
	class XFCP_LiamW_ResourceDeletePost_Extend_XenForo_DataWriter_DiscussionMessage_Post extends XenForo_DataWriter_DiscussionMessage_Post
	{
	}
}
