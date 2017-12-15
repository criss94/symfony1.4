<?php

/**
 * sf_guard_group module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage sf_guard_group
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSf_guard_groupGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'sf_guard_group' : 'sf_guard_group_'.$action;
  }
}
