<?php use_helper('I18N') ?>
<div class="col-xl-5 m-auto">
    <form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
        <table class="form-group col-xl-12">
        <tbody>
            <?php echo $form ?>
            <?php //echo $form->renderHiddenFields()) ?>
            <input type="hidden" name="signin[_csrf_token]" id="signin__csrf_token" value="<?php echo $form->getCSRFToken(); ?>" />
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">
              <input type="submit" class="form-control btn btn-info" value="<?php echo __('Entrar', null, 'sf_guard') ?>" />

              <?php $routes = $sf_context->getRouting()->getRoutes() ?>
              <?php if (isset($routes['@sf_guard_forgot_password'])): ?>
                <a href="<?php echo url_for('@sf_guard_forgot_password') ?>"><?php echo __('Olvidaste tu contraseña?', null, 'sf_guard') ?></a>
              <?php endif; ?>

              <?php if (isset($routes['@sf_guard_register'])): ?>
                <a href="<?php echo url_for('@sf_guard_register') ?>"><?php echo __('Registrarme', null, 'sf_guard') ?></a>
              <?php endif; ?>
            </td>
          </tr>
        </tfoot>
      </table>
    </form>
</div>