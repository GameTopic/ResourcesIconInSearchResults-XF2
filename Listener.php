<?php

namespace nick97\ResourceIconInSearchResults;

class Listener
{
    public static function searchResultResourcePreRender(
        \XF\Template\Templater $templater, &$type, &$template, array &$params
    )
    {
        if (\XF::app()->style(\XF::visitor()->style_id)->getProperty('xfrmAllowIconsInSearchResults'))
        {
            $template = 'nick97_resource_icon_search_result_resource';
        }
    }

    public static function searchResultResourceUpdatePreRender(
        \XF\Template\Templater $templater, &$type, &$template, array &$params
    )
    {
        if (\XF::app()->style(\XF::visitor()->style_id)->getProperty('xfrmAllowIconsInSearchResults'))
        {
            $template = 'nick97_resource_icon_search_result_resource_update';
        }
    }
}