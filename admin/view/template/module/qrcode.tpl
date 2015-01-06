<?php echo $header; ?>
<div id="content">
<div class="breadcrumb">
  <?php foreach ($breadcrumbs as $breadcrumb) { ?>
  <?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
  <?php } ?>
</div>
<?php if ($error_warning) { ?>
<div class="warning"><?php echo $error_warning; ?></div>
<?php } ?>
<div class="box">
  <div class="heading">
    <h1><img src="view/image/module.png" alt="" /> <?php echo $heading_title; ?></h1>
    <div class="buttons"><a onclick="$('#form').submit();" class="button"><span><?php echo $button_save; ?></span></a><a onclick="location = '<?php echo $cancel; ?>';" class="button"><span><?php echo $button_cancel; ?></span></a></div>
  </div>
  <div class="content">
    <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form">
      <table id="module" class="list">
        <thead>
          <tr>
            <td class="left"><?php echo $entry_code; ?></td>
			<td class="left"><?php echo $entry_generator; ?></td>
            <td class="left"><?php echo $entry_dimension; ?></td>
            <td class="left"><?php echo $entry_layout; ?></td>
            <td class="left"><?php echo $entry_position; ?></td>
            <td class="left"><?php echo $entry_status; ?></td>
            <td class="right"><?php echo $entry_sort_order; ?></td>
            <td></td>
          </tr>
        </thead>
        <?php $module_row = 0; ?>
        <?php foreach ($modules as $module) { ?>
        <tbody id="module-row<?php echo $module_row; ?>">
          <tr>
            <td class="left"><input type="text" name="qrcode_module[<?php echo $module_row; ?>][code]" value="<?php echo $module['code']; ?>" size="25" />
			</td>
			<td class="left">
				<textarea cols="60" rows="5" name="qrcode_module[<?php echo $module_row; ?>][gen]" ><?php echo $module['gen']; ?></textarea>
				<br><?php if ($module['show']) { ?>
				<input type="radio" name="qrcode_module[<?php echo $module_row; ?>][show]" value="1" checked="checked" />
                <?php echo $entry_show_product ; ?>
                <input type="radio" name="qrcode_module[<?php echo $module_row; ?>][show]" value="0" />
                <?php echo $entry_no_show_product; ?>
                <?php } else { ?>
                <input type="radio" name="qrcode_module[<?php echo $module_row; ?>][show]" value="1" />
                <?php echo $entry_show_product; ?>
                <input type="radio" name="qrcode_module[<?php echo $module_row; ?>][show]" value="0" checked="checked" />
                <?php echo  $entry_no_show_product; ?>
			    <?php }?>
			</td>
            <td class="left"><input type="text" name="qrcode_module[<?php echo $module_row; ?>][image_width]" value="<?php echo $module['image_width']; ?>" size="3" />
              <input type="text" name="qrcode_module[<?php echo $module_row; ?>][image_height]" value="<?php echo $module['image_height']; ?>" size="3" />
              <?php if (isset($error_image[$module_row])) { ?>
              <span class="error"><?php echo $error_image[$module_row]; ?></span>
              <?php } ?></td>
            <td class="left"><select name="qrcode_module[<?php echo $module_row; ?>][layout_id]">
                <?php foreach ($layouts as $layout) { ?>
                <?php if ($layout['layout_id'] == $module['layout_id']) { ?>
                <option value="<?php echo $layout['layout_id']; ?>" selected="selected"><?php echo $layout['name']; ?></option>
                <?php } else { ?>
                <option value="<?php echo $layout['layout_id']; ?>"><?php echo $layout['name']; ?></option>
                <?php } ?>
                <?php } ?>
              </select></td>
            <td class="left"><select name="qrcode_module[<?php echo $module_row; ?>][position]">
                <?php if ($module['position'] == 'content_top') { ?>
                <option value="content_top" selected="selected"><?php echo $text_content_top; ?></option>
                <?php } else { ?>
                <option value="content_top"><?php echo $text_content_top; ?></option>
                <?php } ?>
                <?php if ($module['position'] == 'content_bottom') { ?>
                <option value="content_bottom" selected="selected"><?php echo $text_content_bottom; ?></option>
                <?php } else { ?>
                <option value="content_bottom"><?php echo $text_content_bottom; ?></option>
                <?php } ?>
                <?php if ($module['position'] == 'column_left') { ?>
                <option value="column_left" selected="selected"><?php echo $text_column_left; ?></option>
                <?php } else { ?>
                <option value="column_left"><?php echo $text_column_left; ?></option>
                <?php } ?>
                <?php if ($module['position'] == 'column_right') { ?>
                <option value="column_right" selected="selected"><?php echo $text_column_right; ?></option>
                <?php } else { ?>
                <option value="column_right"><?php echo $text_column_right; ?></option>
                <?php } ?>
              </select></td>
            <td class="left"><select name="qrcode_module[<?php echo $module_row; ?>][status]">
                <?php if ($module['status']) { ?>
                <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                <option value="0"><?php echo $text_disabled; ?></option>
                <?php } else { ?>
                <option value="1"><?php echo $text_enabled; ?></option>
                <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                <?php } ?>
              </select></td>
            <td class="right"><input type="text" name="qrcode_module[<?php echo $module_row; ?>][sort_order]" value="<?php echo $module['sort_order']; ?>" size="3" /></td>
            <td class="left"><a onclick="$('#module-row<?php echo $module_row; ?>').remove();" class="button"><span><?php echo $button_remove; ?></span></a></td>
          </tr>
        </tbody>
        <?php $module_row++; ?>
        <?php } ?>
        <tfoot>
          <tr>
            <td colspan="7"></td>
            <td class="left"><a onclick="addModule();" class="button"><span><?php echo $button_add_module; ?></span></a></td>
          </tr>
		  <tr>

		  </tr>
    <tr>
        <td></td>
        <td colspan="6"><br />
        </td>
    </tr>
    <tr>
        <td >Credits</td>
        <td colspan="6" ><a href="http://www.siamopencart.com/webboard/" title="Goto SiamOpencart Webboard">SiamOpencart Webboard</a></td>
    </tr>
    <tr>
        <td colspan="6"></td>
        <td class="left"></td>
    </tr>
    <tr>
        <td></td>
        <td colspan="6"><br />
        </td>
    </tr>
    <tr>
        <td><?php echo $entry_author; ?></td>
        <td colspan="5">
        Web: <a href="http://www.somsak2004.com/">http://www.somsak2004.com/</a><br />
        </td>
    </tr>
    <tr>
        <td style="vertical-align: middle;"><?php echo $entry_version_status ?></td>
	    <td colspan="5" style="vertical-align: middle;">Web: <a href="http://www.fpress.com">www.fpress.com</a></td>
      </tr>
        </tfoot>
      </table>
    </form>
  </div>
</div>
<script type="text/javascript"><!--
var module_row = <?php echo $module_row; ?>;

function addModule() {	
	html  = '<tbody id="module-row' + module_row + '">';
	html += '  <tr>';
	html += '    <td class="left"><input type="text" name="qrcode_module[' + module_row + '][code]" value="" size="25" /><BR></td>';
	html += '    <td class="left"><textarea cols="60" rows="5" name="qrcode_module[' + module_row + '][gen]" value=""></textarea><br>';
	html += '    <input type="radio" name="qrcode_module[' + module_row + '][show]" value="1" checked="checked" /> <?php echo $entry_show_product ; ?>';
	html += '    <input type="radio" name="qrcode_module[' + module_row + '][show]" value="0" /> <?php echo $entry_no_show_product; ?></td>';
	html += '    <td class="left"><input type="text" name="qrcode_module[' + module_row + '][image_width]" value="160" size="3" /> <input type="text" name="qrcode_module[' + module_row + '][image_height]" value="115" size="3" /></td>';	
	html += '    <td class="left"><select name="qrcode_module[' + module_row + '][layout_id]">';
	<?php foreach ($layouts as $layout) { ?>
	html += '      <option value="<?php echo $layout['layout_id']; ?>"><?php echo $layout['name']; ?></option>';
	<?php } ?>
	html += '    </select></td>';
	html += '    <td class="left"><select name="qrcode_module[' + module_row + '][position]">';
	html += '      <option value="content_top"><?php echo $text_content_top; ?></option>';
	html += '      <option value="content_bottom"><?php echo $text_content_bottom; ?></option>';
	html += '      <option value="column_left"><?php echo $text_column_left; ?></option>';
	html += '      <option value="column_right"><?php echo $text_column_right; ?></option>';
	html += '    </select></td>';
	html += '    <td class="left"><select name="qrcode_module[' + module_row + '][status]">';
    html += '      <option value="1" selected="selected"><?php echo $text_enabled; ?></option>';
    html += '      <option value="0"><?php echo $text_disabled; ?></option>';
    html += '    </select></td>';
	html += '    <td class="right"><input type="text" name="qrcode_module[' + module_row + '][sort_order]" value="" size="3" /></td>';
	html += '    <td class="left"><a onclick="$(\'#module-row' + module_row + '\').remove();" class="button"><span><?php echo $button_remove; ?></span></a></td>';
	html += '  </tr>';
	html += '</tbody>';
	
	$('#module tfoot').before(html);
	
	module_row++;
}
//--></script>
<?php echo $footer; ?>