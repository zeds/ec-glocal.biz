<?php /* Smarty version Smarty-3.1.21, created on 2022-06-16 22:30:29
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/sales_reports/components/amchart_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47080596062ab3075683eb2-98335092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba64ca104af3a50242dd1f8e816fe9c7be096c74' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/sales_reports/components/amchart_bar.tpl',
      1 => 1625815526,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '47080596062ab3075683eb2-98335092',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'chart_id' => 0,
    'chart_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62ab307568c412_50369742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62ab307568c412_50369742')) {function content_62ab307568c412_50369742($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.inline_script.php';
?><div id="chartdiv_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chart_id']->value, ENT_QUOTES, 'UTF-8');?>
am_bar" style="width: 100%; height: 550px;"></div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    (function (_, $) {
        $.ceEvent('on', 'ce.tab.show', function(){
            chart = new AmCharts.AmSerialChart();
            chart.categoryField = "title";
            chart.columnSpacing = 90;

            var categoryAxis = chart.categoryAxis;
            categoryAxis.labelRotation = 90;
            categoryAxis.dashLength = 5;
            categoryAxis.gridPosition = "start";

            var valueAxis = new AmCharts.ValueAxis();
            valueAxis.dashLength = 5;
            chart.addValueAxis(valueAxis);

            var graph = new AmCharts.AmGraph();
            graph.valueField = "value";
            graph.colorField = "color";
            graph.descriptionField = "full_descr";
            graph.balloonText = "<span style='font-size:14px'>[[description]]: <b>[[value]]</b></span>";
            graph.type = "column";
            graph.lineAlpha = 0;
            graph.fillAlphas = 1;
            chart.addGraph(graph);

            var chartCursor = new AmCharts.ChartCursor();
            chartCursor.cursorAlpha = 0;
            chartCursor.zoomable = false;
            chartCursor.categoryBalloonEnabled = false;
            chart.addChartCursor(chartCursor);

            chart.dataProvider = <?php echo json_encode($_smarty_tpl->tpl_vars['chart_data']->value);?>
;
            // this makes the chart 3D
            chart.depth3D = 15;
            chart.angle = 30;

            chart.write("chartdiv_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chart_id']->value, ENT_QUOTES, 'UTF-8');?>
am_bar");
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
