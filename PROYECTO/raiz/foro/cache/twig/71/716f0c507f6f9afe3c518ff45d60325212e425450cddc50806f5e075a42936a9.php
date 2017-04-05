<?php

/* @oneall_sociallogin/event/overall_header_content_before.html */
class __TwigTemplate_ca2efcb3d07fd658fcc673cd0ddff15b82249019bdf6e076a690d5d3bdd30143 extends Twig_Template
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
        if ((isset($context["OA_SOCIAL_LOGIN_EMBED_SOCIAL_LOGIN"]) ? $context["OA_SOCIAL_LOGIN_EMBED_SOCIAL_LOGIN"] : null)) {
            echo " 
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t\t<div class=\"content\">
\t\t\t\t";
            // line 5
            if ((isset($context["OA_SOCIAL_LOGIN_PAGE_CAPTION"]) ? $context["OA_SOCIAL_LOGIN_PAGE_CAPTION"] : null)) {
                // line 6
                echo "\t\t\t\t\t<h2 class=\"login-title\">";
                echo (isset($context["OA_SOCIAL_LOGIN_PAGE_CAPTION"]) ? $context["OA_SOCIAL_LOGIN_PAGE_CAPTION"] : null);
                echo "</h2>
\t\t\t\t";
            }
            // line 8
            echo "\t\t\t\t<div class=\"oneall_social_login_providers\" id=\"oneall_social_login_overall_header_content_before\" style=\"margin-top:10px\"></div>
\t\t\t\t\t<!-- OneAll Social Login : http://www.oneall.com //-->
\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t// <![CDATA[\t\t\t\t\t            
\t\t\t\t\t\t\tvar _oneall = _oneall || [];
\t\t\t\t\t\t\t_oneall.push(['social_login', 'set_providers', ['";
            // line 13
            echo (isset($context["OA_SOCIAL_LOGIN_PROVIDERS"]) ? $context["OA_SOCIAL_LOGIN_PROVIDERS"] : null);
            echo "']]);\t
\t\t\t\t\t\t\t_oneall.push(['social_login', 'set_callback_uri', '";
            // line 14
            echo (isset($context["OA_SOCIAL_LOGIN_CALLBACK_URI"]) ? $context["OA_SOCIAL_LOGIN_CALLBACK_URI"] : null);
            echo "']);\t\t\t\t
\t\t\t\t\t\t\t_oneall.push(['social_login', 'set_custom_css_uri', ((\"https:\" == document.location.protocol) ? \"https://secure\" : \"http://public\") + '.oneallcdn.com/css/api/socialize/themes/phpbb/default.css']);
\t\t\t\t\t\t\t_oneall.push(['social_login', 'do_render_ui', 'oneall_social_login_overall_header_content_before']);
\t\t\t\t\t\t// ]]>
\t\t\t\t\t</script>\t\t
\t\t\t</div>
\t\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@oneall_sociallogin/event/overall_header_content_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 14,  41 => 13,  34 => 8,  28 => 6,  26 => 5,  19 => 1,);
    }
}
/* <!-- IF OA_SOCIAL_LOGIN_EMBED_SOCIAL_LOGIN --> */
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* 			<div class="content">*/
/* 				<!-- IF OA_SOCIAL_LOGIN_PAGE_CAPTION -->*/
/* 					<h2 class="login-title">{OA_SOCIAL_LOGIN_PAGE_CAPTION}</h2>*/
/* 				<!-- ENDIF -->*/
/* 				<div class="oneall_social_login_providers" id="oneall_social_login_overall_header_content_before" style="margin-top:10px"></div>*/
/* 					<!-- OneAll Social Login : http://www.oneall.com //-->*/
/* 					<script type="text/javascript">*/
/* 						// <![CDATA[					            */
/* 							var _oneall = _oneall || [];*/
/* 							_oneall.push(['social_login', 'set_providers', ['{OA_SOCIAL_LOGIN_PROVIDERS}']]);	*/
/* 							_oneall.push(['social_login', 'set_callback_uri', '{OA_SOCIAL_LOGIN_CALLBACK_URI}']);				*/
/* 							_oneall.push(['social_login', 'set_custom_css_uri', (("https:" == document.location.protocol) ? "https://secure" : "http://public") + '.oneallcdn.com/css/api/socialize/themes/phpbb/default.css']);*/
/* 							_oneall.push(['social_login', 'do_render_ui', 'oneall_social_login_overall_header_content_before']);*/
/* 						// ]]>*/
/* 					</script>		*/
/* 			</div>*/
/* 		</div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* */
