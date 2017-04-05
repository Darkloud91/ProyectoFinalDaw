<?php

/* @rmcgirr83_genders/ucp_user_gender.html */
class __TwigTemplate_1e352361d142fa8a0a6fdfb18b88ab7fdb64d4ce670684a7402b467630cf70f1 extends Twig_Template
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
        echo "<dl>
\t<dt><label for=\"gender_x\">";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("GENDER");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t<dd>
\t\t<label for=\"gender_m\"><input type=\"radio\" name=\"gender\" id=\"gender_m\" value=\"";
        // line 4
        echo (isset($context["GENDER_M"]) ? $context["GENDER_M"] : null);
        echo "\"";
        if ((isset($context["S_GENDER_M"]) ? $context["S_GENDER_M"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("GENDER_M");
        echo "</label>
\t\t<label for=\"gender_f\"><input type=\"radio\" name=\"gender\" id=\"gender_f\" value=\"";
        // line 5
        echo (isset($context["GENDER_F"]) ? $context["GENDER_F"] : null);
        echo "\"";
        if ((isset($context["S_GENDER_F"]) ? $context["S_GENDER_F"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("GENDER_F");
        echo "</label>
\t\t<label for=\"gender_x\"><input type=\"radio\" name=\"gender\" id=\"gender_x\" value=\"";
        // line 6
        echo (isset($context["GENDER_X"]) ? $context["GENDER_X"] : null);
        echo "\"";
        if ((isset($context["S_GENDER_X"]) ? $context["S_GENDER_X"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("GENDER_X");
        echo "</label>
\t</dd>
</dl>";
    }

    public function getTemplateName()
    {
        return "@rmcgirr83_genders/ucp_user_gender.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  38 => 5,  28 => 4,  22 => 2,  19 => 1,);
    }
}
/* <dl>*/
/* 	<dt><label for="gender_x">{L_GENDER}{L_COLON}</label></dt>*/
/* 	<dd>*/
/* 		<label for="gender_m"><input type="radio" name="gender" id="gender_m" value="{GENDER_M}"<!-- IF S_GENDER_M --> checked="checked"<!-- ENDIF --> /> {L_GENDER_M}</label>*/
/* 		<label for="gender_f"><input type="radio" name="gender" id="gender_f" value="{GENDER_F}"<!-- IF S_GENDER_F --> checked="checked"<!-- ENDIF --> /> {L_GENDER_F}</label>*/
/* 		<label for="gender_x"><input type="radio" name="gender" id="gender_x" value="{GENDER_X}"<!-- IF S_GENDER_X --> checked="checked"<!-- ENDIF --> /> {L_GENDER_X}</label>*/
/* 	</dd>*/
/* </dl>*/
