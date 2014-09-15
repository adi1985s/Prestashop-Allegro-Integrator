<?php
if (!defined('_PS_VERSION_'))
  exit;
 
class MyAllegro extends Module
{
  public function __construct()
  {
    $this->name = 'myallegro';
    $this->tab = 'administration';
    $this->version = '1.0.0';
    $this->author = 'Michał Nowak';
    $this->need_instance = 0;
    $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_); 
    $this->bootstrap = true;
 
    parent::__construct();
 
    $this->displayName = $this->l('My Allegro Integrator');
    $this->description = $this->l('Basic Allegro WebApi functions.');
 
    $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
 
    if (!Configuration::get('MYALLEGRO_NAME'))      
      $this->warning = $this->l('No name provided');
  }
  public function install()
  {
  if (!parent::install())
    return false;
  return true;
  }
}
