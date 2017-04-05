<?php

/* @rmcgirr83_genders/event/ucp_profile_profile_info_before.html */
class __TwigTemplate_29340208c5181ac715c3661a495e2d90b1be24c5ec4bd9850eb0ee35f54fc044 extends Twig_Template
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
        $location = "ucp_user_gender.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_user_gender.html", "@rmcgirr83_genders/event/ucp_profile_profile_info_before.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "@rmcgirr83_genders/event/ucp_profile_profile_info_before.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!-- INCLUDE ucp_user_gender.html -->*/
/* */
