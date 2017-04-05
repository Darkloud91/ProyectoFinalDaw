<?php

/* @alfredoramos_defaultavatar/event/ucp_prefs_personal_append.html */
class __TwigTemplate_2c3f7eb405a71439f27ff2b851fde095236c6680cf7334ca85df308d10691c0f extends Twig_Template
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
        $location = "ucp_default_avatar.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_default_avatar.html", "@alfredoramos_defaultavatar/event/ucp_prefs_personal_append.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "@alfredoramos_defaultavatar/event/ucp_prefs_personal_append.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!-- INCLUDE ucp_default_avatar.html -->*/
