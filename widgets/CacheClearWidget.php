<?php
namespace Craft;

class CacheClearWidget extends BaseWidget
{
	public function getName()
	{
		return Craft::t('Clear Cache');
	}

	public function getBodyHtml()
	{
		$settings = craft()->plugins->getPlugin('cacheClear')->getSettings();

		return craft()->templates->render('cacheclear/_widget', array(
			'key' => $settings->key
		));
	}
}
