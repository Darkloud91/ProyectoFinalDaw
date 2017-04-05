<?php

/* @alfredoramos_defaultavatar/event/acp_overall_header_head_append.html */
class __TwigTemplate_25774e9422a77b8ea266c6c060005bed9f67bb55555c76b3f90377a4a22cdd72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $asset_file = "@alfredoramos_defaultavatar/css/acp_default_avatar.css";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('16');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('STYLESHEETS', '<link href="' . $asset_file . '" rel="stylesheet" type="text/css" media="screen" />
');
    }

    public function getTemplateName()
    {
        return "@alfredoramos_defaultavatar/event/acp_overall_header_head_append.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!-- INCLUDECSS @alfredoramos_defaultavatar/css/acp_default_avatar.css -->*/
