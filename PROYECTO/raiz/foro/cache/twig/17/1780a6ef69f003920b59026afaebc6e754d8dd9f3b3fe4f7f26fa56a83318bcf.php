<?php

/* @rmcgirr83_genders/event/memberlist_view_user_statistics_before.html */
class __TwigTemplate_a601a49feab31d1abab3431a188fe80fe92821729c50a2d91455728f14e68a5c extends Twig_Template
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
        if ((isset($context["USER_GENDER"]) ? $context["USER_GENDER"] : null)) {
            // line 2
            echo "\t<dt>";
            echo $this->env->getExtension('phpbb')->lang("GENDER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            echo (isset($context["USER_GENDER"]) ? $context["USER_GENDER"] : null);
            echo "</dd>
";
        }
    }

    public function getTemplateName()
    {
        return "@rmcgirr83_genders/event/memberlist_view_user_statistics_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
/* <!-- IF USER_GENDER -->*/
/* 	<dt>{L_GENDER}{L_COLON}</dt> <dd>{USER_GENDER}</dd>*/
/* <!-- ENDIF -->*/
