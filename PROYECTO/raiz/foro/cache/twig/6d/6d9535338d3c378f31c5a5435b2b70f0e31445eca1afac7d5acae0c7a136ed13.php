<?php

/* sociallogin_ucp_social_link.html */
class __TwigTemplate_036a03f6e5b7c6d39c838f387499fbab9afd0a3d766e9c86986c22c79b6c9292 extends Twig_Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "sociallogin_ucp_social_link.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2>";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_LINK");
        echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">
\t\t<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_LINK_DESC1");
        echo "<br />";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_LINK_DESC2");
        echo "</p>
\t\t<dl>
\t\t\t<dt>
\t\t\t\t<label>";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_LINK_NETWORKS");
        echo ":</label><br>
\t\t\t\t<span>";
        // line 11
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_LINK_ACTION");
        echo "</span><br /><br />
\t\t\t</dt>
\t\t</dl>
\t\t<dl>
\t\t\t<dt>
\t\t\t\t<div class=\"oneall_social_login\" id=\"oneall_social_login_link_profile\"></div>
\t\t\t</dt>
\t\t</dl>
\t</div>
</div>

<script type=\"text/javascript\">
\t// <![CDATA[\t\t\t\t\t            
\t\tvar _oneall = _oneall || [];
\t\t_oneall.push(['social_link', 'set_providers', ['";
        // line 25
        echo (isset($context["OA_SOCIAL_LOGIN_PROVIDERS"]) ? $context["OA_SOCIAL_LOGIN_PROVIDERS"] : null);
        echo "']]);
\t\t_oneall.push(['social_link', 'set_user_token', '";
        // line 26
        echo (isset($context["OA_SOCIAL_LINK_USER_TOKEN"]) ? $context["OA_SOCIAL_LINK_USER_TOKEN"] : null);
        echo "']);
\t\t_oneall.push(['social_link', 'set_callback_uri', '";
        // line 27
        echo (isset($context["OA_SOCIAL_LINK_CALLBACK_URI"]) ? $context["OA_SOCIAL_LINK_CALLBACK_URI"] : null);
        echo "']);
\t\t_oneall.push(['social_link', 'do_render_ui', 'oneall_social_login_link_profile']);
\t// ]]>
</script>
\t\t\t\t

";
        // line 33
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "sociallogin_ucp_social_link.html", 33)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "sociallogin_ucp_social_link.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 33,  78 => 27,  74 => 26,  70 => 25,  53 => 11,  49 => 10,  41 => 7,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE ucp_header.html -->*/
/* */
/* <h2>{L_OA_SOCIAL_LOGIN_LINK}</h2>*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* 		<p>{L_OA_SOCIAL_LOGIN_LINK_DESC1}<br />{L_OA_SOCIAL_LOGIN_LINK_DESC2}</p>*/
/* 		<dl>*/
/* 			<dt>*/
/* 				<label>{L_OA_SOCIAL_LOGIN_LINK_NETWORKS}:</label><br>*/
/* 				<span>{L_OA_SOCIAL_LOGIN_LINK_ACTION}</span><br /><br />*/
/* 			</dt>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt>*/
/* 				<div class="oneall_social_login" id="oneall_social_login_link_profile"></div>*/
/* 			</dt>*/
/* 		</dl>*/
/* 	</div>*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/* 	// <![CDATA[					            */
/* 		var _oneall = _oneall || [];*/
/* 		_oneall.push(['social_link', 'set_providers', ['{OA_SOCIAL_LOGIN_PROVIDERS}']]);*/
/* 		_oneall.push(['social_link', 'set_user_token', '{OA_SOCIAL_LINK_USER_TOKEN}']);*/
/* 		_oneall.push(['social_link', 'set_callback_uri', '{OA_SOCIAL_LINK_CALLBACK_URI}']);*/
/* 		_oneall.push(['social_link', 'do_render_ui', 'oneall_social_login_link_profile']);*/
/* 	// ]]>*/
/* </script>*/
/* 				*/
/* */
/* <!-- INCLUDE ucp_footer.html -->*/
/* */
