<?php

/* user_welcome.txt */
class __TwigTemplate_dc0da9d680cfe2caba651a93a7bad927992ab711c3dfcff3ca031f1d48548da3 extends Twig_Template
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
        echo "Subject: Bienvenido a \"";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\" - ";
        echo (isset($context["U_BOARD"]) ? $context["U_BOARD"] : null);
        echo "

";
        // line 3
        echo (isset($context["WELCOME_MSG"]) ? $context["WELCOME_MSG"] : null);
        echo "

Por favor guarde este email para futuras referencias. La información de su cuenta es la siguiente:

----------------------------
Nombre de usuario: ";
        // line 8
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "

URL del Sitio: ";
        // line 10
        echo (isset($context["U_BOARD"]) ? $context["U_BOARD"] : null);
        echo "
----------------------------

Su clave ha sido encriptada en nuestra base de datos. Si la olvidó podrá solicitar una nueva la cuál será activada en la misma forma que esta cuenta.

Gracias por registrarse.

";
        // line 17
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "user_welcome.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 17,  40 => 10,  35 => 8,  27 => 3,  19 => 1,);
    }
}
/* Subject: Bienvenido a "{SITENAME}" - {U_BOARD}*/
/* */
/* {WELCOME_MSG}*/
/* */
/* Por favor guarde este email para futuras referencias. La información de su cuenta es la siguiente:*/
/* */
/* ----------------------------*/
/* Nombre de usuario: {USERNAME}*/
/* */
/* URL del Sitio: {U_BOARD}*/
/* ----------------------------*/
/* */
/* Su clave ha sido encriptada en nuestra base de datos. Si la olvidó podrá solicitar una nueva la cuál será activada en la misma forma que esta cuenta.*/
/* */
/* Gracias por registrarse.*/
/* */
/* {EMAIL_SIG}*/
/* */
