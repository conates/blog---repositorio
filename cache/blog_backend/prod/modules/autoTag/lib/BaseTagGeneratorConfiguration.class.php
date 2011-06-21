<?php

/**
 * tag module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage tag
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTagGeneratorConfiguration extends mpRealtyAdminGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array(  '_new' =>   array(    'credentials' =>     array(      0 =>       array(        0 => 'Administrador',        1 => 'Editor',      ),    ),  ),  '_edit' =>   array(    'credentials' =>     array(      0 =>       array(        0 => 'Administrador',        1 => 'Editor',      ),    ),  ),  '_delete' =>   array(    'credentials' =>     array(      0 =>       array(        0 => 'Administrador',      ),    ),  ),);
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  
  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }
  
  public function getExportActions()
  {
    return array();
  }


  public function getListParams()
  {
    return '%%id%% - %%name%% - %%description%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Lista de Tags';
  }

  public function getEditTitle()
  {
    return 'Editar Tag %%name%%';
  }

  public function getNewTitle()
  {
    return 'Nuevo Tag';
  }

  public function getExportTitle()
  {
    return 'Export Tag';
  }

  
  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'id',  1 => 'name',  2 => 'description',);
  }

  public function getExportDisplay()
  {
    return array(  0 => 'id',  1 => 'name',  2 => 'description',);
  }

  public function getNewRedirection()
  {
  return 'edit';
    }

public function getEditRedirection()
{
return 'edit';
}

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Nombre',),
      'description' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Descripción',),
      'posts_list' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Lista de Post',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'name' => array(),
      'description' => array(),
      'posts_list' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'name' => array(),
      'description' => array(),
      'posts_list' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'name' => array(),
      'description' => array(),
      'posts_list' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'name' => array(),
      'description' => array(),
      'posts_list' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'name' => array(),
      'description' => array(),
      'posts_list' => array(),
    );
  }

  public function getFieldsShow()
  {
    return array(
      'id' => array(),
      'name' => array(),
      'description' => array(),
      'posts_list' => array(),
    );
  }


  
  public function hasExporting()
  {
    return false;
  }

  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'TagForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'TagFormFilter';
  }

public function getPagerClass()
{
return 'sfDoctrinePager';
}



public function getPagerMaxPerPage()
{
  $max_per_page = sfContext::getInstance()->getUser()->getAttribute('tag.max_per_page', null, 'admin_module');


  if ($max_per_page === null)
  {
    return 20;
  }
  else
  {
    return $max_per_page;
  }
}
  public function getDefaultSort()
  {
    return array(null, null);
  }

  protected function getConfig()
  {
    $configuration = parent::getConfig();
    $configuration['show'] = $this->getFieldsShow();
    return $configuration;
  }

  protected function compile()
  {
    parent::compile();
    
    $config = $this->getConfig();
    
    // add configuration for the show view 
    $this->configuration['show'] = array( 'fields'         => array(),
                                          'title'          => $this->getShowTitle(),
                                          'actions'        => $this->getShowActions(),
                                          'display'        => $this->getShowDisplay(),
                                        ) ;

    // show actions
    foreach (array('show') as $context)
    {
      foreach ($this->configuration[$context]['actions'] as $action => $parameters)
      {
        $this->configuration[$context]['actions'][$action] = $this->fixActionParameters($action, $parameters);
      }
    } 
  }

  public function getShowActions()
  {
    return array(  '_list' => NULL,  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getShowTitle()
  {
    return 'Aperçu Tag';
  }

  public function getShowDisplay()
  {
      return array(  0 => 'id',  1 => 'name',  2 => 'description',);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }

  public function getExportFilename()
  {
    return "Tag_Export_".date("d_m_Y_His");
  }
}
