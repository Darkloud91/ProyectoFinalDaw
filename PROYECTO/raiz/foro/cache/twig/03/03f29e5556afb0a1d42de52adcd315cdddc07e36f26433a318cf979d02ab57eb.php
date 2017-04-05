<?php

/* @alfredoramos_defaultavatar/ucp_default_avatar.html */
class __TwigTemplate_0780d76103bb6b792d4ce7304310943b6ec62b0663bc146f050109cb29d420b1 extends Twig_Template
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
\t<dt>
\t\t<label for=\"allowdefaultavatar1\">";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("UCP_ALLOW_DEFAULT_AVATAR");
        echo "</label>
\t\t<br /><span>";
        // line 4
        echo $this->env->getExtension('phpbb')->lang("UCP_ALLOW_DEFAULT_AVATAR_EXPLAIN");
        echo "</span>
\t</dt>
\t<dd>
\t\t<label>
\t\t\t<input name=\"allowdefaultavatar\" id=\"allowdefaultavatar1\" type=\"radio\" value=\"1\"";
        // line 8
        if ((isset($context["ALLOW_DEFAULT_AVATAR"]) ? $context["ALLOW_DEFAULT_AVATAR"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "
\t\t</label>
\t\t<label>
\t\t\t<input name=\"allowdefaultavatar\" id=\"allowdefaultavatar0\" type=\"radio\" value=\"0\"";
        // line 11
        if ( !(isset($context["ALLOW_DEFAULT_AVATAR"]) ? $context["ALLOW_DEFAULT_AVATAR"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "
\t\t</label>
\t</dd>
</dl>";
    }

    public function getTemplateName()
    {
        return "@alfredoramos_defaultavatar/ucp_default_avatar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  34 => 8,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <dl>*/
/* 	<dt>*/
/* 		<label for="allowdefaultavatar1">{L_UCP_ALLOW_DEFAULT_AVATAR}</label>*/
/* 		<br /><span>{L_UCP_ALLOW_DEFAULT_AVATAR_EXPLAIN}</span>*/
/* 	</dt>*/
/* 	<dd>*/
/* 		<label>*/
/* 			<input name="allowdefaultavatar" id="allowdefaultavatar1" type="radio" value="1"<!-- IF ALLOW_DEFAULT_AVATAR --> checked="checked"<!-- ENDIF --> /> {L_YES}*/
/* 		</label>*/
/* 		<label>*/
/* 			<input name="allowdefaultavatar" id="allowdefaultavatar0" type="radio" value="0"<!-- IF not ALLOW_DEFAULT_AVATAR --> checked="checked"<!-- ENDIF --> /> {L_NO}*/
/* 		</label>*/
/* 	</dd>*/
/* </dl>*/
