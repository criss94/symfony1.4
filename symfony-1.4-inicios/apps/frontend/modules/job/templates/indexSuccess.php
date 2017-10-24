<h1>Jobeet jobs List</h1>
<a href="<?php echo url_for('job/new') ?>">New</a>
<a href="categories">categorias</a>
<?php include_partial('job/list', array('jobs' => $jobs)) ?>