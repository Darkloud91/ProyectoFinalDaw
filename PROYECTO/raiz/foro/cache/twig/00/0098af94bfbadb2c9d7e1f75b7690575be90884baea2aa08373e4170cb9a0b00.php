<?php

/* navbar_header.html */
class __TwigTemplate_e1fd0e6f3836f3200631bffea04ef8d5846587feecb70966a16d7b917b5f992b extends Twig_Template
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
        ob_start();
        // line 2
        echo "\t";
        // line 3
        echo "
\t";
        // line 4
        if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
            // line 5
            echo "\t\t<li class=\"separator\"></li>
\t\t";
            // line 6
            if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
                // line 7
                echo "\t\t\t<li class=\"small-icon icon-search-self\"><a href=\"";
                echo (isset($context["U_SEARCH_SELF"]) ? $context["U_SEARCH_SELF"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_SELF");
                echo "</a></li>
\t\t";
            }
            // line 9
            echo "\t\t";
            if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                // line 10
                echo "\t\t\t<li class=\"small-icon icon-search-new\"><a href=\"";
                echo (isset($context["U_SEARCH_NEW"]) ? $context["U_SEARCH_NEW"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                echo "</a></li>
\t\t";
            }
            // line 12
            echo "\t\t";
            if ((isset($context["S_LOAD_UNREADS"]) ? $context["S_LOAD_UNREADS"] : null)) {
                // line 13
                echo "\t\t\t<li class=\"small-icon icon-search-unread\"><a href=\"";
                echo (isset($context["U_SEARCH_UNREAD"]) ? $context["U_SEARCH_UNREAD"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_UNREAD");
                echo "</a></li>
\t\t";
            }
            // line 15
            echo "\t\t<li class=\"small-icon icon-search-unanswered\"><a href=\"";
            echo (isset($context["U_SEARCH_UNANSWERED"]) ? $context["U_SEARCH_UNANSWERED"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_UNANSWERED");
            echo "</a></li>
\t\t<li class=\"small-icon icon-search-active\"><a href=\"";
            // line 16
            echo (isset($context["U_SEARCH_ACTIVE_TOPICS"]) ? $context["U_SEARCH_ACTIVE_TOPICS"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
\t\t<li class=\"separator\"></li>
\t\t<li class=\"small-icon icon-search\"><a href=\"";
            // line 18
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</a></li>
\t";
        }
        $context["quick_links_first_block"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 21
        echo "
";
        // line 22
        ob_start();
        // line 23
        echo "\t";
        $context["quick_links_last_block"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 25
        echo "
";
        // line 26
        ob_start();
        echo trim((isset($context["quick_links_first_block"]) ? $context["quick_links_first_block"] : null));
        echo trim((isset($context["quick_links_last_block"]) ? $context["quick_links_last_block"] : null));
        $context["quick_links_all"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
<div class=\"navbar tabbed not-static\" role=\"navigation\">
\t<div class=\"inner page-width\">
\t\t<div class=\"nav-tabs\" data-current-page=\"";
        // line 30
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "NAV_SECTION", array())) {
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "NAV_SECTION", array());
        } else {
            echo (isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null);
        }
        echo "\">
\t\t\t<ul class=\"leftside\">
\t\t\t\t
\t\t\t\t";
        // line 33
        // line 34
        echo "\t\t\t\t";
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            // line 35
            echo "\t\t\t\t<li class=\"tab home\" data-responsive-class=\"small-icon icon-home\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 36
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\" data-navbar-reference=\"home\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t<li id=\"quick-links\" class=\"tab responsive-menu dropdown-container";
        if (((isset($context["quick_links_all"]) ? $context["quick_links_all"] : null) == "")) {
            echo " empty";
        }
        echo "\">
\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-trigger\">";
        // line 40
        echo $this->env->getExtension('phpbb')->lang("QUICK_LINKS");
        echo "</a>
\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t\t";
        // line 44
        echo (isset($context["quick_links_first_block"]) ? $context["quick_links_first_block"] : null);
        echo "
\t\t\t\t\t\t\t";
        // line 45
        if (trim((isset($context["quick_links_last_block"]) ? $context["quick_links_last_block"] : null))) {
            // line 46
            echo "\t\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t\t";
            // line 47
            echo (isset($context["quick_links_last_block"]) ? $context["quick_links_last_block"] : null);
            echo "
\t\t\t\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"tab forums selected\" data-responsive-class=\"small-icon icon-forums\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 53
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("FORUMS");
        echo "</a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t";
        // line 56
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null) || (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)))) {
            // line 57
            echo "\t\t\t\t\t<li class=\"tab members dropdown-container\" data-select-match=\"member\" data-responsive-class=\"small-icon icon-members\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-trigger\" href=\"";
            // line 58
            echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
            echo "</a>
\t\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t\t\t";
            // line 62
            if ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null)) {
                echo "<li class=\"small-icon icon-members\"><a href=\"";
                echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 63
            echo "\t\t\t\t\t\t\t\t";
            if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
                echo "<li class=\"small-icon icon-team\"><a href=\"";
                echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
                echo "</a></li>";
            }
            // line 64
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"tab home\" data-responsive-class=\"small-icon icon-home\">
\t\t\t\t\t<a class=\"nav-link\" href=\"http://wiki.tosbase.es\" data-navbar-reference=\"home\">Wiki</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t";
        // line 72
        echo "\t\t\t</ul>
\t\t\t<ul class=\"rightside\">
\t\t\t\t";
        // line 74
        // line 75
        echo "\t\t\t\t<li class=\"tab faq\" data-select-match=\"faq\" data-responsive-class=\"small-icon icon-faq\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 76
        echo (isset($context["U_FAQ"]) ? $context["U_FAQ"] : null);
        echo "\" rel=\"help\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\">";
        echo $this->env->getExtension('phpbb')->lang("FAQ");
        echo "</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 78
        // line 79
        echo "\t\t\t\t";
        if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
            echo "<li class=\"tab acp\" data-last-responsive=\"true\" data-responsive-class=\"small-icon icon-acp\"><a class=\"nav-link\" href=\"";
            echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("ACP_SHORT");
            echo "</a></li>";
        }
        // line 80
        echo "\t\t\t\t";
        if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
            // line 81
            echo "\t\t\t\t\t<li class=\"tab mcp\" data-last-responsive=\"true\" data-select-match=\"mcp\" data-responsive-class=\"small-icon icon-mcp\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 82
            echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("MCP_SHORT");
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 85
        echo "\t\t\t\t";
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            // line 86
            echo "\t\t\t\t\t";
            // line 87
            echo "\t\t\t\t\t<li id=\"username_logged_in\" class=\"tab account dropdown-container\" data-skip-responsive=\"true\" data-select-match=\"ucp\">
\t\t\t\t\t\t<a href=\"";
            // line 88
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\" class=\"nav-link dropdown-trigger\">";
            echo (isset($context["CURRENT_USERNAME_SIMPLE"]) ? $context["CURRENT_USERNAME_SIMPLE"] : null);
            echo "</a>
\t\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t\t\t";
            // line 92
            if ((isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null)) {
                echo "<li class=\"small-icon icon-restore-permissions\"><a href=\"";
                echo (isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("RESTORE_PERMISSIONS");
                echo "</a></li>";
            }
            // line 93
            echo "\t\t\t
\t\t\t\t\t\t\t\t";
            // line 94
            // line 95
            echo "\t\t\t
\t\t\t\t\t\t\t\t<li class=\"small-icon icon-ucp\"><a href=\"";
            // line 96
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "</a></li>
\t\t\t\t\t\t\t\t<li class=\"small-icon icon-profile\"><a href=\"";
            // line 97
            echo (isset($context["U_USER_PROFILE"]) ? $context["U_USER_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "</a></li>
\t\t\t
\t\t\t\t\t\t\t\t";
            // line 99
            // line 100
            echo "\t\t\t
\t\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t\t<li class=\"small-icon icon-logout\"><a href=\"";
            // line 102
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t";
            // line 106
            if ((isset($context["S_DISPLAY_PM"]) ? $context["S_DISPLAY_PM"] : null)) {
                // line 107
                echo "\t\t\t\t\t\t<li class=\"tab pm";
                if (((isset($context["PRIVATE_MESSAGE_COUNT"]) ? $context["PRIVATE_MESSAGE_COUNT"] : null) > 0)) {
                    echo " non-zero";
                }
                echo "\" data-skip-responsive=\"true\" data-select-match=\"pm\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                // line 108
                echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("PRIVATE_MESSAGES");
                echo "</a>
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<span class=\"counter\">";
                // line 110
                echo (isset($context["PRIVATE_MESSAGE_COUNT"]) ? $context["PRIVATE_MESSAGE_COUNT"] : null);
                echo "</span>
\t\t\t\t\t\t\t\t<span class=\"arrow\"></span>
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 115
            echo "\t\t\t\t\t";
            if ((isset($context["S_NOTIFICATIONS_DISPLAY"]) ? $context["S_NOTIFICATIONS_DISPLAY"] : null)) {
                // line 116
                echo "\t\t\t\t\t\t<li class=\"tab notifications dropdown-container";
                if (((isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null) > 0)) {
                    echo " non-zero";
                }
                echo "\" data-skip-responsive=\"true\" data-select-match=\"notifications\">
\t\t\t\t\t\t\t<a href=\"";
                // line 117
                echo (isset($context["U_VIEW_ALL_NOTIFICATIONS"]) ? $context["U_VIEW_ALL_NOTIFICATIONS"] : null);
                echo "\" id=\"notification_list_button\" class=\"nav-link dropdown-trigger\">";
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo "</a>
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<span class=\"counter\">";
                // line 119
                echo (isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null);
                echo "</span>
\t\t\t\t\t\t\t\t<span class=\"arrow\"></span>
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t";
                // line 122
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "navbar_header.html", 122)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 123
                echo "\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 125
            echo "\t\t\t\t\t";
            // line 126
            echo "\t\t\t\t";
        }
        // line 127
        echo "\t\t\t\t";
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            // line 128
            echo "\t\t\t\t\t<li class=\"tab logout\"  data-skip-responsive=\"true\"><a class=\"nav-link\" href=\"";
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t";
        } else {
            // line 130
            echo "\t\t\t\t\t<li class=\"tab login\"  data-skip-responsive=\"true\" data-select-match=\"login\"><a class=\"nav-link\" href=\"";
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t\t";
            // line 131
            if ((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) {
                // line 132
                echo "\t\t\t\t\t\t<li class=\"tab register\" data-skip-responsive=\"true\" data-select-match=\"register\"><a class=\"nav-link\" href=\"";
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</a></li>
\t\t\t\t\t";
            }
            // line 134
            echo "\t\t\t\t\t";
            // line 135
            echo "\t\t\t\t";
        }
        // line 136
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
</div>

<div class=\"navbar secondary";
        // line 141
        if ((($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SEARCH_IN_NAVBAR", array()) == 1) && $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SEARCH_BOX", array()))) {
            echo " with-search";
        }
        echo "\">
\t<ul role=\"menubar\">
\t\t";
        // line 143
        ob_start();
        // line 144
        echo "\t\t";
        // line 145
        echo "\t\t";
        if (trim($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "NAVLINKS", array()))) {
            // line 146
            echo "\t\t\t";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "NAVLINKS", array());
            echo "
\t\t";
        }
        // line 148
        echo "\t\t";
        if (( !trim($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "NAVLINKS", array())) || ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "NAVLINKS_SHOW_DEFAULT", array()) == 1))) {
            // line 149
            echo "\t\t\t";
            if (((isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                echo "<li class=\"small-icon icon-";
                if ((isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\" data-last-responsive=\"true\"><a href=\"";
                echo (isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null);
                echo "\" title=\"";
                echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"small-icon icon-";
                if ( !(isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\" data-toggle-text=\"";
                echo (isset($context["S_WATCH_FORUM_TOGGLE"]) ? $context["S_WATCH_FORUM_TOGGLE"] : null);
                echo "\" data-toggle-url=\"";
                echo (isset($context["U_WATCH_FORUM_TOGGLE"]) ? $context["U_WATCH_FORUM_TOGGLE"] : null);
                echo "\">";
                echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
                echo "</a></li>";
            }
            // line 150
            echo "\t\t";
        }
        // line 151
        echo "\t\t";
        // line 152
        echo "\t\t";
        $context["secondary_links"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 153
        echo "\t\t";
        if (trim((isset($context["secondary_links"]) ? $context["secondary_links"] : null))) {
            // line 154
            echo "\t\t\t";
            echo (isset($context["secondary_links"]) ? $context["secondary_links"] : null);
            echo "
\t\t\t";
            // line 155
            if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "NAVLINKS_SHOW_DEFAULT", array()) && (isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null))) {
                // line 156
                echo "\t\t\t\t<li class=\"small-icon icon-search";
                if ((($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SEARCH_IN_NAVBAR", array()) == 1) && $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SEARCH_BOX", array()))) {
                    echo " responsive-hide";
                }
                echo "\"><a href=\"";
                echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "</a></li>
\t\t\t\t";
                // line 157
                if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                    // line 158
                    echo "\t\t\t\t\t<li class=\"small-icon icon-new-posts\"><a href=\"";
                    echo (isset($context["U_SEARCH_NEW"]) ? $context["U_SEARCH_NEW"] : null);
                    echo "\" role=\"menuitem\">";
                    echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                    echo "</a></li>
\t\t\t\t";
                }
                // line 160
                echo "\t\t\t";
            }
            // line 161
            echo "\t\t";
        } else {
            // line 162
            echo "\t\t\t";
            if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
                // line 163
                echo "\t\t\t\t<li class=\"small-icon icon-search";
                if ((($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SEARCH_IN_NAVBAR", array()) == 1) && $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SEARCH_BOX", array()))) {
                    echo " responsive-hide";
                }
                echo "\"><a href=\"";
                echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "</a></li>
\t\t\t\t";
                // line 164
                if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                    // line 165
                    echo "\t\t\t\t\t<li class=\"small-icon icon-new-posts\"><a href=\"";
                    echo (isset($context["U_SEARCH_NEW"]) ? $context["U_SEARCH_NEW"] : null);
                    echo "\" role=\"menuitem\">";
                    echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                    echo "</a></li>
\t\t\t\t";
                }
                // line 167
                echo "\t\t\t";
            }
            // line 168
            echo "\t\t\t";
            if ( !(isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
                // line 169
                echo "\t\t\t\t<li class=\"small-icon icon-login\"><a href=\"";
                echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
                echo "</a></li>
\t\t\t\t";
                // line 170
                if ((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) {
                    // line 171
                    echo "\t\t\t\t\t<li class=\"small-icon icon-register\"><a href=\"";
                    echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("REGISTER");
                    echo "</a></li>
\t\t\t\t";
                }
                // line 173
                echo "\t\t\t";
            } elseif ( !(isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
                // line 174
                echo "\t\t\t\t<li><a href=\"";
                echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
                echo "\" class=\"small-icon icon-profile\">";
                echo (isset($context["CURRENT_USERNAME_SIMPLE"]) ? $context["CURRENT_USERNAME_SIMPLE"] : null);
                echo "</a></li>
\t\t\t";
            }
            // line 176
            echo "\t\t";
        }
        // line 177
        echo "
\t\t";
        // line 178
        if ((($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SEARCH_IN_NAVBAR", array()) == 1) && $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SEARCH_BOX", array()))) {
            // line 179
            echo "\t\t\t<li class=\"search-box not-responsive\">";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SEARCH_BOX", array());
            echo "</li>
\t\t";
        }
        // line 181
        echo "\t</ul>
</div>

";
        // line 184
        ob_start();
        // line 185
        echo "<div class=\"navbar nav-breadcrumbs\">
\t<ul id=\"nav-breadcrumbs\" class=\"linklist navlinks\" role=\"menubar\">
\t\t";
        // line 187
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 188
        echo "\t\t";
        // line 189
        echo "\t\t<li class=\"small-icon icon-home breadcrumbs\">
\t\t\t";
        // line 190
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo "<span class=\"crumb\" style=\"display: none;\"><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo " data-navbar-reference=\"home\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</span></a></span>";
        }
        // line 191
        echo "\t\t\t";
        // line 192
        echo "\t\t\t<span class=\"crumb\"";
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
        echo "><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" accesskey=\"h\" data-navbar-reference=\"index\" itemprop=\"url\"><span itemprop=\"title\">";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</span></a></span>
\t\t\t";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 194
            echo "\t\t\t\t";
            // line 195
            echo "\t\t\t\t<span class=\"crumb\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            if ($this->getAttribute($context["navlinks"], "MICRODATA", array())) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", array());
            }
            echo "><a href=\"";
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
            echo "</span></a></span>
\t\t\t\t";
            // line 196
            // line 197
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "\t\t\t";
        // line 199
        echo "\t\t</li>
\t\t";
        // line 200
        // line 201
        echo "
\t\t";
        // line 202
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) &&  !(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null))) {
            // line 203
            echo "\t\t\t<li class=\"rightside responsive-search\" style=\"display: none;\"><a href=\"";
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV_EXPLAIN");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</a></li>
\t\t";
        }
        // line 205
        echo "\t\t<li class=\"rightside dropdown-container icon-only\">
\t\t\t<a href=\"#\" class=\"dropdown-trigger time\" title=\"";
        // line 206
        echo (isset($context["CURRENT_TIME"]) ? $context["CURRENT_TIME"] : null);
        echo "\"><i class=\"fa fa-clock-o\"></i></a>
\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t\t<li>";
        // line 210
        echo (isset($context["CURRENT_TIME"]) ? $context["CURRENT_TIME"] : null);
        echo "</li>
\t\t\t\t\t<li>";
        // line 211
        echo (isset($context["S_TIMEZONE"]) ? $context["S_TIMEZONE"] : null);
        echo "</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</li>
\t</ul>
</div>
";
        $value = ('' === $value = ob_get_clean()) ? '' : new \Twig_Markup($value, $this->env->getCharset());
        $context['definition']->set('BREADCRUMBS', $value);
        // line 218
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "WRAP_HEADER", array()) != 0)) {
            // line 219
            echo "\t";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "BREADCRUMBS", array());
            echo "
\t";
            // line 220
            $value = "";
            $context['definition']->set('BREADCRUMBS', $value);
        }
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  725 => 220,  720 => 219,  718 => 218,  707 => 211,  703 => 210,  696 => 206,  693 => 205,  683 => 203,  681 => 202,  678 => 201,  677 => 200,  674 => 199,  672 => 198,  666 => 197,  665 => 196,  652 => 195,  650 => 194,  646 => 193,  637 => 192,  635 => 191,  625 => 190,  622 => 189,  620 => 188,  617 => 187,  613 => 185,  611 => 184,  606 => 181,  600 => 179,  598 => 178,  595 => 177,  592 => 176,  584 => 174,  581 => 173,  573 => 171,  571 => 170,  562 => 169,  559 => 168,  556 => 167,  548 => 165,  546 => 164,  535 => 163,  532 => 162,  529 => 161,  526 => 160,  518 => 158,  516 => 157,  505 => 156,  503 => 155,  498 => 154,  495 => 153,  492 => 152,  490 => 151,  487 => 150,  460 => 149,  457 => 148,  451 => 146,  448 => 145,  446 => 144,  444 => 143,  437 => 141,  430 => 136,  427 => 135,  425 => 134,  417 => 132,  415 => 131,  406 => 130,  396 => 128,  393 => 127,  390 => 126,  388 => 125,  384 => 123,  372 => 122,  366 => 119,  359 => 117,  352 => 116,  349 => 115,  341 => 110,  334 => 108,  327 => 107,  325 => 106,  314 => 102,  310 => 100,  309 => 99,  300 => 97,  292 => 96,  289 => 95,  288 => 94,  285 => 93,  277 => 92,  268 => 88,  265 => 87,  263 => 86,  260 => 85,  250 => 82,  247 => 81,  244 => 80,  233 => 79,  232 => 78,  223 => 76,  220 => 75,  219 => 74,  215 => 72,  213 => 71,  204 => 64,  195 => 63,  187 => 62,  178 => 58,  175 => 57,  173 => 56,  165 => 53,  159 => 49,  154 => 47,  151 => 46,  149 => 45,  145 => 44,  138 => 40,  131 => 39,  123 => 36,  120 => 35,  117 => 34,  116 => 33,  106 => 30,  101 => 27,  96 => 26,  93 => 25,  90 => 23,  88 => 22,  85 => 21,  77 => 18,  70 => 16,  63 => 15,  55 => 13,  52 => 12,  44 => 10,  41 => 9,  33 => 7,  31 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set quick_links_first_block %}*/
/* 	<!-- EVENT navbar_header_quick_links_before -->*/
/* */
/* 	<!-- IF S_DISPLAY_SEARCH -->*/
/* 		<li class="separator"></li>*/
/* 		<!-- IF S_REGISTERED_USER -->*/
/* 			<li class="small-icon icon-search-self"><a href="{U_SEARCH_SELF}" role="menuitem">{L_SEARCH_SELF}</a></li>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_USER_LOGGED_IN -->*/
/* 			<li class="small-icon icon-search-new"><a href="{U_SEARCH_NEW}" role="menuitem">{L_SEARCH_NEW}</a></li>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_LOAD_UNREADS -->*/
/* 			<li class="small-icon icon-search-unread"><a href="{U_SEARCH_UNREAD}" role="menuitem">{L_SEARCH_UNREAD}</a></li>*/
/* 		<!-- ENDIF -->*/
/* 		<li class="small-icon icon-search-unanswered"><a href="{U_SEARCH_UNANSWERED}" role="menuitem">{L_SEARCH_UNANSWERED}</a></li>*/
/* 		<li class="small-icon icon-search-active"><a href="{U_SEARCH_ACTIVE_TOPICS}" role="menuitem">{L_SEARCH_ACTIVE_TOPICS}</a></li>*/
/* 		<li class="separator"></li>*/
/* 		<li class="small-icon icon-search"><a href="{U_SEARCH}" role="menuitem">{L_SEARCH}</a></li>*/
/* 	<!-- ENDIF -->*/
/* {% endset %}*/
/* */
/* {% set quick_links_last_block %}*/
/* 	<!-- EVENT navbar_header_quick_links_after -->*/
/* {% endset %}*/
/* */
/* {% set quick_links_all %}{{ quick_links_first_block|trim }}{{ quick_links_last_block|trim }}{% endset %}*/
/* */
/* <div class="navbar tabbed not-static" role="navigation">*/
/* 	<div class="inner page-width">*/
/* 		<div class="nav-tabs" data-current-page="<!-- IF $NAV_SECTION -->{$NAV_SECTION}<!-- ELSE -->{SCRIPT_NAME}<!-- ENDIF -->">*/
/* 			<ul class="leftside">*/
/* 				*/
/* 				<!-- EVENT navtabs_left_before -->*/
/* 				<!-- IF U_SITE_HOME -->*/
/* 				<li class="tab home" data-responsive-class="small-icon icon-home">*/
/* 					<a class="nav-link" href="{U_SITE_HOME}" data-navbar-reference="home">{L_SITE_HOME}</a>*/
/* 				</li>*/
/* 				<!-- ENDIF -->*/
/* 				<li id="quick-links" class="tab responsive-menu dropdown-container{% if quick_links_all == '' %} empty{% endif %}">*/
/* 					<a href="#" class="nav-link dropdown-trigger">{L_QUICK_LINKS}</a>*/
/* 					<div class="dropdown hidden">*/
/* 						<div class="pointer"><div class="pointer-inner"></div></div>*/
/* 						<ul class="dropdown-contents" role="menu">*/
/* 							{{ quick_links_first_block }}*/
/* 							{% if quick_links_last_block|trim %}*/
/* 								<li class="separator"></li>*/
/* 								{{ quick_links_last_block }}*/
/* 							{% endif %}*/
/* 						</ul>*/
/* 					</div>*/
/* 				</li>*/
/* 				<li class="tab forums selected" data-responsive-class="small-icon icon-forums">*/
/* 					<a class="nav-link" href="{U_INDEX}">{L_FORUMS}</a>*/
/* 				</li>*/
/* 				*/
/* 				<!-- IF not S_IS_BOT and (S_DISPLAY_MEMBERLIST or U_TEAM) -->*/
/* 					<li class="tab members dropdown-container" data-select-match="member" data-responsive-class="small-icon icon-members">*/
/* 						<a class="nav-link dropdown-trigger" href="{U_MEMBERLIST}">{L_MEMBERLIST}</a>*/
/* 						<div class="dropdown hidden">*/
/* 							<div class="pointer"><div class="pointer-inner"></div></div>*/
/* 							<ul class="dropdown-contents" role="menu">*/
/* 								<!-- IF S_DISPLAY_MEMBERLIST --><li class="small-icon icon-members"><a href="{U_MEMBERLIST}" role="menuitem">{L_MEMBERLIST}</a></li><!-- ENDIF -->*/
/* 								<!-- IF U_TEAM --><li class="small-icon icon-team"><a href="{U_TEAM}" role="menuitem">{L_THE_TEAM}</a></li><!-- ENDIF -->*/
/* 							</ul>*/
/* 						</div>*/
/* 					</li>*/
/* 					<li class="tab home" data-responsive-class="small-icon icon-home">*/
/* 					<a class="nav-link" href="http://wiki.tosbase.es" data-navbar-reference="home">Wiki</a>*/
/* 				</li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- EVENT navtabs_left_after -->*/
/* 			</ul>*/
/* 			<ul class="rightside">*/
/* 				<!-- EVENT overall_header_navigation_prepend -->*/
/* 				<li class="tab faq" data-select-match="faq" data-responsive-class="small-icon icon-faq">*/
/* 					<a class="nav-link" href="{U_FAQ}" rel="help" title="{L_FAQ_EXPLAIN}" role="menuitem">{L_FAQ}</a>*/
/* 				</li>*/
/* 				<!-- EVENT overall_header_navigation_append -->*/
/* 				<!-- IF U_ACP --><li class="tab acp" data-last-responsive="true" data-responsive-class="small-icon icon-acp"><a class="nav-link" href="{U_ACP}" title="{L_ACP}" role="menuitem">{L_ACP_SHORT}</a></li><!-- ENDIF -->*/
/* 				<!-- IF U_MCP -->*/
/* 					<li class="tab mcp" data-last-responsive="true" data-select-match="mcp" data-responsive-class="small-icon icon-mcp">*/
/* 						<a class="nav-link" href="{U_MCP}" title="{L_MCP}" role="menuitem">{L_MCP_SHORT}</a>*/
/* 					</li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF S_REGISTERED_USER -->*/
/* 					<!-- EVENT navbar_header_user_profile_prepend -->*/
/* 					<li id="username_logged_in" class="tab account dropdown-container" data-skip-responsive="true" data-select-match="ucp">*/
/* 						<a href="{U_PROFILE}" class="nav-link dropdown-trigger">{CURRENT_USERNAME_SIMPLE}</a>*/
/* 						<div class="dropdown hidden">*/
/* 							<div class="pointer"><div class="pointer-inner"></div></div>*/
/* 							<ul class="dropdown-contents" role="menu">*/
/* 								<!-- IF U_RESTORE_PERMISSIONS --><li class="small-icon icon-restore-permissions"><a href="{U_RESTORE_PERMISSIONS}">{L_RESTORE_PERMISSIONS}</a></li><!-- ENDIF -->*/
/* 			*/
/* 								<!-- EVENT navbar_header_profile_list_before -->*/
/* 			*/
/* 								<li class="small-icon icon-ucp"><a href="{U_PROFILE}" title="{L_PROFILE}" role="menuitem">{L_PROFILE}</a></li>*/
/* 								<li class="small-icon icon-profile"><a href="{U_USER_PROFILE}" title="{L_READ_PROFILE}" role="menuitem">{L_READ_PROFILE}</a></li>*/
/* 			*/
/* 								<!-- EVENT navbar_header_profile_list_after -->*/
/* 			*/
/* 								<li class="separator"></li>*/
/* 								<li class="small-icon icon-logout"><a href="{U_LOGIN_LOGOUT}" title="{L_LOGIN_LOGOUT}" accesskey="x" role="menuitem">{L_LOGIN_LOGOUT}</a></li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</li>*/
/* 					<!-- IF S_DISPLAY_PM -->*/
/* 						<li class="tab pm<!-- IF PRIVATE_MESSAGE_COUNT > 0 --> non-zero<!-- ENDIF -->" data-skip-responsive="true" data-select-match="pm">*/
/* 							<a class="nav-link" href="{U_PRIVATEMSGS}" role="menuitem">{L_PRIVATE_MESSAGES}</a>*/
/* 							<strong>*/
/* 								<span class="counter">{PRIVATE_MESSAGE_COUNT}</span>*/
/* 								<span class="arrow"></span>*/
/* 							</strong>*/
/* 						</li>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF S_NOTIFICATIONS_DISPLAY -->*/
/* 						<li class="tab notifications dropdown-container<!-- IF NOTIFICATIONS_COUNT > 0 --> non-zero<!-- ENDIF -->" data-skip-responsive="true" data-select-match="notifications">*/
/* 							<a href="{U_VIEW_ALL_NOTIFICATIONS}" id="notification_list_button" class="nav-link dropdown-trigger">{L_NOTIFICATIONS}</a>*/
/* 							<strong>*/
/* 								<span class="counter">{NOTIFICATIONS_COUNT}</span>*/
/* 								<span class="arrow"></span>*/
/* 							</strong>*/
/* 							<!-- INCLUDE notification_dropdown.html -->*/
/* 						</li>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- EVENT navbar_header_user_profile_append -->*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF S_REGISTERED_USER -->*/
/* 					<li class="tab logout"  data-skip-responsive="true"><a class="nav-link" href="{U_LOGIN_LOGOUT}" title="{L_LOGIN_LOGOUT}" accesskey="x" role="menuitem">{L_LOGIN_LOGOUT}</a></li>*/
/* 				<!-- ELSE -->*/
/* 					<li class="tab login"  data-skip-responsive="true" data-select-match="login"><a class="nav-link" href="{U_LOGIN_LOGOUT}" title="{L_LOGIN_LOGOUT}" accesskey="x" role="menuitem">{L_LOGIN_LOGOUT}</a></li>*/
/* 					<!-- IF S_REGISTER_ENABLED -->*/
/* 						<li class="tab register" data-skip-responsive="true" data-select-match="register"><a class="nav-link" href="{U_REGISTER}" role="menuitem">{L_REGISTER}</a></li>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- EVENT navbar_header_logged_out_content -->*/
/* 				<!-- ENDIF -->*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="navbar secondary{% if definition.SEARCH_IN_NAVBAR == 1 && definition.SEARCH_BOX %} with-search{% endif %}">*/
/* 	<ul role="menubar">*/
/* 		{% set secondary_links %}*/
/* 		<!-- EVENT secondary_navlinks_before -->*/
/* 		{% if definition.NAVLINKS|trim %}*/
/* 			{{ definition.NAVLINKS }}*/
/* 		{% endif %}*/
/* 		{% if !definition.NAVLINKS|trim || definition.NAVLINKS_SHOW_DEFAULT == 1 %}*/
/* 			<!-- IF U_WATCH_FORUM_LINK and not S_IS_BOT --><li class="small-icon icon-<!-- IF S_WATCHING_FORUM -->unsubscribe<!-- ELSE -->subscribe<!-- ENDIF -->" data-last-responsive="true"><a href="{U_WATCH_FORUM_LINK}" title="{S_WATCH_FORUM_TITLE}" data-ajax="toggle_link" data-toggle-class="small-icon icon-<!-- IF not S_WATCHING_FORUM -->unsubscribe<!-- ELSE -->subscribe<!-- ENDIF -->" data-toggle-text="{S_WATCH_FORUM_TOGGLE}" data-toggle-url="{U_WATCH_FORUM_TOGGLE}">{S_WATCH_FORUM_TITLE}</a></li><!-- ENDIF -->*/
/* 		{% endif %}*/
/* 		<!-- EVENT secondary_navlinks_after -->*/
/* 		{% endset %}*/
/* 		{% if secondary_links|trim %}*/
/* 			{{ secondary_links }}*/
/* 			<!-- IF $NAVLINKS_SHOW_DEFAULT && S_DISPLAY_SEARCH -->*/
/* 				<li class="small-icon icon-search{% if definition.SEARCH_IN_NAVBAR == 1 && definition.SEARCH_BOX %} responsive-hide{% endif %}"><a href="{U_SEARCH}">{L_SEARCH}</a></li>*/
/* 				<!-- IF S_USER_LOGGED_IN -->*/
/* 					<li class="small-icon icon-new-posts"><a href="{U_SEARCH_NEW}" role="menuitem">{L_SEARCH_NEW}</a></li>*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 		{% else %}*/
/* 			<!-- IF S_DISPLAY_SEARCH -->*/
/* 				<li class="small-icon icon-search{% if definition.SEARCH_IN_NAVBAR == 1 && definition.SEARCH_BOX %} responsive-hide{% endif %}"><a href="{U_SEARCH}">{L_SEARCH}</a></li>*/
/* 				<!-- IF S_USER_LOGGED_IN -->*/
/* 					<li class="small-icon icon-new-posts"><a href="{U_SEARCH_NEW}" role="menuitem">{L_SEARCH_NEW}</a></li>*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF not S_REGISTERED_USER -->*/
/* 				<li class="small-icon icon-login"><a href="{U_LOGIN_LOGOUT}" title="{L_LOGIN_LOGOUT}">{L_LOGIN_LOGOUT}</a></li>*/
/* 				<!-- IF S_REGISTER_ENABLED -->*/
/* 					<li class="small-icon icon-register"><a href="{U_REGISTER}">{L_REGISTER}</a></li>*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ELSEIF not S_DISPLAY_SEARCH -->*/
/* 				<li><a href="{U_PROFILE}" class="small-icon icon-profile">{CURRENT_USERNAME_SIMPLE}</a></li>*/
/* 			<!-- ENDIF -->*/
/* 		{% endif %}*/
/* */
/* 		{% if definition.SEARCH_IN_NAVBAR == 1 && definition.SEARCH_BOX %}*/
/* 			<li class="search-box not-responsive">{$SEARCH_BOX}</li>*/
/* 		{% endif %}*/
/* 	</ul>*/
/* </div>*/
/* */
/* <!-- DEFINE $BREADCRUMBS -->*/
/* <div class="navbar nav-breadcrumbs">*/
/* 	<ul id="nav-breadcrumbs" class="linklist navlinks" role="menubar">*/
/* 		<!-- DEFINE $MICRODATA = ' itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""' -->*/
/* 		<!-- EVENT overall_header_breadcrumbs_before -->*/
/* 		<li class="small-icon icon-home breadcrumbs">*/
/* 			<!-- IF U_SITE_HOME --><span class="crumb" style="display: none;"><a href="{U_SITE_HOME}"{$MICRODATA} data-navbar-reference="home" itemprop="url"><span itemprop="title">{L_SITE_HOME}</span></a></span><!-- ENDIF -->*/
/* 			<!-- EVENT overall_header_breadcrumb_prepend -->*/
/* 			<span class="crumb"{$MICRODATA}><a href="{U_INDEX}" accesskey="h" data-navbar-reference="index" itemprop="url"><span itemprop="title">{L_INDEX}</span></a></span>*/
/* 			<!-- BEGIN navlinks -->*/
/* 				<!-- EVENT overall_header_navlink_prepend -->*/
/* 				<span class="crumb"{$MICRODATA}<!-- IF navlinks.MICRODATA --> {navlinks.MICRODATA}<!-- ENDIF -->><a href="{navlinks.U_VIEW_FORUM}" itemprop="url"><span itemprop="title">{navlinks.FORUM_NAME}</span></a></span>*/
/* 				<!-- EVENT overall_header_navlink_append -->*/
/* 			<!-- END navlinks -->*/
/* 			<!-- EVENT overall_header_breadcrumb_append -->*/
/* 		</li>*/
/* 		<!-- EVENT overall_header_breadcrumbs_after -->*/
/* */
/* 		<!-- IF S_DISPLAY_SEARCH and not S_IN_SEARCH -->*/
/* 			<li class="rightside responsive-search" style="display: none;"><a href="{U_SEARCH}" title="{L_SEARCH_ADV_EXPLAIN}" role="menuitem">{L_SEARCH}</a></li>*/
/* 		<!-- ENDIF -->*/
/* 		<li class="rightside dropdown-container icon-only">*/
/* 			<a href="#" class="dropdown-trigger time" title="{CURRENT_TIME}"><i class="fa fa-clock-o"></i></a>*/
/* 			<div class="dropdown hidden">*/
/* 				<div class="pointer"><div class="pointer-inner"></div></div>*/
/* 				<ul class="dropdown-contents">*/
/* 					<li>{CURRENT_TIME}</li>*/
/* 					<li>{S_TIMEZONE}</li>*/
/* 				</ul>*/
/* 			</div>*/
/* 		</li>*/
/* 	</ul>*/
/* </div>*/
/* <!-- ENDDEFINE -->*/
/* <!-- IF $WRAP_HEADER != 0 -->*/
/* 	{$BREADCRUMBS}*/
/* 	<!-- DEFINE $BREADCRUMBS = '' -->*/
/* <!-- ENDIF -->*/
