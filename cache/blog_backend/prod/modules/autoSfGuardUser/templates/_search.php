<div class="module_search">
  <div class="filter_box" data-load-url="<?php echo url_for(array('module' => 'sfGuardUser', 'action' => 'showFilters')) ?>"></div>
                 <a class="advance_search f_left" title="<?php echo __('Recherche avancée') ?>"></a>
            
  <?php    
    $currentSearch = $sf_user->getAttribute('sfGuardUser'.'.search', '', 'admin_module');
    
    
    printf('<form action="%s" method="get">', url_for('@sf_guard_user'));
    printf('<input id="module_search_input" class="ui-corner-left  f_left" type="text" title="%s" value="%s" name="search"/>',
      __('Rechercher dans ') . 'sfGuardUser',
      $currentSearch
    );
    printf('<input type="submit" id="button_module_search" class="mp_submit  no_margin graybutton f_left" value="%s" />', __('Rechercher'));
    if ($currentSearch)
    {
      printf('<a href="%s" class="cancel_search" title="%s">&nbsp;</a>', url_for('@sf_guard_user'.'?search='), __('Annuler la recherche'));
    }
  ?>
  </form>
  
</div>