<?php

/* @vse_abbc3/event/acp_overall_footer_after.html */
class __TwigTemplate_11b19139261c543aaee253af66306be0e9a8f2490609cd79a39108ade1dd52b1 extends Twig_Template
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
        // line 2
        if ($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "bbcodes", array())) {
            // line 3
            echo "
\t";
            // line 4
            $asset_file = "@vse_abbc3/js/tablednd.min.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('16');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
            // line 5
            echo "
\t<div style=\"display: none;\" id=\"abbc3-successbox\" class=\"successbox\">
\t\t<h3>";
            // line 7
            echo $this->env->getExtension('phpbb')->lang("INFORMATION");
            echo "</h3>
\t\t<p>";
            // line 8
            echo $this->env->getExtension('phpbb')->lang("ABBC3_BBCODE_ORDERED");
            echo "</p>
\t</div>

\t<script>
\t\t(function(\$) {  // Avoid conflicts with other libraries
\t\t\t'use strict';
\t\t\t\$(function() {
\t\t\t\tvar msgTimer,
\t\t\t\t\tbbcodeTable = \$('#down'),
\t\t\t\t\tmsgSuccessBox = \$('#abbc3-successbox');
\t\t\t\t// Get BBCode ids from the delete button,
\t\t\t\t// and create tr row IDs on the fly for use by tableDnD
\t\t\t\tbbcodeTable.find('tbody').find('tr').each(function() {
\t\t\t\t\tvar url = \$(this).find('a').last().attr('href');
\t\t\t\t\tif (url) \$(this).attr('id', 'bbcode_' + url.split('bbcode=')[1]);
\t\t\t\t});
\t\t\t\t// Enable table row drag-drop
\t\t\t\tbbcodeTable.tableDnD({
\t\t\t\t\tonDragClass: 'row3',
\t\t\t\t\tonDrop: function(table, row) {
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\ttype: 'POST',
\t\t\t\t\t\t\turl: '";
            // line 30
            echo (isset($context["UA_DRAG_DROP"]) ? $context["UA_DRAG_DROP"] : null);
            echo "&tablename=' + \$(table).attr('id'),
\t\t\t\t\t\t\tdata: \$.tableDnD.serialize(),
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t// Show the message
\t\t\t\t\t\t\t\tif (res.success) {
\t\t\t\t\t\t\t\t\tclearTimeout(msgTimer);
\t\t\t\t\t\t\t\t\tmsgSuccessBox.stop(true, true).hide().fadeIn(500);
\t\t\t\t\t\t\t\t\tmsgTimer = setTimeout(function() {
\t\t\t\t\t\t\t\t\t\tmsgSuccessBox.fadeOut(500);
\t\t\t\t\t\t\t\t\t}, 3000);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t})(jQuery);
\t</script>

";
        }
    }

    public function getTemplateName()
    {
        return "@vse_abbc3/event/acp_overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 30,  47 => 8,  43 => 7,  39 => 5,  24 => 4,  21 => 3,  19 => 2,);
    }
}
/* {# Display only on Posting->BBCodes page #}*/
/* {% if loops.bbcodes %}*/
/* */
/* 	{% INCLUDEJS '@vse_abbc3/js/tablednd.min.js' %}*/
/* */
/* 	<div style="display: none;" id="abbc3-successbox" class="successbox">*/
/* 		<h3>{{ lang('INFORMATION') }}</h3>*/
/* 		<p>{{ lang('ABBC3_BBCODE_ORDERED') }}</p>*/
/* 	</div>*/
/* */
/* 	<script>*/
/* 		(function($) {  // Avoid conflicts with other libraries*/
/* 			'use strict';*/
/* 			$(function() {*/
/* 				var msgTimer,*/
/* 					bbcodeTable = $('#down'),*/
/* 					msgSuccessBox = $('#abbc3-successbox');*/
/* 				// Get BBCode ids from the delete button,*/
/* 				// and create tr row IDs on the fly for use by tableDnD*/
/* 				bbcodeTable.find('tbody').find('tr').each(function() {*/
/* 					var url = $(this).find('a').last().attr('href');*/
/* 					if (url) $(this).attr('id', 'bbcode_' + url.split('bbcode=')[1]);*/
/* 				});*/
/* 				// Enable table row drag-drop*/
/* 				bbcodeTable.tableDnD({*/
/* 					onDragClass: 'row3',*/
/* 					onDrop: function(table, row) {*/
/* 						$.ajax({*/
/* 							type: 'POST',*/
/* 							url: '{{ UA_DRAG_DROP }}&tablename=' + $(table).attr('id'),*/
/* 							data: $.tableDnD.serialize(),*/
/* 							success: function(res) {*/
/* 								// Show the message*/
/* 								if (res.success) {*/
/* 									clearTimeout(msgTimer);*/
/* 									msgSuccessBox.stop(true, true).hide().fadeIn(500);*/
/* 									msgTimer = setTimeout(function() {*/
/* 										msgSuccessBox.fadeOut(500);*/
/* 									}, 3000);*/
/* 								}*/
/* 							}*/
/* 						});*/
/* 					}*/
/* 				});*/
/* 			});*/
/* 		})(jQuery);*/
/* 	</script>*/
/* */
/* {% endif %}*/
/* */
