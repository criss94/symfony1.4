<div class="col-xs-12 col-md-12 col-lg-9 col-xl-9">
  <?php if (!$pager->getNbResults()): ?>
    <p><?php echo __('No result', array(), 'sf_admin') ?></p>
  <?php else: ?>

    <div class="row col-sm-12 col-md-12">
      <div class="col-sm-4 col-md-4 paddingtop10">
          <p class="results_pagination">
              <?php echo format_number_choice('[0] no result|[1] 1 result|(1,+Inf] %1% results', array('%1%' => $pager->getNbResults()), $pager->getNbResults(), 'sf_admin') ?>
              <?php if ($pager->haveToPaginate()): ?>
                  <?php echo __('(page %%page%%/%%nb_pages%%)', array('%%page%%' => $pager->getPage(), '%%nb_pages%%' => $pager->getLastPage()), 'sf_admin') ?>
              <?php endif; ?>
          </p>
      </div>
      <div class="col-sm-8 col-md-8 paddingbottom10">
          <?php if ($pager->haveToPaginate()): ?>
              <?php include_partial('category/pagination', array('pager' => $pager)) ?>
          <?php endif; ?>
      </div>
    </div>

    <div class="table-responsive">
      <table class="table table-hover table-striped">
          <thead>
            <tr>
              <th id="sf_admin_list_batch_actions"><input id="sf_admin_list_batch_checkbox" type="checkbox" onclick="checkAll();" /></th>
              <?php include_partial('category/list_th_tabular', array('sort' => $sort)) ?>
              <!-- este boton fue modificado totalmente -->
              <th class="text-center">
                  <a class="link_actions" title="Agregar" href="<?php echo url_for('@categorias_new') ?>">
                      <i class="icon_new fa fa-plus" aria-hidden="true"></i>
                  </a>
              </th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th colspan="5">
                  <div class="row col-sm-6 col-md-5 margintop15"> 
                      <?php include_partial('category/list_batch_actions', array('helper' => $helper)) ?>
                  </div>                  
              </th>
            </tr>
          </tfoot>
          <tbody>
            <?php foreach ($pager->getResults() as $i => $categorias): $odd = fmod(++$i, 2) ? 'odd' : 'even' ?>
              <tr class="sf_admin_row <?php echo $odd ?>">
                <?php include_partial('category/list_td_batch_actions', array('categorias' => $categorias, 'helper' => $helper)) ?>
                <?php include_partial('category/list_td_tabular', array('categorias' => $categorias)) ?>
                <?php include_partial('category/list_td_actions', array('categorias' => $categorias, 'helper' => $helper)) ?>
              </tr>
            <?php endforeach; ?>
          </tbody>
      </table>
    </div>
  <?php endif; ?>
</div>
<script type="text/javascript">
/* <![CDATA[ */
function checkAll()
{
  var boxes = document.getElementsByTagName('input'); for(var index = 0; index < boxes.length; index++) { box = boxes[index]; if (box.type == 'checkbox' && box.className == 'sf_admin_batch_checkbox') box.checked = document.getElementById('sf_admin_list_batch_checkbox').checked } return true;
}
/* ]]> */
</script>
