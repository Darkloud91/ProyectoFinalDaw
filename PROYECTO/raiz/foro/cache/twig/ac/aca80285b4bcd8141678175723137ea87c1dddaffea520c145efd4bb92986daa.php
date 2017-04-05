<?php

/* acp_mobiquo.html */
class __TwigTemplate_632dbbcb72e852a7c1fb5122931d9eb869f2ed1e934b82df1cc0b65a539e25e5 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_mobiquo.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a name=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h1>
<p>";
        // line 6
        echo $this->env->getExtension('phpbb')->lang("TITLE_EXPLAIN");
        echo "</p>
<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("ACP_MOBIQUO_MOD_VER");
        echo " ";
        echo (isset($context["MOBIQUO_MOD_VERSION"]) ? $context["MOBIQUO_MOD_VERSION"] : null);
        echo "</p>
";
        // line 8
        if ((isset($context["S_ERROR"]) ? $context["S_ERROR"] : null)) {
            // line 9
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 10
            echo $this->env->getExtension('phpbb')->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 11
            echo (isset($context["ERROR_MSG"]) ? $context["ERROR_MSG"] : null);
            echo "</p>
\t</div>
";
        }
        // line 14
        echo "
<form id=\"acp_thanks\" method=\"post\" action=\"";
        // line 15
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">

";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "options", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
            // line 18
            echo "\t";
            if ($this->getAttribute($context["options"], "S_LEGEND", array())) {
                // line 19
                echo "\t\t";
                if ( !$this->getAttribute($context["options"], "S_FIRST_ROW", array())) {
                    // line 20
                    echo "\t\t\t</fieldset>
\t\t";
                }
                // line 22
                echo "\t\t<fieldset>
\t\t\t<legend>";
                // line 23
                echo $this->getAttribute($context["options"], "LEGEND", array());
                echo "</legend>
\t";
            } else {
                // line 25
                echo "\t\t<dl>
\t\t\t<dt><label for=\"";
                // line 26
                echo $this->getAttribute($context["options"], "KEY", array());
                echo "\">";
                echo $this->getAttribute($context["options"], "TITLE", array());
                echo ":</label>";
                if ($this->getAttribute($context["options"], "S_EXPLAIN", array())) {
                    echo "<br /><span>";
                    echo $this->getAttribute($context["options"], "TITLE_EXPLAIN", array());
                    echo "</span>";
                }
                echo "</dt>
\t\t\t<dd>";
                // line 27
                echo $this->getAttribute($context["options"], "CONTENT", array());
                echo "</dd>
\t\t</dl>

\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 34
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 35
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" />
\t</p>
\t";
        // line 37
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>
</form>

";
        // line 41
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_mobiquo.html", 41)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_mobiquo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  134 => 37,  129 => 35,  125 => 34,  121 => 32,  110 => 27,  98 => 26,  95 => 25,  90 => 23,  87 => 22,  83 => 20,  80 => 19,  77 => 18,  73 => 17,  68 => 15,  65 => 14,  59 => 11,  55 => 10,  52 => 9,  50 => 8,  44 => 7,  40 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a name="maincontent"></a>*/
/* */
/* <h1>{L_TITLE}</h1>*/
/* <p>{L_TITLE_EXPLAIN}</p>*/
/* <p>{L_ACP_MOBIQUO_MOD_VER} {MOBIQUO_MOD_VERSION}</p>*/
/* <!-- IF S_ERROR -->*/
/* 	<div class="errorbox">*/
/* 		<h3>{L_WARNING}</h3>*/
/* 		<p>{ERROR_MSG}</p>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <form id="acp_thanks" method="post" action="{U_ACTION}">*/
/* */
/* <!-- BEGIN options -->*/
/* 	<!-- IF options.S_LEGEND -->*/
/* 		<!-- IF not options.S_FIRST_ROW -->*/
/* 			</fieldset>*/
/* 		<!-- ENDIF -->*/
/* 		<fieldset>*/
/* 			<legend>{options.LEGEND}</legend>*/
/* 	<!-- ELSE -->*/
/* 		<dl>*/
/* 			<dt><label for="{options.KEY}">{options.TITLE}:</label><!-- IF options.S_EXPLAIN --><br /><span>{options.TITLE_EXPLAIN}</span><!-- ENDIF --></dt>*/
/* 			<dd>{options.CONTENT}</dd>*/
/* 		</dl>*/
/* */
/* 	<!-- ENDIF -->*/
/* <!-- END options -->*/
/* */
/* 	<p class="submit-buttons">*/
/* 		<input class="button1" type="submit" id="submit" name="submit" value="{L_SUBMIT}" />&nbsp;*/
/* 		<input class="button2" type="reset" id="reset" name="reset" value="{L_RESET}" />*/
/* 	</p>*/
/* 	{S_FORM_TOKEN}*/
/* </fieldset>*/
/* </form>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
