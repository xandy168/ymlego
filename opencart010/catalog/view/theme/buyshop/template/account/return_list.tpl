<?php echo $header; ?>
<div class="container fluid_boxes">
  <ul class="breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
    <?php } ?>
  </ul>
  <div class="row"><?php echo $column_left; ?>
    <?php
    global $loader, $registry;
    $loader->model('custom/general');
      $model = $registry->get('model_custom_general');
      $class = $model->getCssClass($column_left,$column_right);
      ?>
    <div id="content" class="<?php echo $class; ?>"><?php echo $content_top; ?>
      <h1><?php echo $heading_title; ?></h1>
      <?php if ($returns) { ?>
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <td class="text-right"><?php echo $column_return_id; ?></td>
            <td class="text-left"><?php echo $column_status; ?></td>
            <td class="text-left"><?php echo $column_date_added; ?></td>
            <td class="text-right"><?php echo $column_order_id; ?></td>
            <td class="text-left"><?php echo $column_customer; ?></td>
            <td></td>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($returns as $return) { ?>
          <tr>
            <td class="text-right">#<?php echo $return['return_id']; ?></td>
            <td class="text-left"><?php echo $return['status']; ?></td>
            <td class="text-left"><?php echo $return['date_added']; ?></td>
            <td class="text-right"><?php echo $return['order_id']; ?></td>
            <td class="text-left"><?php echo $return['name']; ?></td>
            <td><a href="<?php echo $return['href']; ?>" data-toggle="tooltip" title="<?php echo $button_view; ?>" class="btn btn-info"><i class="fa fa-eye"></i></a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <div class="text-right"><?php echo $pagination; ?></div>
      <?php } else { ?>
      <p><?php echo $text_empty; ?></p>
      <?php } ?>
      <div class="buttons clearfix">
        <div class="pull-right"><a href="<?php echo $continue; ?>" class="btn btn-primary"><?php echo $button_continue; ?></a></div>
      </div>
      <?php echo $content_bottom; ?></div>
    <?php echo $column_right; ?></div>
</div>
<?php echo $footer; ?>