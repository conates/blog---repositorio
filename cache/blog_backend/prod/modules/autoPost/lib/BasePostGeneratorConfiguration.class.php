<?php

/**
 * post module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage post
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePostGeneratorConfiguration extends mpRealtyAdminGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array(  '_new' =>   array(    'credentials' =>     array(      0 =>       array(        0 => 'Administrador',        1 => 'Autor',        2 => 'Colaborador',      ),    ),  ),  '_edit' =>   array(    'credentials' =>     array(      0 =>       array(        0 => 'Administrador',        1 => 'Editor',        2 => 'Autor',        3 => 'Colaborador',      ),    ),  ),  '_delete' =>   array(    'credentials' =>     array(      0 =>       array(        0 => 'Administrador',      ),    ),  ),);
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
    return array(  '_show' => NULL,  '_edit' => NULL,  '_delete' => NULL,);
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
    return '%%title%% - %%user_id%% - %%state%% - %%categories_list%% - %%tags_list%% - %%date%% - %%Comentarios%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Lista de Post';
  }

  public function getEditTitle()
  {
    return 'Editar Post %%slug%%';
  }

  public function getNewTitle()
  {
    return 'Nuevo Post';
  }

  public function getExportTitle()
  {
    return 'Export Post';
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
    return array(  0 => 'title',  1 => 'user_id',  2 => 'state',  3 => 'categories_list',  4 => 'tags_list',  5 => 'date',  6 => 'Comentarios',);
  }

  public function getExportDisplay()
  {
    return array(  0 => 'id',  1 => 'title',  2 => 'content',  3 => 'date',  4 => 'state',  5 => 'user_id',  6 => 'created_at',  7 => 'updated_at',  8 => 'slug',);
  }

  public function getNewRedirection()
  {
  return 'list';
    }

public function getEditRedirection()
{
return 'list';
}

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Título',),
      'content' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Contenido',),
      'date' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',  'label' => 'Fecha',),
      'state' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Enum',  'label' => 'Estado',),
      'user_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',  'label' => 'Autor',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',  'label' => 'Fecha de Creación',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',  'label' => 'Última actualización',),
      'slug' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'tags_list' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Lista de Etiquetas',),
      'categories_list' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Lista de Categorías',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'title' => array(),
      'content' => array(),
      'date' => array(),
      'state' => array(),
      'user_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'slug' => array(),
      'tags_list' => array(),
      'categories_list' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'title' => array(),
      'content' => array(),
      'date' => array(),
      'state' => array(),
      'user_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'slug' => array(),
      'tags_list' => array(),
      'categories_list' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'title' => array(),
      'content' => array(),
      'date' => array(),
      'state' => array(),
      'user_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'slug' => array(),
      'tags_list' => array(),
      'categories_list' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'title' => array(),
      'content' => array(),
      'date' => array(),
      'state' => array(),
      'user_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'slug' => array(),
      'tags_list' => array(),
      'categories_list' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'title' => array(),
      'content' => array(),
      'date' => array(),
      'state' => array(),
      'user_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'slug' => array(),
      'tags_list' => array(),
      'categories_list' => array(),
    );
  }

  public function getFieldsShow()
  {
    return array(
      'id' => array(),
      'title' => array(),
      'content' => array(),
      'date' => array(),
      'state' => array(),
      'user_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'slug' => array(),
      'tags_list' => array(),
      'categories_list' => array(),
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
    return 'PostForm';
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
    return 'PostFormFilter';
  }

public function getPagerClass()
{
return 'sfDoctrinePager';
}



public function getPagerMaxPerPage()
{
  $max_per_page = sfContext::getInstance()->getUser()->getAttribute('post.max_per_page', null, 'admin_module');


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
    return 'Aperçu Post';
  }

  public function getShowDisplay()
  {
      return array(  0 => 'id',  1 => 'title',  2 => 'content',  3 => 'date',  4 => 'state',  5 => 'user_id',  6 => 'created_at',  7 => 'updated_at',  8 => 'slug',);
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
    return "Post_Export_".date("d_m_Y_His");
  }
}
