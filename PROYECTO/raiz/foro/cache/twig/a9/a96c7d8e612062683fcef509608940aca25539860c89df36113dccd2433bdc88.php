<?php

/* overall_header.html */
class __TwigTemplate_47e913960741e9e9ddcced2cb536908d1e90d9d9b73f0882599314cd174b3783 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo "\" lang=\"";
        echo (isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null);
        echo "\">
<head>
<link rel=\"shortcut icon\" href=\"http://www.tosbase.es/foro/Favicon.ico\"/>
<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 8
        echo (isset($context["META"]) ? $context["META"] : null);
        echo "
<title>";
        // line 9
        if ((isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null)) {
            echo "(";
            echo (isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null);
            echo ") ";
        }
        if (( !(isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null) &&  !(isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null))) {
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
            echo " - ";
        }
        if ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo " - ";
        } elseif ((isset($context["S_IN_UCP"]) ? $context["S_IN_UCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("UCP");
            echo " - ";
        }
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        if (((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null) || (isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null))) {
            echo " - ";
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        }
        echo "</title>

";
        // line 11
        $location = "_style_config.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("_style_config.html", "overall_header.html", 11)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 12
        echo "
";
        // line 13
        if ((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null)) {
            // line 14
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_OVERALL"]) ? $context["S_ENABLE_FEEDS_OVERALL"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "\">";
            }
            // line 15
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_NEWS"]) ? $context["S_ENABLE_FEEDS_NEWS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_NEWS");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=news\">";
            }
            // line 16
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_FORUMS"]) ? $context["S_ENABLE_FEEDS_FORUMS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=forums\">";
            }
            // line 17
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS"]) ? $context["S_ENABLE_FEEDS_TOPICS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=topics\">";
            }
            // line 18
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"]) ? $context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=topics_active\">";
            }
            // line 19
            echo "\t";
            if (((isset($context["S_ENABLE_FEEDS_FORUM"]) ? $context["S_ENABLE_FEEDS_FORUM"] : null) && (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo " - ";
                echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?f=";
                echo (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null);
                echo "\">";
            }
            // line 20
            echo "\t";
            if (((isset($context["S_ENABLE_FEEDS_TOPIC"]) ? $context["S_ENABLE_FEEDS_TOPIC"] : null) && (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
                echo " - ";
                echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?f=";
                echo (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null);
                echo "&amp;t=";
                echo (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null);
                echo "\">";
            }
            // line 21
            echo "\t";
        }
        // line 23
        echo "
";
        // line 24
        if ((isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null)) {
            // line 25
            echo "\t<link rel=\"canonical\" href=\"";
            echo (isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null);
            echo "\">
";
        }
        // line 27
        echo "
";
        // line 28
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            // line 29
            echo "<script>
\tWebFontConfig = {
\t\tgoogle: {
\t\t\tfamilies: ['Open+Sans:600:cyrillic-ext,latin,greek-ext,greek,vietnamese,latin-ext,cyrillic']
\t\t}
\t};

\t(function(d) {
\t\tvar wf = d.createElement('script'), s = d.scripts[0];
\t\twf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
\t\twf.async = true;
\t\ts.parentNode.insertBefore(wf, s);
\t})(document);
</script>
\t<link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\" rel=\"stylesheet\">
";
        } else {
            // line 45
            echo "\t<link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/fonts/font-awesome-4.5.0/css/font-awesome.min.css\" rel=\"stylesheet\">
";
        }
        // line 47
        echo "<link href=\"";
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/fonts/glyphicons-pro-1.9.2/css/glyphicons.css\" rel=\"stylesheet\">

<link href=\"";
        // line 49
        echo (isset($context["T_STYLESHEET_LINK"]) ? $context["T_STYLESHEET_LINK"] : null);
        echo "\" rel=\"stylesheet\">

";
        // line 51
        if (((isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null) == "rtl")) {
            // line 52
            echo "\t<link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/bidi.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 54
        echo "
";
        // line 55
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            // line 56
            echo "\t<link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/plupload.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 58
        echo "
<!--[if lte IE 9]>
\t<link href=\"";
        // line 60
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/tweaks.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
<![endif]-->

";
        // line 63
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('vse_abbc3', '__main__'));
        $this->env->loadTemplate('@vse_abbc3/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 64
        echo "
";
        // line 65
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "STYLESHEETS", array());
        echo "

";
        // line 67
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('oneall_sociallogin', '__main__'));
        $this->env->loadTemplate('@oneall_sociallogin/event/overall_header_stylesheets_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 68
        echo "
</head>
<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 70
        echo (isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null);
        echo " ";
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo " ";
        echo (isset($context["BODY_CLASS"]) ? $context["BODY_CLASS"] : null);
        echo "\" data-online-text=\"";
        echo addslashes($this->env->getExtension('phpbb')->lang("ONLINE"));
        echo "\">

";
        // line 72
        // line 73
        echo "
";
        // line 74
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "WRAP_HEADER", array()) == 1)) {
            // line 75
            echo "<div id=\"wrap\" class=\"page-width\">
";
        }
        // line 77
        echo "\t<a id=\"top\" class=\"anchor\" accesskey=\"t\"></a>
\t<div id=\"page-header\" class=\"page-width\">
\t\t<div class=\"headerbar\" role=\"banner\">
\t\t\t<div class=\"inner\">

\t\t\t<div id=\"site-description\">
\t\t\t\t<a id=\"logo\" class=\"logo\" href=\"";
        // line 83
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
        } else {
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        }
        echo "\" title=\"";
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
        } else {
            echo $this->env->getExtension('phpbb')->lang("INDEX");
        }
        echo "\"><img src=\"";
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/images/logo.png\" data-src-hd=\"";
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/images/logo_hd.png\" /></a>
\t\t\t\t<p class=\"sitename\">";
        // line 84
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "</p>
\t\t\t\t<p>";
        // line 85
        echo (isset($context["SITE_DESCRIPTION"]) ? $context["SITE_DESCRIPTION"] : null);
        echo "</p>
\t\t\t\t<p class=\"skiplink\"><a href=\"#start_here\">";
        // line 86
        echo $this->env->getExtension('phpbb')->lang("SKIP");
        echo "</a></p>
\t\t\t</div>

\t\t\t";
        // line 89
        // line 90
        echo "\t\t\t";
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) &&  !(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null))) {
            // line 91
            echo "\t\t\t";
            ob_start();
            // line 92
            echo "\t\t\t<div id=\"search-box\" class=\"search-box search-header\" role=\"search\">
\t\t\t\t<form action=\"";
            // line 93
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" method=\"get\" id=\"search\">
\t\t\t\t<fieldset>
\t\t\t\t\t<input name=\"keywords\" id=\"keywords\" type=\"search\" maxlength=\"128\" title=\"";
            // line 95
            echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
            echo "\" class=\"inputbox search tiny\" size=\"20\" value=\"";
            echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
            echo "\" placeholder=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_MINI");
            echo "\" />
\t\t\t\t\t<button class=\"button icon-button search-icon\" type=\"submit\" title=\"";
            // line 96
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</button>
\t\t\t\t\t<a href=\"";
            // line 97
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" class=\"button icon-button search-adv-icon\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "</a>
\t\t\t\t\t";
            // line 98
            echo (isset($context["S_SEARCH_HIDDEN_FIELDS"]) ? $context["S_SEARCH_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t";
            $value = ('' === $value = ob_get_clean()) ? '' : new \Twig_Markup($value, $this->env->getCharset());
            $context['definition']->set('SEARCH_BOX', $value);
            // line 103
            echo "\t\t\t";
            if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SEARCH_IN_NAVBAR", array()) == 0)) {
                echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SEARCH_BOX", array());
            }
            // line 104
            echo "\t\t\t";
        }
        // line 105
        echo "
\t\t\t</div>
\t\t</div>

";
        // line 109
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "WRAP_HEADER", array()) == 2)) {
            // line 110
            echo "</div>
<div id=\"wrap\" class=\"page-width\">
<div>
";
        }
        // line 114
        echo "
\t\t";
        // line 115
        // line 116
        echo "\t\t";
        $location = "navbar_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_header.html", "overall_header.html", 116)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 117
        echo "\t</div>

";
        // line 119
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "WRAP_HEADER", array()) == 0)) {
            // line 120
            echo "<div id=\"wrap\" class=\"page-width\">
";
        }
        // line 122
        echo "
\t";
        // line 123
        // line 124
        echo "
\t<a id=\"start_here\" class=\"anchor\"></a>
\t<div id=\"page-body\" role=\"main\">
\t\t";
        // line 127
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "BREADCRUMBS", array());
        echo "
\t\t";
        // line 128
        if ((((isset($context["S_BOARD_DISABLED"]) ? $context["S_BOARD_DISABLED"] : null) && (isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) && ((isset($context["U_MCP"]) ? $context["U_MCP"] : null) || (isset($context["U_ACP"]) ? $context["U_ACP"] : null)))) {
            // line 129
            echo "\t\t<div id=\"information\" class=\"rules\">
\t\t\t<div class=\"inner\">
\t\t\t\t<strong>";
            // line 131
            echo $this->env->getExtension('phpbb')->lang("INFORMATION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            echo $this->env->getExtension('phpbb')->lang("BOARD_DISABLED");
            echo "
\t\t\t</div>
\t\t</div>
\t\t
\t\t";
        }
        // line 136
        echo "
\t\t";
        // line 137
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('oneall_sociallogin', '__main__'));
        $this->env->loadTemplate('@oneall_sociallogin/event/overall_header_content_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  466 => 137,  463 => 136,  452 => 131,  448 => 129,  446 => 128,  442 => 127,  437 => 124,  436 => 123,  433 => 122,  429 => 120,  427 => 119,  423 => 117,  410 => 116,  409 => 115,  406 => 114,  400 => 110,  398 => 109,  392 => 105,  389 => 104,  384 => 103,  375 => 98,  367 => 97,  361 => 96,  353 => 95,  348 => 93,  345 => 92,  342 => 91,  339 => 90,  338 => 89,  332 => 86,  328 => 85,  324 => 84,  306 => 83,  298 => 77,  294 => 75,  292 => 74,  289 => 73,  288 => 72,  277 => 70,  273 => 68,  268 => 67,  263 => 65,  260 => 64,  255 => 63,  247 => 60,  243 => 58,  235 => 56,  233 => 55,  230 => 54,  222 => 52,  220 => 51,  215 => 49,  209 => 47,  203 => 45,  185 => 29,  183 => 28,  180 => 27,  174 => 25,  172 => 24,  169 => 23,  166 => 21,  149 => 20,  134 => 19,  123 => 18,  112 => 17,  101 => 16,  90 => 15,  79 => 14,  77 => 13,  74 => 12,  62 => 11,  37 => 9,  33 => 8,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{S_CONTENT_DIRECTION}" lang="{S_USER_LANG}">*/
/* <head>*/
/* <link rel="shortcut icon" href="http://www.tosbase.es/foro/Favicon.ico"/>*/
/* <meta charset="utf-8" />*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1" />*/
/* {META}*/
/* <title><!-- IF UNREAD_NOTIFICATIONS_COUNT -->({UNREAD_NOTIFICATIONS_COUNT}) <!-- ENDIF --><!-- IF not S_VIEWTOPIC and not S_VIEWFORUM -->{SITENAME} - <!-- ENDIF --><!-- IF S_IN_MCP -->{L_MCP} - <!-- ELSEIF S_IN_UCP -->{L_UCP} - <!-- ENDIF -->{PAGE_TITLE}<!-- IF S_VIEWTOPIC or S_VIEWFORUM --> - {SITENAME}<!-- ENDIF --></title>*/
/* */
/* <!-- INCLUDE _style_config.html -->*/
/* */
/* <!-- IF S_ENABLE_FEEDS -->*/
/* 	<!-- IF S_ENABLE_FEEDS_OVERALL --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {SITENAME}" href="{U_FEED}"><!-- ENDIF -->*/
/* 	<!-- IF S_ENABLE_FEEDS_NEWS --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FEED_NEWS}" href="{U_FEED}?mode=news"><!-- ENDIF -->*/
/* 	<!-- IF S_ENABLE_FEEDS_FORUMS --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_ALL_FORUMS}" href="{U_FEED}?mode=forums"><!-- ENDIF -->*/
/* 	<!-- IF S_ENABLE_FEEDS_TOPICS --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FEED_TOPICS_NEW}" href="{U_FEED}?mode=topics"><!-- ENDIF -->*/
/* 	<!-- IF S_ENABLE_FEEDS_TOPICS_ACTIVE --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FEED_TOPICS_ACTIVE}" href="{U_FEED}?mode=topics_active"><!-- ENDIF -->*/
/* 	<!-- IF S_ENABLE_FEEDS_FORUM and S_FORUM_ID --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FORUM} - {FORUM_NAME}" href="{U_FEED}?f={S_FORUM_ID}"><!-- ENDIF -->*/
/* 	<!-- IF S_ENABLE_FEEDS_TOPIC and S_TOPIC_ID --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_TOPIC} - {TOPIC_TITLE}" href="{U_FEED}?f={S_FORUM_ID}&amp;t={S_TOPIC_ID}"><!-- ENDIF -->*/
/* 	<!-- EVENT overall_header_feeds -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF U_CANONICAL -->*/
/* 	<link rel="canonical" href="{U_CANONICAL}">*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_ALLOW_CDN -->*/
/* <script>*/
/* 	WebFontConfig = {*/
/* 		google: {*/
/* 			families: ['Open+Sans:600:cyrillic-ext,latin,greek-ext,greek,vietnamese,latin-ext,cyrillic']*/
/* 		}*/
/* 	};*/
/* */
/* 	(function(d) {*/
/* 		var wf = d.createElement('script'), s = d.scripts[0];*/
/* 		wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';*/
/* 		wf.async = true;*/
/* 		s.parentNode.insertBefore(wf, s);*/
/* 	})(document);*/
/* </script>*/
/* 	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">*/
/* <!-- ELSE -->*/
/* 	<link href="{T_THEME_PATH}/fonts/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet">*/
/* <!-- ENDIF -->*/
/* <link href="{T_THEME_PATH}/fonts/glyphicons-pro-1.9.2/css/glyphicons.css" rel="stylesheet">*/
/* */
/* <link href="{T_STYLESHEET_LINK}" rel="stylesheet">*/
/* */
/* <!-- IF S_CONTENT_DIRECTION eq 'rtl' -->*/
/* 	<link href="{T_THEME_PATH}/bidi.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_PLUPLOAD -->*/
/* 	<link href="{T_THEME_PATH}/plupload.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* <!-- ENDIF -->*/
/* */
/* <!--[if lte IE 9]>*/
/* 	<link href="{T_THEME_PATH}/tweaks.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* <![endif]-->*/
/* */
/* <!-- EVENT overall_header_head_append -->*/
/* */
/* {$STYLESHEETS}*/
/* */
/* <!-- EVENT overall_header_stylesheets_after -->*/
/* */
/* </head>*/
/* <body id="phpbb" class="nojs notouch section-{SCRIPT_NAME} {S_CONTENT_DIRECTION} {BODY_CLASS}" data-online-text="{LA_ONLINE}">*/
/* */
/* <!-- EVENT overall_header_body_before -->*/
/* */
/* <!-- IF $WRAP_HEADER == 1 -->*/
/* <div id="wrap" class="page-width">*/
/* <!-- ENDIF -->*/
/* 	<a id="top" class="anchor" accesskey="t"></a>*/
/* 	<div id="page-header" class="page-width">*/
/* 		<div class="headerbar" role="banner">*/
/* 			<div class="inner">*/
/* */
/* 			<div id="site-description">*/
/* 				<a id="logo" class="logo" href="<!-- IF U_SITE_HOME -->{U_SITE_HOME}<!-- ELSE -->{U_INDEX}<!-- ENDIF -->" title="<!-- IF U_SITE_HOME -->{L_SITE_HOME}<!-- ELSE -->{L_INDEX}<!-- ENDIF -->"><img src="{T_THEME_PATH}/images/logo.png" data-src-hd="{T_THEME_PATH}/images/logo_hd.png" /></a>*/
/* 				<p class="sitename">{SITENAME}</p>*/
/* 				<p>{SITE_DESCRIPTION}</p>*/
/* 				<p class="skiplink"><a href="#start_here">{L_SKIP}</a></p>*/
/* 			</div>*/
/* */
/* 			<!-- EVENT overall_header_searchbox_before -->*/
/* 			<!-- IF S_DISPLAY_SEARCH and not S_IN_SEARCH -->*/
/* 			<!-- DEFINE $SEARCH_BOX -->*/
/* 			<div id="search-box" class="search-box search-header" role="search">*/
/* 				<form action="{U_SEARCH}" method="get" id="search">*/
/* 				<fieldset>*/
/* 					<input name="keywords" id="keywords" type="search" maxlength="128" title="{L_SEARCH_KEYWORDS}" class="inputbox search tiny" size="20" value="{SEARCH_WORDS}" placeholder="{L_SEARCH_MINI}" />*/
/* 					<button class="button icon-button search-icon" type="submit" title="{L_SEARCH}">{L_SEARCH}</button>*/
/* 					<a href="{U_SEARCH}" class="button icon-button search-adv-icon" title="{L_SEARCH_ADV}">{L_SEARCH_ADV}</a>*/
/* 					{S_SEARCH_HIDDEN_FIELDS}*/
/* 				</fieldset>*/
/* 				</form>*/
/* 			</div>*/
/* 			<!-- ENDDEFINE -->*/
/* 			<!-- IF $SEARCH_IN_NAVBAR == 0 -->{$SEARCH_BOX}<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* */
/* 			</div>*/
/* 		</div>*/
/* */
/* <!-- IF $WRAP_HEADER == 2 -->*/
/* </div>*/
/* <div id="wrap" class="page-width">*/
/* <div>*/
/* <!-- ENDIF -->*/
/* */
/* 		<!-- EVENT overall_header_navbar_before -->*/
/* 		<!-- INCLUDE navbar_header.html -->*/
/* 	</div>*/
/* */
/* <!-- IF $WRAP_HEADER == 0 -->*/
/* <div id="wrap" class="page-width">*/
/* <!-- ENDIF -->*/
/* */
/* 	<!-- EVENT overall_header_page_body_before -->*/
/* */
/* 	<a id="start_here" class="anchor"></a>*/
/* 	<div id="page-body" role="main">*/
/* 		{$BREADCRUMBS}*/
/* 		<!-- IF S_BOARD_DISABLED and S_USER_LOGGED_IN and (U_MCP or U_ACP) -->*/
/* 		<div id="information" class="rules">*/
/* 			<div class="inner">*/
/* 				<strong>{L_INFORMATION}{L_COLON}</strong> {L_BOARD_DISABLED}*/
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- EVENT overall_header_content_before -->*/
/* */
