<?php
// auto-generated by sfViewConfigHandler
// date: 2017/11/15 15:54:19
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('bootstrap.min.css', '', array ());
  $response->addStylesheet('bastrap.css', '', array ());
  $response->addStylesheet('IDMstrap.css', '', array ());
  $response->addStylesheet('font-awesome.min.css', '', array ());
  $response->addStylesheet('styles.css', '', array ());
  $response->addJavascript('jquery.min.js', '', array ());
  $response->addJavascript('bootstrap.min.js', '', array ());
  $response->addJavascript('ba-modernizr.js', '', array ());
  $response->addJavascript('html5shiv.min.js', '', array ());


