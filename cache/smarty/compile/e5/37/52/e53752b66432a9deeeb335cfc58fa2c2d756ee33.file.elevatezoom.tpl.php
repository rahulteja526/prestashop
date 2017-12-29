<?php /* Smarty version Smarty-3.1.19, created on 2017-12-26 17:50:52
         compiled from "C:\xampp\htdocs\prestashop\modules\elevatezoom\elevatezoom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212565a423ea4069386-26580592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e53752b66432a9deeeb335cfc58fa2c2d756ee33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\elevatezoom\\elevatezoom.tpl',
      1 => 1404726244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212565a423ea4069386-26580592',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_dir' => 0,
    'zoom_type' => 0,
    'zoom_fade_in' => 0,
    'zoom_fade_out' => 0,
    'zoom_cursor_type' => 0,
    'zoom_window_pos' => 0,
    'zoom_scroll' => 0,
    'zoom_easing' => 0,
    'zoom_tint' => 0,
    'zoom_tint_color' => 0,
    'zoom_tint_opacity' => 0,
    'zoom_lens_shape' => 0,
    'zoom_lens_size' => 0,
    'zoom_product' => 0,
    'zoom_extra_params' => 0,
    'zoom_other' => 0,
    'zoom_other_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a423ea412fc44_86814222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a423ea412fc44_86814222')) {function content_5a423ea412fc44_86814222($_smarty_tpl) {?><!-- Begin elevateZoom Header block -->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
modules/elevatezoom/css/styles.css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
modules/elevatezoom/js/jquery.elevatezoom.min.js"></script>
<script type="text/javascript">			
	var zoom_type = '<?php echo $_smarty_tpl->tpl_vars['zoom_type']->value;?>
';
	var zoom_fade_in = <?php echo $_smarty_tpl->tpl_vars['zoom_fade_in']->value;?>
;
    var zoom_fade_out = <?php echo $_smarty_tpl->tpl_vars['zoom_fade_out']->value;?>
;
	var zoom_cursor_type = '<?php echo $_smarty_tpl->tpl_vars['zoom_cursor_type']->value;?>
';
	var zoom_window_pos = <?php echo $_smarty_tpl->tpl_vars['zoom_window_pos']->value;?>
;
	var zoom_scroll = <?php echo $_smarty_tpl->tpl_vars['zoom_scroll']->value;?>
;
	var zoom_easing = <?php echo $_smarty_tpl->tpl_vars['zoom_easing']->value;?>
;
	var zoom_tint = <?php echo $_smarty_tpl->tpl_vars['zoom_tint']->value;?>
;
	var zoom_tint_color = '<?php echo $_smarty_tpl->tpl_vars['zoom_tint_color']->value;?>
';
	var zoom_tint_opacity = <?php echo $_smarty_tpl->tpl_vars['zoom_tint_opacity']->value;?>
;
    var zoom_lens_shape = '<?php echo $_smarty_tpl->tpl_vars['zoom_lens_shape']->value;?>
';
    var zoom_lens_size  = <?php echo $_smarty_tpl->tpl_vars['zoom_lens_size']->value;?>
;
</script>
<script type="text/javascript">
<?php if ($_smarty_tpl->tpl_vars['zoom_product']->value==1) {?>
	function applyElevateZoom(){
		var src = $('.thickbox.shown').attr('href');
		var bigimage = $('.fancybox.shown').attr('href'); 
		$('#bigpic').elevateZoom({
			zoomType: zoom_type,
			cursor: zoom_cursor_type,
			zoomWindowFadeIn: zoom_fade_in,
			zoomWindowFadeOut: zoom_fade_out,
			zoomWindowPosition: zoom_window_pos,
			scrollZoom: zoom_scroll,
			easing: zoom_easing,
			tint: zoom_tint,
			tintColour: zoom_tint_color,
			tintOpacity: zoom_tint_opacity,
			lensShape: zoom_lens_shape,
			lensSize: zoom_lens_size,
			zoomImage: bigimage<?php if (preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['zoom_extra_params']->value)!='') {?>,
			<?php echo $_smarty_tpl->tpl_vars['zoom_extra_params']->value;?>
 <?php }?>
	   });
	}

	$(document).ready(function(){
		applyElevateZoom();
		$('#color_to_pick_list').click(
			function(){
				restartElevateZoom();
			}
		);

		$('#color_to_pick_list').hover(
			function(){
				restartElevateZoom();
			}
		);


		$('#views_block li a').hover(
			function(){
			restartElevateZoom();
			}
		);
	});
<?php }?>

	function restartElevateZoom(){
		$(".zoomContainer").remove();
		applyElevateZoom();
	}

<?php if ($_smarty_tpl->tpl_vars['zoom_other']->value==1) {?>
	$(document).ready(function(){
		<?php echo $_smarty_tpl->tpl_vars['zoom_other_code']->value;?>

	});
<?php }?>
</script>
<!-- End elevateZoom Header block --><?php }} ?>
