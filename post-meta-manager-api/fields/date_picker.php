<?php	$preset_value = isset($preset_value) && !empty($preset_value)  ? $preset_value : '';		$saved_value = PostMetaManagerHelper::esc_attr($saved_value);	if (empty($saved_value)) $saved_value = $preset_value;?><input	type="text"	name="<?php _e($identifier) ?>"	id="<?php _e($identifier) ?>"	value="<?php _e($saved_value) ?>"	style="width: 100%; max-width: <?php _e($width) ?>; <?php _e(isset($style) && !empty($style) ? $style : '') ?>"	readonly="readonly"/><script type="text/javascript">	jQuery(function ($)	{		$("#<?php _e(PostMetaManagerHelper::sanitize_css_selector($identifier)) ?>").datepicker({			dateFormat: "yy-mm-dd",			showButtonPanel: true,			closeText: 'Clear',			onClose: function (dateText, inst) {				if ($(window.event.srcElement).hasClass('ui-datepicker-close'))				{					document.getElementById(this.id).value = '';				}			},			beforeShow: function( input ) {				setTimeout(function () {					$(input).datepicker("widget").find(".ui-datepicker-current").hide();					var clearButton = $(input ).datepicker( "widget" ).find( ".ui-datepicker-close" );					clearButton.unbind("click").bind("click",function(){$.datepicker._clearDate( input );});				}, 1 );			}		});	});</script>