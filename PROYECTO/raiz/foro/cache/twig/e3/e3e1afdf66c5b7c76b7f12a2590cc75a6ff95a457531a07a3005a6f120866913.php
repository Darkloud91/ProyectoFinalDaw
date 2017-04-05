<?php

/* @oneall_sociallogin/event/overall_header_stylesheets_after.html */
class __TwigTemplate_87d3efdd60f270e593b36a291cc98edb5a57680143113313567539c9183867ce extends Twig_Template
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
        if ((isset($context["OA_SOCIAL_LOGIN_EMBED_LIBRARY"]) ? $context["OA_SOCIAL_LOGIN_EMBED_LIBRARY"] : null)) {
            echo " 
\t\t<!-- OneAll Social Login : http://www.oneall.com //-->
\t\t<script type=\"text/javascript\">
\t\t\t// <![CDATA[\t\t
\t\t\t\t(function () {
\t\t\t\t\tvar oa = document.createElement('script'); oa.type = 'text/javascript'; 
\t\t\t\t\toa.async = true; oa.src = '//";
            // line 7
            echo (isset($context["OA_SOCIAL_LOGIN_API_SUBDOMAIN"]) ? $context["OA_SOCIAL_LOGIN_API_SUBDOMAIN"] : null);
            echo ".api.oneall.com/socialize/library.js'
\t\t\t\t\tvar s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(oa, s);
\t\t\t\t})();
\t\t\t// ]]>
\t\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@oneall_sociallogin/event/overall_header_stylesheets_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 7,  19 => 1,);
    }
}
/* <!-- IF OA_SOCIAL_LOGIN_EMBED_LIBRARY --> */
/* 		<!-- OneAll Social Login : http://www.oneall.com //-->*/
/* 		<script type="text/javascript">*/
/* 			// <![CDATA[		*/
/* 				(function () {*/
/* 					var oa = document.createElement('script'); oa.type = 'text/javascript'; */
/* 					oa.async = true; oa.src = '//{OA_SOCIAL_LOGIN_API_SUBDOMAIN}.api.oneall.com/socialize/library.js'*/
/* 					var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(oa, s);*/
/* 				})();*/
/* 			// ]]>*/
/* 		</script>*/
/* <!-- ENDIF -->*/
