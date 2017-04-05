<?php

/* @rmcgirr83_genders/event/viewtopic_body_postrow_custom_fields_after.html */
class __TwigTemplate_a436e8c595cb3ef0057f8cd68ade182567538325d08a529f85ad90dcbe77fece extends Twig_Template
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
        if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "USER_GENDER", array())) {
            // line 2
            echo "\t<dd class=\"profile-gender\"><strong>";
            echo $this->env->getExtension('phpbb')->lang("GENDER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "USER_GENDER", array());
            echo "</dd>
";
        }
    }

    public function getTemplateName()
    {
        return "@rmcgirr83_genders/event/viewtopic_body_postrow_custom_fields_after.html";
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
/* <!-- IF postrow.USER_GENDER -->*/
/* 	<dd class="profile-gender"><strong>{L_GENDER}{L_COLON}</strong> {postrow.USER_GENDER}</dd>*/
/* <!-- ENDIF -->*/
