<div class="col-lg-5 m-auto">
    <table class="table">
      <thead>
        <tr>
            <th class="text-center"><?php echo $cat->getCatName() ?></th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td><?php echo $cat->getCatName() ?></td>
        </tr>
        <tr>
            <td class="text-center"><?php echo link_to('volver','@categories','class=btn btn-outline-info btn-sm') ?></td>
        </tr>
      </tbody>
    </table>
</div>