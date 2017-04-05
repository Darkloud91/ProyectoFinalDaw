<?php

/* @vse_abbc3/event/acp_overall_header_head_append.html */
class __TwigTemplate_d0cdee338d285a6242e72e66e6137cabb5ede4dc207420baed936b108a61592b extends Twig_Template
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
        if ($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array())) {
            // line 2
            echo "\t";
            $asset_file = "@vse_abbc3/abbc3.min.css";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
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
        // line 4
        echo "
";
        // line 5
        if ($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "bbcodes", array())) {
            // line 6
            echo "\t";
            $asset_file = "@vse_abbc3/acp_abbc3.css";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
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
    }

    public function getTemplateName()
    {
        return "@vse_abbc3/event/acp_overall_header_head_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  40 => 5,  37 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if loops.custom_tags %}*/
/* 	{% INCLUDECSS '@vse_abbc3/abbc3.min.css' %}*/
/* {% endif %}*/
/* */
/* {% if loops.bbcodes %}*/
/* 	{% INCLUDECSS '@vse_abbc3/acp_abbc3.css' %}*/
/* {% endif %}*/
/* */
