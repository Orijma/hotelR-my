<?php
/* Smarty version 4.3.4, created on 2024-11-27 16:44:01
  from 'C:\wamp64\www\hotelR-my\mod_connexion\vue\connexionVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67474c51019728_82623099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4f48a55e47ca05158d3de1b55b7973c4e838f38' => 
    array (
      0 => 'C:\\wamp64\\www\\hotelR-my\\mod_connexion\\vue\\connexionVue.tpl',
      1 => 1732711849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/left.tpl' => 1,
    'file:public/header.tpl' => 1,
  ),
),false)) {
function content_67474c51019728_82623099 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
html class="no-js" lang="">
head>
   <title>Connexion</title>
/head>
body>
   <?php $_smarty_tpl->_subTemplateRender('file:public/left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   
   <div id="right-panel" class="right-panel">
       <?php $_smarty_tpl->_subTemplateRender('file:public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
       
       <div class="content mt-3">
           <div class="animated fadeIn">
               <div class="row">
                   <div class="col-md-6 offset-md-3">
                       <div class="card">
                           <div class="card-header">
                               <strong>Connexion</strong>
                           </div>
                           <div class="card-body card-block">
                               <form action="index.php" method="post">
                                   <input type="hidden" name="gestion" value="connexion">
                                   <input type="hidden" name="action" value="authentifier">
                                   
                                   <div class="form-group">
                                       <label for="username">Nom d'utilisateur</label>
                                       <input type="text" name="username" id="username" class="form-control" required>
                                   </div>
                                   
                                   <div class="form-group">
                                       <label for="password">Mot de passe</label>
                                       <input type="password" name="password" id="password" class="form-control" required>
                                   </div>
                                   
                                   <?php if ((isset($_smarty_tpl->tpl_vars['messageErreur']->value))) {?>
                                       <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['messageErreur']->value;?>
</div>
                                   <?php }?>
                                   
                                   <button type="submit" class="btn btn-primary">Se connecter</button>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
/body>
/html><?php }
}
