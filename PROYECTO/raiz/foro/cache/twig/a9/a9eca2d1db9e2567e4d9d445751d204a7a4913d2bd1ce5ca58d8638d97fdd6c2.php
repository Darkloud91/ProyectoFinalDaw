<?php

/* sociallogin.html */
class __TwigTemplate_d0de21d0fbb1c766e213c55c9600931c54aec01386881cbe801b6ae696d403e1 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "sociallogin.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<script type=\"text/javascript\" src=\"../ext/oneall/sociallogin/adm/style/js/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"../ext/oneall/sociallogin/adm/style/js/admin.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"../ext/oneall/sociallogin/adm/style/css/admin.css\" />


<div id=\"oneall_sociallogin\">

\t";
        // line 10
        if ((isset($context["OA_SOCIAL_LOGIN_SETTINGS_SAVED"]) ? $context["OA_SOCIAL_LOGIN_SETTINGS_SAVED"] : null)) {
            // line 11
            echo "\t\t<div class=\"successbox\">
\t\t\t<h3>Information</h3>
\t\t\t<p>";
            // line 13
            echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_SETTNGS_UPDATED");
            echo "</p>
\t\t</div>
\t";
        }
        // line 16
        echo "\t
\t";
        // line 17
        if ((isset($context["S_WARNING"]) ? $context["S_WARNING"] : null)) {
            // line 18
            echo "\t\t<div class=\"errorbox\">
\t   \t<h3>";
            // line 19
            echo $this->env->getExtension('phpbb')->lang("WARNING");
            echo "</h3>
\t   \t<p>";
            // line 20
            echo (isset($context["WARNING_MSG"]) ? $context["WARNING_MSG"] : null);
            echo "</p>
\t\t</div>
\t";
        }
        // line 23
        echo "
\t<h1>";
        // line 24
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_TITLE");
        echo "</h1>
\t<div class=\"section\">
\t\t<p>
\t\t\t";
        // line 27
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_INTRO");
        echo "
\t\t</p>
\t</div>\t\t\t\t\t
\t<div class=\"section welcome\">
\t\t<h3>";
        // line 31
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_TITLE_HELP");
        echo "</h3>
\t\t<ul>
\t\t\t<li>";
        // line 33
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_FOLLOW_US_TWITTER");
        echo "</li>
\t\t\t<li>";
        // line 34
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_READ_DOCS");
        echo "</li>
\t\t\t<li>";
        // line 35
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DISCOVER_PLUGINS");
        echo "</li>
\t\t\t<li>";
        // line 36
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_GET_HELP");
        echo "</li>\t\t\t
\t\t</ul>
\t</div>
\t<div class=\"section get_started\">
\t\t<h4>";
        // line 40
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_CREATE_ACCOUNT_FIRST");
        echo "</h4>
\t\t<p>
\t\t\t";
        // line 42
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_SETUP_FREE_ACCOUNT");
        echo " | ";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_VIEW_CREDENTIALS");
        echo "
\t\t</p>
\t</div>
\t\t
\t<form id=\"oneall_social_login_form\" method=\"post\" action=\"";
        // line 46
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">
\t
\t\t<fieldset>
\t\t\t<legend>";
        // line 49
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DO_ENABLE");
        echo "</legend>\t\t\t
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_disable_0\">";
        // line 52
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DO_ENABLE");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 53
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DO_ENABLE_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_disable_0\" name=\"oa_social_login_disable\" value=\"0\"";
        // line 56
        if ( !(isset($context["OA_SOCIAL_LOGIN_DISABLE"]) ? $context["OA_SOCIAL_LOGIN_DISABLE"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DO_ENABLE_YES");
        echo " <strong>(";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DEFAULT");
        echo ")</strong></label><br />
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_disable_1\" name=\"oa_social_login_disable\" value=\"1\"";
        // line 57
        if ((isset($context["OA_SOCIAL_LOGIN_DISABLE"]) ? $context["OA_SOCIAL_LOGIN_DISABLE"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DO_ENABLE_NO");
        echo "</label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t
\t\t<fieldset>
\t\t\t<legend>";
        // line 63
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_API_CONNECTION");
        echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_api_connection_handler_curl\">";
        // line 66
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_API_CONNECTION_HANDLER");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 67
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_API_CONNECTION_HANDLER_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_api_connection_handler_curl\" name=\"oa_social_login_api_connection_handler\" value=\"cr\"";
        // line 70
        if ((isset($context["OA_SOCIAL_LOGIN_API_CONNECTION_HANDLER_CURL"]) ? $context["OA_SOCIAL_LOGIN_API_CONNECTION_HANDLER_CURL"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_CURL");
        echo "</label><br />
\t\t\t\t\t<span>";
        // line 71
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_CURL_DESC");
        echo "</span> (";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_CURL_DOCS");
        echo ")<br /><br />\t\t\t\t\t
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_api_connection_handler_fsockopen\" name=\"oa_social_login_api_connection_handler\" value=\"fs\"";
        // line 72
        if ((isset($context["OA_SOCIAL_LOGIN_API_CONNECTION_HANDLER_FSOCKOPEN"]) ? $context["OA_SOCIAL_LOGIN_API_CONNECTION_HANDLER_FSOCKOPEN"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_FSOCKOPEN");
        echo "</label><br />
\t\t\t\t\t<span>";
        // line 73
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_FSOCKOPEN_DESC");
        echo "</span> (";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_FSOCKOPEN_DOCS");
        echo ")
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_api_connection_port_443\">";
        // line 78
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_API_PORT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 79
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_API_PORT_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_api_connection_port_443\" name=\"oa_social_login_api_connection_port\" value=\"443\"";
        // line 82
        if ((isset($context["OA_SOCIAL_LOGIN_API_CONNECTION_PORT_443"]) ? $context["OA_SOCIAL_LOGIN_API_CONNECTION_PORT_443"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_PORT_443");
        echo "</label><br />
\t\t\t\t\t<span>";
        // line 83
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_PORT_443_DESC");
        echo "</span><br /><br />\t\t\t\t
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_api_connection_port_80\" name=\"oa_social_login_api_connection_port\" value=\"80\"";
        // line 84
        if ((isset($context["OA_SOCIAL_LOGIN_API_CONNECTION_PORT_80"]) ? $context["OA_SOCIAL_LOGIN_API_CONNECTION_PORT_80"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_PORT_80");
        echo "</label><br />
\t\t\t\t\t<span>";
        // line 85
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_PORT_80_DESC");
        echo "</span>\t\t\t\t
\t\t\t\t</dd>
\t\t\t</dl>\t\t\t
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<span id=\"oa_social_login_api_connection_handler_result\"></span>
\t\t\t\t</dt>
\t\t\t\t<dd> \t\t\t
\t\t\t\t\t<input class=\"button2\" type=\"button\" id=\"oa_social_login_autodetect_api_connection_handler\" value=\"";
        // line 93
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_API_AUTODETECT");
        echo "\" />               
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</fieldset>\t
\t\t
\t\t<fieldset>
\t\t\t<legend>";
        // line 99
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_API_CREDENTIALS_TITLE");
        echo "</legend>\t\t
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<label for=\"oa_social_login_api_subdomain\">";
        // line 102
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_API_SUBDOMAIN");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"text\" id=\"oa_social_login_api_subdomain\" name=\"oa_social_login_api_subdomain\" value=\"";
        // line 105
        echo (isset($context["OA_SOCIAL_LOGIN_API_SUBDOMAIN"]) ? $context["OA_SOCIAL_LOGIN_API_SUBDOMAIN"] : null);
        echo "\"  size=\"60\" />
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<label for=\"oa_social_login_api_key\">";
        // line 110
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_API_PUBLIC_KEY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"text\" id=\"oa_social_login_api_key\" name=\"oa_social_login_api_key\" value=\"";
        // line 113
        echo (isset($context["OA_SOCIAL_LOGIN_API_KEY"]) ? $context["OA_SOCIAL_LOGIN_API_KEY"] : null);
        echo "\"  size=\"60\" />
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<label for=\"oa_social_login_api_secret\">";
        // line 118
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_API_PRIVATE_KEY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"text\" id=\"oa_social_login_api_secret\" name=\"oa_social_login_api_secret\" value=\"";
        // line 121
        echo (isset($context["OA_SOCIAL_LOGIN_API_SECRET"]) ? $context["OA_SOCIAL_LOGIN_API_SECRET"] : null);
        echo "\"  size=\"60\" />
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<span id=\"oa_social_login_api_test_result\"></span>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd> \t\t\t
\t\t\t\t\t\t<input class=\"button2\" type=\"button\" id=\"oa_social_login_test_api_settings\" value=\"";
        // line 129
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_API_VERIFY");
        echo "\" />               
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t</fieldset>\t\t
\t\t
\t\t<fieldset>
\t\t\t<legend>";
        // line 135
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DISPLAY_LOC");
        echo "</legend>\t\t\t
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_index_page_disable_0\">";
        // line 138
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_INDEX_PAGE_ENABLE");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 139
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_INDEX_PAGE_ENABLE_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_index_page_disable_1\" name=\"oa_social_login_index_page_disable\" value=\"1\"";
        // line 142
        if ((isset($context["OA_SOCIAL_LOGIN_INDEX_PAGE_DISABLE"]) ? $context["OA_SOCIAL_LOGIN_INDEX_PAGE_DISABLE"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_INDEX_PAGE_NO");
        echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_index_page_disable_0\" name=\"oa_social_login_index_page_disable\" value=\"0\"";
        // line 143
        if ( !(isset($context["OA_SOCIAL_LOGIN_INDEX_PAGE_DISABLE"]) ? $context["OA_SOCIAL_LOGIN_INDEX_PAGE_DISABLE"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_INDEX_PAGE_YES");
        echo " <strong>(";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DEFAULT");
        echo ")</strong></label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl class=\"dot\">
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_index_page_caption\">";
        // line 148
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_INDEX_PAGE_CAPTION");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 149
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_INDEX_PAGE_CAPTION_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<input type=\"text\" id=\"oa_social_login_index_page_caption\" name=\"oa_social_login_index_page_caption\" value=\"";
        // line 152
        echo (isset($context["OA_SOCIAL_LOGIN_INDEX_PAGE_CAPTION"]) ? $context["OA_SOCIAL_LOGIN_INDEX_PAGE_CAPTION"] : null);
        echo "\" size=\"60\" />
\t\t\t\t</dd>
\t\t\t</dl>\t\t\t\t
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_login_page_disable_0\">";
        // line 157
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_LOGIN_PAGE_ENABLE");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 158
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_LOGIN_PAGE_ENABLE_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_login_page_disable_1\" name=\"oa_social_login_login_page_disable\" value=\"1\"";
        // line 161
        if ((isset($context["OA_SOCIAL_LOGIN_LOGIN_PAGE_DISABLE"]) ? $context["OA_SOCIAL_LOGIN_LOGIN_PAGE_DISABLE"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_LOGIN_PAGE_NO");
        echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_login_page_disable_0\" name=\"oa_social_login_login_page_disable\" value=\"0\"";
        // line 162
        if ( !(isset($context["OA_SOCIAL_LOGIN_LOGIN_PAGE_DISABLE"]) ? $context["OA_SOCIAL_LOGIN_LOGIN_PAGE_DISABLE"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_LOGIN_PAGE_YES");
        echo " <strong>(";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DEFAULT");
        echo ")</strong></label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl class=\"dot\">
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_login_page_caption\">";
        // line 167
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_LOGIN_PAGE_CAPTION");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 168
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_LOGIN_PAGE_CAPTION_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<input type=\"text\" id=\"oa_social_login_login_page_caption\" name=\"oa_social_login_login_page_caption\" value=\"";
        // line 171
        echo (isset($context["OA_SOCIAL_LOGIN_LOGIN_PAGE_CAPTION"]) ? $context["OA_SOCIAL_LOGIN_LOGIN_PAGE_CAPTION"] : null);
        echo "\" size=\"60\" />
\t\t\t\t</dd>
\t\t\t</dl>\t\t\t\t
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_registration_page_disable_0\">";
        // line 176
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_REGISTRATION_PAGE_ENABLE");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 177
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_REGISTRATION_PAGE_ENABLE_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_registration_page_disable_1\" name=\"oa_social_login_registration_page_disable\" value=\"1\"";
        // line 180
        if ((isset($context["OA_SOCIAL_LOGIN_REGISTRATION_PAGE_DISABLE"]) ? $context["OA_SOCIAL_LOGIN_REGISTRATION_PAGE_DISABLE"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_REGISTRATION_PAGE_NO");
        echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_registration_page_disable_0\" name=\"oa_social_login_registration_page_disable\" value=\"0\"";
        // line 181
        if ( !(isset($context["OA_SOCIAL_LOGIN_REGISTRATION_PAGE_DISABLE"]) ? $context["OA_SOCIAL_LOGIN_REGISTRATION_PAGE_DISABLE"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_REGISTRATION_PAGE_YES");
        echo " <strong>(";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DEFAULT");
        echo ")</strong></label>\t\t\t\t\t
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl class=\"dot\">
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_registration_page_caption\">";
        // line 186
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_REGISTRATION_PAGE_CAPTION");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 187
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_REGISTRATION_PAGE_CAPTION_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<input type=\"text\" id=\"oa_social_login_registration_page_caption\" name=\"oa_social_login_registration_page_caption\" value=\"";
        // line 190
        echo (isset($context["OA_SOCIAL_LOGIN_REGISTRATION_PAGE_CAPTION"]) ? $context["OA_SOCIAL_LOGIN_REGISTRATION_PAGE_CAPTION"] : null);
        echo "\" size=\"60\" />
\t\t\t\t</dd>
\t\t\t</dl>\t\t\t\t
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_other_page_disable_0\">";
        // line 195
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_OTHER_PAGE_ENABLE");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 196
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_OTHER_PAGE_ENABLE_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_other_page_disable_1\" name=\"oa_social_login_other_page_disable\" value=\"1\"";
        // line 199
        if ((isset($context["OA_SOCIAL_LOGIN_OTHER_PAGE_DISABLE"]) ? $context["OA_SOCIAL_LOGIN_OTHER_PAGE_DISABLE"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_OTHER_PAGE_NO");
        echo " <strong>(";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DEFAULT");
        echo ")</strong></label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_other_page_disable_0\" name=\"oa_social_login_other_page_disable\" value=\"0\"";
        // line 200
        if ( !(isset($context["OA_SOCIAL_LOGIN_OTHER_PAGE_DISABLE"]) ? $context["OA_SOCIAL_LOGIN_OTHER_PAGE_DISABLE"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_OTHER_PAGE_YES");
        echo "</label>\t\t\t\t
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_other_page_caption\">";
        // line 205
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_OTHER_PAGE_CAPTION");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 206
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_OTHER_PAGE_CAPTION_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<input type=\"text\" id=\"oa_social_login_other_page_caption\" name=\"oa_social_login_other_page_caption\" value=\"";
        // line 209
        echo (isset($context["OA_SOCIAL_LOGIN_OTHER_PAGE_CAPTION"]) ? $context["OA_SOCIAL_LOGIN_OTHER_PAGE_CAPTION"] : null);
        echo "\" size=\"60\" />
\t\t\t\t</dd>
\t\t\t</dl>\t
\t\t</fieldset>\t\t
\t\t\t\t
\t\t<fieldset>
\t\t\t<legend>";
        // line 215
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DO_AVATARS");
        echo "</legend>\t\t\t
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_avatars_enable_0\">";
        // line 218
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DO_AVATARS");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 219
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DO_AVATARS_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_avatars_enable_0\" name=\"oa_social_login_avatars_enable\" value=\"0\"";
        // line 222
        if ( !(isset($context["OA_SOCIAL_LOGIN_AVATARS_ENABLE"]) ? $context["OA_SOCIAL_LOGIN_AVATARS_ENABLE"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DO_AVATARS_ENABLE_YES");
        echo " <strong>(";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DEFAULT");
        echo ")</strong></label><br />
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_avatars_enable_1\" name=\"oa_social_login_avatars_enable\" value=\"1\"";
        // line 223
        if ((isset($context["OA_SOCIAL_LOGIN_AVATARS_ENABLE"]) ? $context["OA_SOCIAL_LOGIN_AVATARS_ENABLE"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DO_AVATARS_ENABLE_NO");
        echo "</label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t
\t\t<fieldset>
\t\t\t<legend>";
        // line 229
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DO_VALIDATION");
        echo "</legend>\t\t
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_validation_0\">";
        // line 232
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DO_VALIDATION_ASK");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 233
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DO_VALIDATION_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_validate_0\" name=\"oa_social_login_validate\" value=\"0\"";
        // line 236
        if (((isset($context["OA_SOCIAL_LOGIN_VALIDATE"]) ? $context["OA_SOCIAL_LOGIN_VALIDATE"] : null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DO_VALIDATION_NEVER");
        echo " <strong>(";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DEFAULT");
        echo ")</strong></label><br />
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_validate_1\" name=\"oa_social_login_validate\" value=\"1\"";
        // line 237
        if (((isset($context["OA_SOCIAL_LOGIN_VALIDATE"]) ? $context["OA_SOCIAL_LOGIN_VALIDATE"] : null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DO_VALIDATION_ALWAYS");
        echo "</label>\t
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_validate_2\" name=\"oa_social_login_validate\" value=\"2\"";
        // line 238
        if (((isset($context["OA_SOCIAL_LOGIN_VALIDATE"]) ? $context["OA_SOCIAL_LOGIN_VALIDATE"] : null) == 2)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DO_VALIDATION_DEPENDS");
        echo "</label>\t
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</fieldset>

\t\t<fieldset>
\t\t\t<legend>";
        // line 244
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DO_LINKING");
        echo "</legend>\t\t
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"oa_social_login_disable_linking_0\">";
        // line 247
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DO_LINKING_ASK");
        echo "</label>
\t\t\t\t\t<br /><span>";
        // line 248
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DO_LINKING_DESC");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_disable_linking_0\" name=\"oa_social_login_disable_linking\" value=\"0\"";
        // line 251
        if ( !(isset($context["OA_SOCIAL_LOGIN_DISABLE_LINKING"]) ? $context["OA_SOCIAL_LOGIN_DISABLE_LINKING"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DO_LINKING_YES");
        echo " <strong>(";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DEFAULT");
        echo ")</strong></label><br />
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"oa_social_login_disable_linking_1\" name=\"oa_social_login_disable_linking\" value=\"1\"";
        // line 252
        if ((isset($context["OA_SOCIAL_LOGIN_DISABLE_LINKING"]) ? $context["OA_SOCIAL_LOGIN_DISABLE_LINKING"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DO_LINKING_NO");
        echo "</label>\t\t\t\t\t\t
\t\t\t\t</dd>\t\t\t
\t\t\t</dl>
\t\t</fieldset>
\t\t
\t\t<fieldset>\t
\t\t\t\t<legend>";
        // line 258
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DO_REDIRECT");
        echo "</legend>\t\t
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<label for=\"oa_social_login_redirect\">";
        // line 261
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DO_REDIRECT_ASK");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t<br /><span>";
        // line 262
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_DO_REDIRECT_DESC");
        echo "</span>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"text\" id=\"oa_social_login_redirect\" name=\"oa_social_login_redirect\" value=\"";
        // line 265
        echo (isset($context["OA_SOCIAL_LOGIN_REDIRECT"]) ? $context["OA_SOCIAL_LOGIN_REDIRECT"] : null);
        echo "\" size=\"60\" />
\t\t\t\t\t</dd>
\t\t\t\t</dl>\t
\t\t</fieldset>
\t\t
\t\t<fieldset>
\t\t\t<legend>";
        // line 271
        echo $this->env->getExtension('phpbb')->lang("OA_SOCIAL_LOGIN_ENABLE_NETWORKS");
        echo "</legend>\t\t\t\t\t\t
\t\t\t";
        // line 272
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "provider", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
            // line 273
            echo "\t\t\t\t<dl>\t
\t\t\t\t\t<dt class=\"provider_box\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<label for=\"oa_social_login_provider_";
            // line 275
            echo $this->getAttribute($context["provider"], "KEY", array());
            echo "\"><span class=\"oa_social_login_provider oa_social_login_provider_";
            echo $this->getAttribute($context["provider"], "KEY", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["provider"], "NAME", array());
            echo "\">";
            echo $this->getAttribute($context["provider"], "NAME", array());
            echo "</span></label>\t\t\t\t\t\t
\t\t\t\t\t\t\t<input style=\"cursor:pointer\" type=\"checkbox\" id=\"oa_social_login_provider_";
            // line 276
            echo $this->getAttribute($context["provider"], "KEY", array());
            echo "\" name=\"oa_social_login_provider_";
            echo $this->getAttribute($context["provider"], "KEY", array());
            echo "\" value=\"1\" ";
            if ($this->getAttribute($context["provider"], "ENABLE", array())) {
                echo " checked=\"checked\"";
            }
            echo "  />
\t\t\t\t\t\t\t<label for=\"oa_social_login_provider_";
            // line 277
            echo $this->getAttribute($context["provider"], "KEY", array());
            echo "\">";
            echo $this->getAttribute($context["provider"], "NAME", array());
            echo "</label>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd></dd>
\t\t\t\t</dl>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 281
        echo "\t\t\t
\t\t</fieldset>
\t\t
\t\t<fieldset class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 285
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />
\t\t\t";
        // line 286
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t\t</fieldset>
\t</form>
\t<div id=\"sid\" style=\"display: none;\">";
        // line 289
        echo (isset($context["CURRENT_SID"]) ? $context["CURRENT_SID"] : null);
        echo "</div>
</div>
";
        // line 291
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "sociallogin.html", 291)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "sociallogin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  757 => 291,  752 => 289,  746 => 286,  742 => 285,  736 => 281,  723 => 277,  713 => 276,  703 => 275,  699 => 273,  695 => 272,  691 => 271,  682 => 265,  676 => 262,  671 => 261,  665 => 258,  652 => 252,  642 => 251,  636 => 248,  632 => 247,  626 => 244,  613 => 238,  605 => 237,  595 => 236,  589 => 233,  585 => 232,  579 => 229,  566 => 223,  556 => 222,  550 => 219,  546 => 218,  540 => 215,  531 => 209,  525 => 206,  521 => 205,  509 => 200,  499 => 199,  493 => 196,  489 => 195,  481 => 190,  475 => 187,  471 => 186,  457 => 181,  449 => 180,  443 => 177,  439 => 176,  431 => 171,  425 => 168,  421 => 167,  407 => 162,  399 => 161,  393 => 158,  389 => 157,  381 => 152,  375 => 149,  371 => 148,  357 => 143,  349 => 142,  343 => 139,  339 => 138,  333 => 135,  324 => 129,  313 => 121,  306 => 118,  298 => 113,  291 => 110,  283 => 105,  276 => 102,  270 => 99,  261 => 93,  250 => 85,  242 => 84,  238 => 83,  230 => 82,  224 => 79,  219 => 78,  209 => 73,  201 => 72,  195 => 71,  187 => 70,  181 => 67,  176 => 66,  170 => 63,  157 => 57,  147 => 56,  141 => 53,  137 => 52,  131 => 49,  125 => 46,  116 => 42,  111 => 40,  104 => 36,  100 => 35,  96 => 34,  92 => 33,  87 => 31,  80 => 27,  74 => 24,  71 => 23,  65 => 20,  61 => 19,  58 => 18,  56 => 17,  53 => 16,  47 => 13,  43 => 11,  41 => 10,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <script type="text/javascript" src="../ext/oneall/sociallogin/adm/style/js/jquery-1.11.0.min.js"></script>*/
/* <script type="text/javascript" src="../ext/oneall/sociallogin/adm/style/js/admin.js"></script>*/
/* <link rel="stylesheet" type="text/css" href="../ext/oneall/sociallogin/adm/style/css/admin.css" />*/
/* */
/* */
/* <div id="oneall_sociallogin">*/
/* */
/* 	<!-- IF OA_SOCIAL_LOGIN_SETTINGS_SAVED -->*/
/* 		<div class="successbox">*/
/* 			<h3>Information</h3>*/
/* 			<p>{L_OA_SOCIAL_LOGIN_SETTNGS_UPDATED}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* 	*/
/* 	<!-- IF S_WARNING -->*/
/* 		<div class="errorbox">*/
/* 	   	<h3>{L_WARNING}</h3>*/
/* 	   	<p>{WARNING_MSG}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<h1>{L_OA_SOCIAL_LOGIN_TITLE}</h1>*/
/* 	<div class="section">*/
/* 		<p>*/
/* 			{L_OA_SOCIAL_LOGIN_INTRO}*/
/* 		</p>*/
/* 	</div>					*/
/* 	<div class="section welcome">*/
/* 		<h3>{L_OA_SOCIAL_LOGIN_TITLE_HELP}</h3>*/
/* 		<ul>*/
/* 			<li>{L_OA_SOCIAL_LOGIN_FOLLOW_US_TWITTER}</li>*/
/* 			<li>{L_OA_SOCIAL_LOGIN_READ_DOCS}</li>*/
/* 			<li>{L_OA_SOCIAL_LOGIN_DISCOVER_PLUGINS}</li>*/
/* 			<li>{L_OA_SOCIAL_LOGIN_GET_HELP}</li>			*/
/* 		</ul>*/
/* 	</div>*/
/* 	<div class="section get_started">*/
/* 		<h4>{L_OA_SOCIAL_LOGIN_CREATE_ACCOUNT_FIRST}</h4>*/
/* 		<p>*/
/* 			{L_OA_SOCIAL_LOGIN_SETUP_FREE_ACCOUNT} | {L_OA_SOCIAL_LOGIN_VIEW_CREDENTIALS}*/
/* 		</p>*/
/* 	</div>*/
/* 		*/
/* 	<form id="oneall_social_login_form" method="post" action="{U_ACTION}">*/
/* 	*/
/* 		<fieldset>*/
/* 			<legend>{L_OA_SOCIAL_LOGIN_DO_ENABLE}</legend>			*/
/* 			<dl>*/
/* 				<dt>*/
/* 					<label for="oa_social_login_disable_0">{L_OA_SOCIAL_LOGIN_DO_ENABLE}</label>*/
/* 					<br /><span>{L_OA_SOCIAL_LOGIN_DO_ENABLE_DESC}</span>*/
/* 				</dt>*/
/* 				<dd>*/
/* 					<label><input type="radio" class="radio" id="oa_social_login_disable_0" name="oa_social_login_disable" value="0"<!-- IF not OA_SOCIAL_LOGIN_DISABLE --> checked="checked"<!-- ENDIF --> /> {L_OA_SOCIAL_LOGIN_DO_ENABLE_YES} <strong>({L_OA_SOCIAL_LOGIN_DEFAULT})</strong></label><br />*/
/* 					<label><input type="radio" class="radio" id="oa_social_login_disable_1" name="oa_social_login_disable" value="1"<!-- IF OA_SOCIAL_LOGIN_DISABLE --> checked="checked"<!-- ENDIF --> /> {L_OA_SOCIAL_LOGIN_DO_ENABLE_NO}</label>*/
/* 				</dd>*/
/* 			</dl>*/
/* 		</fieldset>*/
/* 		*/
/* 		<fieldset>*/
/* 			<legend>{L_OA_SOCIAL_LOGIN_API_CONNECTION}</legend>*/
/* 			<dl>*/
/* 				<dt>*/
/* 					<label for="oa_social_login_api_connection_handler_curl">{L_OA_SOCIAL_LOGIN_API_CONNECTION_HANDLER}{L_COLON}</label>*/
/* 					<br /><span>{L_OA_SOCIAL_LOGIN_API_CONNECTION_HANDLER_DESC}</span>*/
/* 				</dt>*/
/* 				<dd>*/
/* 					<label><input type="radio" class="radio" id="oa_social_login_api_connection_handler_curl" name="oa_social_login_api_connection_handler" value="cr"<!-- IF OA_SOCIAL_LOGIN_API_CONNECTION_HANDLER_CURL --> checked="checked"<!-- ENDIF --> /> {L_OA_SOCIAL_LOGIN_CURL}</label><br />*/
/* 					<span>{L_OA_SOCIAL_LOGIN_CURL_DESC}</span> ({L_OA_SOCIAL_LOGIN_CURL_DOCS})<br /><br />					*/
/* 					<label><input type="radio" class="radio" id="oa_social_login_api_connection_handler_fsockopen" name="oa_social_login_api_connection_handler" value="fs"<!-- IF OA_SOCIAL_LOGIN_API_CONNECTION_HANDLER_FSOCKOPEN --> checked="checked"<!-- ENDIF --> /> {L_OA_SOCIAL_LOGIN_FSOCKOPEN}</label><br />*/
/* 					<span>{L_OA_SOCIAL_LOGIN_FSOCKOPEN_DESC}</span> ({L_OA_SOCIAL_LOGIN_FSOCKOPEN_DOCS})*/
/* 				</dd>*/
/* 			</dl>*/
/* 			<dl>*/
/* 				<dt>*/
/* 					<label for="oa_social_login_api_connection_port_443">{L_OA_SOCIAL_LOGIN_API_PORT}{L_COLON}</label>*/
/* 					<br /><span>{L_OA_SOCIAL_LOGIN_API_PORT_DESC}</span>*/
/* 				</dt>*/
/* 				<dd>*/
/* 					<label><input type="radio" class="radio" id="oa_social_login_api_connection_port_443" name="oa_social_login_api_connection_port" value="443"<!-- IF OA_SOCIAL_LOGIN_API_CONNECTION_PORT_443 --> checked="checked"<!-- ENDIF --> /> {L_OA_SOCIAL_LOGIN_PORT_443}</label><br />*/
/* 					<span>{L_OA_SOCIAL_LOGIN_PORT_443_DESC}</span><br /><br />				*/
/* 					<label><input type="radio" class="radio" id="oa_social_login_api_connection_port_80" name="oa_social_login_api_connection_port" value="80"<!-- IF OA_SOCIAL_LOGIN_API_CONNECTION_PORT_80--> checked="checked"<!-- ENDIF --> /> {L_OA_SOCIAL_LOGIN_PORT_80}</label><br />*/
/* 					<span>{L_OA_SOCIAL_LOGIN_PORT_80_DESC}</span>				*/
/* 				</dd>*/
/* 			</dl>			*/
/* 			<dl>*/
/* 				<dt>*/
/* 					<span id="oa_social_login_api_connection_handler_result"></span>*/
/* 				</dt>*/
/* 				<dd> 			*/
/* 					<input class="button2" type="button" id="oa_social_login_autodetect_api_connection_handler" value="{L_OA_SOCIAL_LOGIN_API_AUTODETECT}" />               */
/* 				</dd>*/
/* 			</dl>*/
/* 		</fieldset>	*/
/* 		*/
/* 		<fieldset>*/
/* 			<legend>{L_OA_SOCIAL_LOGIN_API_CREDENTIALS_TITLE}</legend>		*/
/* 				<dl>*/
/* 					<dt>*/
/* 						<label for="oa_social_login_api_subdomain">{L_OA_SOCIAL_LOGIN_API_SUBDOMAIN}{L_COLON}</label>*/
/* 					</dt>*/
/* 					<dd>*/
/* 						<input type="text" id="oa_social_login_api_subdomain" name="oa_social_login_api_subdomain" value="{OA_SOCIAL_LOGIN_API_SUBDOMAIN}"  size="60" />*/
/* 					</dd>*/
/* 				</dl>*/
/* 				<dl>*/
/* 					<dt>*/
/* 						<label for="oa_social_login_api_key">{L_OA_SOCIAL_LOGIN_API_PUBLIC_KEY}{L_COLON}</label>*/
/* 					</dt>*/
/* 					<dd>*/
/* 						<input type="text" id="oa_social_login_api_key" name="oa_social_login_api_key" value="{OA_SOCIAL_LOGIN_API_KEY}"  size="60" />*/
/* 					</dd>*/
/* 				</dl>*/
/* 				<dl>*/
/* 					<dt>*/
/* 						<label for="oa_social_login_api_secret">{L_OA_SOCIAL_LOGIN_API_PRIVATE_KEY}{L_COLON}</label>*/
/* 					</dt>*/
/* 					<dd>*/
/* 						<input type="text" id="oa_social_login_api_secret" name="oa_social_login_api_secret" value="{OA_SOCIAL_LOGIN_API_SECRET}"  size="60" />*/
/* 					</dd>*/
/* 				</dl>*/
/* 				<dl>*/
/* 					<dt>*/
/* 						<span id="oa_social_login_api_test_result"></span>*/
/* 					</dt>*/
/* 					<dd> 			*/
/* 						<input class="button2" type="button" id="oa_social_login_test_api_settings" value="{L_OA_SOCIAL_LOGIN_API_VERIFY}" />               */
/* 					</dd>*/
/* 				</dl>*/
/* 		</fieldset>		*/
/* 		*/
/* 		<fieldset>*/
/* 			<legend>{L_OA_SOCIAL_LOGIN_DISPLAY_LOC}</legend>			*/
/* 			<dl>*/
/* 				<dt>*/
/* 					<label for="oa_social_login_index_page_disable_0">{L_OA_SOCIAL_LOGIN_INDEX_PAGE_ENABLE}</label>*/
/* 					<br /><span>{L_OA_SOCIAL_LOGIN_INDEX_PAGE_ENABLE_DESC}</span>*/
/* 				</dt>*/
/* 				<dd>*/
/* 					<label><input type="radio" class="radio" id="oa_social_login_index_page_disable_1" name="oa_social_login_index_page_disable" value="1"<!-- IF OA_SOCIAL_LOGIN_INDEX_PAGE_DISABLE --> checked="checked"<!-- ENDIF --> /> {L_OA_SOCIAL_LOGIN_INDEX_PAGE_NO}</label>*/
/* 					<label><input type="radio" class="radio" id="oa_social_login_index_page_disable_0" name="oa_social_login_index_page_disable" value="0"<!-- IF not OA_SOCIAL_LOGIN_INDEX_PAGE_DISABLE --> checked="checked"<!-- ENDIF --> /> {L_OA_SOCIAL_LOGIN_INDEX_PAGE_YES} <strong>({L_OA_SOCIAL_LOGIN_DEFAULT})</strong></label>*/
/* 				</dd>*/
/* 			</dl>*/
/* 			<dl class="dot">*/
/* 				<dt>*/
/* 					<label for="oa_social_login_index_page_caption">{L_OA_SOCIAL_LOGIN_INDEX_PAGE_CAPTION}</label>*/
/* 					<br /><span>{L_OA_SOCIAL_LOGIN_INDEX_PAGE_CAPTION_DESC}</span>*/
/* 				</dt>*/
/* 				<dd>*/
/* 					<input type="text" id="oa_social_login_index_page_caption" name="oa_social_login_index_page_caption" value="{OA_SOCIAL_LOGIN_INDEX_PAGE_CAPTION}" size="60" />*/
/* 				</dd>*/
/* 			</dl>				*/
/* 			<dl>*/
/* 				<dt>*/
/* 					<label for="oa_social_login_login_page_disable_0">{L_OA_SOCIAL_LOGIN_LOGIN_PAGE_ENABLE}</label>*/
/* 					<br /><span>{L_OA_SOCIAL_LOGIN_LOGIN_PAGE_ENABLE_DESC}</span>*/
/* 				</dt>*/
/* 				<dd>*/
/* 					<label><input type="radio" class="radio" id="oa_social_login_login_page_disable_1" name="oa_social_login_login_page_disable" value="1"<!-- IF OA_SOCIAL_LOGIN_LOGIN_PAGE_DISABLE --> checked="checked"<!-- ENDIF --> /> {L_OA_SOCIAL_LOGIN_LOGIN_PAGE_NO}</label>*/
/* 					<label><input type="radio" class="radio" id="oa_social_login_login_page_disable_0" name="oa_social_login_login_page_disable" value="0"<!-- IF not OA_SOCIAL_LOGIN_LOGIN_PAGE_DISABLE --> checked="checked"<!-- ENDIF --> /> {L_OA_SOCIAL_LOGIN_LOGIN_PAGE_YES} <strong>({L_OA_SOCIAL_LOGIN_DEFAULT})</strong></label>*/
/* 				</dd>*/
/* 			</dl>*/
/* 			<dl class="dot">*/
/* 				<dt>*/
/* 					<label for="oa_social_login_login_page_caption">{L_OA_SOCIAL_LOGIN_LOGIN_PAGE_CAPTION}</label>*/
/* 					<br /><span>{L_OA_SOCIAL_LOGIN_LOGIN_PAGE_CAPTION_DESC}</span>*/
/* 				</dt>*/
/* 				<dd>*/
/* 					<input type="text" id="oa_social_login_login_page_caption" name="oa_social_login_login_page_caption" value="{OA_SOCIAL_LOGIN_LOGIN_PAGE_CAPTION}" size="60" />*/
/* 				</dd>*/
/* 			</dl>				*/
/* 			<dl>*/
/* 				<dt>*/
/* 					<label for="oa_social_login_registration_page_disable_0">{L_OA_SOCIAL_LOGIN_REGISTRATION_PAGE_ENABLE}</label>*/
/* 					<br /><span>{L_OA_SOCIAL_LOGIN_REGISTRATION_PAGE_ENABLE_DESC}</span>*/
/* 				</dt>*/
/* 				<dd>*/
/* 					<label><input type="radio" class="radio" id="oa_social_login_registration_page_disable_1" name="oa_social_login_registration_page_disable" value="1"<!-- IF OA_SOCIAL_LOGIN_REGISTRATION_PAGE_DISABLE --> checked="checked"<!-- ENDIF --> /> {L_OA_SOCIAL_LOGIN_REGISTRATION_PAGE_NO}</label>*/
/* 					<label><input type="radio" class="radio" id="oa_social_login_registration_page_disable_0" name="oa_social_login_registration_page_disable" value="0"<!-- IF not OA_SOCIAL_LOGIN_REGISTRATION_PAGE_DISABLE --> checked="checked"<!-- ENDIF --> /> {L_OA_SOCIAL_LOGIN_REGISTRATION_PAGE_YES} <strong>({L_OA_SOCIAL_LOGIN_DEFAULT})</strong></label>					*/
/* 				</dd>*/
/* 			</dl>*/
/* 			<dl class="dot">*/
/* 				<dt>*/
/* 					<label for="oa_social_login_registration_page_caption">{L_OA_SOCIAL_LOGIN_REGISTRATION_PAGE_CAPTION}</label>*/
/* 					<br /><span>{L_OA_SOCIAL_LOGIN_REGISTRATION_PAGE_CAPTION_DESC}</span>*/
/* 				</dt>*/
/* 				<dd>*/
/* 					<input type="text" id="oa_social_login_registration_page_caption" name="oa_social_login_registration_page_caption" value="{OA_SOCIAL_LOGIN_REGISTRATION_PAGE_CAPTION}" size="60" />*/
/* 				</dd>*/
/* 			</dl>				*/
/* 			<dl>*/
/* 				<dt>*/
/* 					<label for="oa_social_login_other_page_disable_0">{L_OA_SOCIAL_LOGIN_OTHER_PAGE_ENABLE}</label>*/
/* 					<br /><span>{L_OA_SOCIAL_LOGIN_OTHER_PAGE_ENABLE_DESC}</span>*/
/* 				</dt>*/
/* 				<dd>*/
/* 					<label><input type="radio" class="radio" id="oa_social_login_other_page_disable_1" name="oa_social_login_other_page_disable" value="1"<!-- IF OA_SOCIAL_LOGIN_OTHER_PAGE_DISABLE --> checked="checked"<!-- ENDIF --> /> {L_OA_SOCIAL_LOGIN_OTHER_PAGE_NO} <strong>({L_OA_SOCIAL_LOGIN_DEFAULT})</strong></label>*/
/* 					<label><input type="radio" class="radio" id="oa_social_login_other_page_disable_0" name="oa_social_login_other_page_disable" value="0"<!-- IF not OA_SOCIAL_LOGIN_OTHER_PAGE_DISABLE --> checked="checked"<!-- ENDIF --> /> {L_OA_SOCIAL_LOGIN_OTHER_PAGE_YES}</label>				*/
/* 				</dd>*/
/* 			</dl>*/
/* 			<dl>*/
/* 				<dt>*/
/* 					<label for="oa_social_login_other_page_caption">{L_OA_SOCIAL_LOGIN_OTHER_PAGE_CAPTION}</label>*/
/* 					<br /><span>{L_OA_SOCIAL_LOGIN_OTHER_PAGE_CAPTION_DESC}</span>*/
/* 				</dt>*/
/* 				<dd>*/
/* 					<input type="text" id="oa_social_login_other_page_caption" name="oa_social_login_other_page_caption" value="{OA_SOCIAL_LOGIN_OTHER_PAGE_CAPTION}" size="60" />*/
/* 				</dd>*/
/* 			</dl>	*/
/* 		</fieldset>		*/
/* 				*/
/* 		<fieldset>*/
/* 			<legend>{L_OA_SOCIAL_LOGIN_DO_AVATARS}</legend>			*/
/* 			<dl>*/
/* 				<dt>*/
/* 					<label for="oa_social_login_avatars_enable_0">{L_OA_SOCIAL_LOGIN_DO_AVATARS}</label>*/
/* 					<br /><span>{L_OA_SOCIAL_LOGIN_DO_AVATARS_DESC}</span>*/
/* 				</dt>*/
/* 				<dd>*/
/* 					<label><input type="radio" class="radio" id="oa_social_login_avatars_enable_0" name="oa_social_login_avatars_enable" value="0"<!-- IF not OA_SOCIAL_LOGIN_AVATARS_ENABLE --> checked="checked"<!-- ENDIF --> /> {L_OA_SOCIAL_LOGIN_DO_AVATARS_ENABLE_YES} <strong>({L_OA_SOCIAL_LOGIN_DEFAULT})</strong></label><br />*/
/* 					<label><input type="radio" class="radio" id="oa_social_login_avatars_enable_1" name="oa_social_login_avatars_enable" value="1"<!-- IF OA_SOCIAL_LOGIN_AVATARS_ENABLE --> checked="checked"<!-- ENDIF --> /> {L_OA_SOCIAL_LOGIN_DO_AVATARS_ENABLE_NO}</label>*/
/* 				</dd>*/
/* 			</dl>*/
/* 		</fieldset>*/
/* 		*/
/* 		<fieldset>*/
/* 			<legend>{L_OA_SOCIAL_LOGIN_DO_VALIDATION}</legend>		*/
/* 			<dl>*/
/* 				<dt>*/
/* 					<label for="oa_social_login_validation_0">{L_OA_SOCIAL_LOGIN_DO_VALIDATION_ASK}</label>*/
/* 					<br /><span>{L_OA_SOCIAL_LOGIN_DO_VALIDATION_DESC}</span>*/
/* 				</dt>*/
/* 				<dd>*/
/* 					<label><input type="radio" class="radio" id="oa_social_login_validate_0" name="oa_social_login_validate" value="0"<!-- IF OA_SOCIAL_LOGIN_VALIDATE == 0 --> checked="checked"<!-- ENDIF --> /> {L_OA_SOCIAL_LOGIN_DO_VALIDATION_NEVER} <strong>({L_OA_SOCIAL_LOGIN_DEFAULT})</strong></label><br />*/
/* 					<label><input type="radio" class="radio" id="oa_social_login_validate_1" name="oa_social_login_validate" value="1"<!-- IF OA_SOCIAL_LOGIN_VALIDATE == 1 --> checked="checked"<!-- ENDIF --> /> {L_OA_SOCIAL_LOGIN_DO_VALIDATION_ALWAYS}</label>	*/
/* 					<label><input type="radio" class="radio" id="oa_social_login_validate_2" name="oa_social_login_validate" value="2"<!-- IF OA_SOCIAL_LOGIN_VALIDATE == 2 --> checked="checked"<!-- ENDIF --> /> {L_OA_SOCIAL_LOGIN_DO_VALIDATION_DEPENDS}</label>	*/
/* 				</dd>*/
/* 			</dl>*/
/* 		</fieldset>*/
/* */
/* 		<fieldset>*/
/* 			<legend>{L_OA_SOCIAL_LOGIN_DO_LINKING}</legend>		*/
/* 			<dl>*/
/* 				<dt>*/
/* 					<label for="oa_social_login_disable_linking_0">{L_OA_SOCIAL_LOGIN_DO_LINKING_ASK}</label>*/
/* 					<br /><span>{L_OA_SOCIAL_LOGIN_DO_LINKING_DESC}</span>*/
/* 				</dt>*/
/* 				<dd>*/
/* 					<label><input type="radio" class="radio" id="oa_social_login_disable_linking_0" name="oa_social_login_disable_linking" value="0"<!-- IF not OA_SOCIAL_LOGIN_DISABLE_LINKING --> checked="checked"<!-- ENDIF --> /> {L_OA_SOCIAL_LOGIN_DO_LINKING_YES} <strong>({L_OA_SOCIAL_LOGIN_DEFAULT})</strong></label><br />*/
/* 					<label><input type="radio" class="radio" id="oa_social_login_disable_linking_1" name="oa_social_login_disable_linking" value="1"<!-- IF OA_SOCIAL_LOGIN_DISABLE_LINKING --> checked="checked"<!-- ENDIF --> /> {L_OA_SOCIAL_LOGIN_DO_LINKING_NO}</label>						*/
/* 				</dd>			*/
/* 			</dl>*/
/* 		</fieldset>*/
/* 		*/
/* 		<fieldset>	*/
/* 				<legend>{L_OA_SOCIAL_LOGIN_DO_REDIRECT}</legend>		*/
/* 				<dl>*/
/* 					<dt>*/
/* 						<label for="oa_social_login_redirect">{L_OA_SOCIAL_LOGIN_DO_REDIRECT_ASK}{L_COLON}</label>*/
/* 						<br /><span>{L_OA_SOCIAL_LOGIN_DO_REDIRECT_DESC}</span>*/
/* 					</dt>*/
/* 					<dd>*/
/* 						<input type="text" id="oa_social_login_redirect" name="oa_social_login_redirect" value="{OA_SOCIAL_LOGIN_REDIRECT}" size="60" />*/
/* 					</dd>*/
/* 				</dl>	*/
/* 		</fieldset>*/
/* 		*/
/* 		<fieldset>*/
/* 			<legend>{L_OA_SOCIAL_LOGIN_ENABLE_NETWORKS}</legend>						*/
/* 			<!-- BEGIN provider -->*/
/* 				<dl>	*/
/* 					<dt class="provider_box">							*/
/* 							<label for="oa_social_login_provider_{provider.KEY}"><span class="oa_social_login_provider oa_social_login_provider_{provider.KEY}" title="{provider.NAME}">{provider.NAME}</span></label>						*/
/* 							<input style="cursor:pointer" type="checkbox" id="oa_social_login_provider_{provider.KEY}" name="oa_social_login_provider_{provider.KEY}" value="1" <!-- IF provider.ENABLE --> checked="checked"<!-- ENDIF -->  />*/
/* 							<label for="oa_social_login_provider_{provider.KEY}">{provider.NAME}</label>*/
/* 					</dt>*/
/* 					<dd></dd>*/
/* 				</dl>*/
/* 			<!-- END provider -->			*/
/* 		</fieldset>*/
/* 		*/
/* 		<fieldset class="submit-buttons">*/
/* 			<input class="button1" type="submit" id="submit" name="submit" value="{L_SUBMIT}" />*/
/* 			{S_FORM_TOKEN}*/
/* 		</fieldset>*/
/* 	</form>*/
/* 	<div id="sid" style="display: none;">{CURRENT_SID}</div>*/
/* </div>*/
/* <!-- INCLUDE overall_footer.html -->*/
/* */
