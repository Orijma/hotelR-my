<!doctype html>
html class="no-js" lang="">
head>
   <title>Connexion</title>
/head>
body>
   {include file='public/left.tpl'}
   
   <div id="right-panel" class="right-panel">
       {include file='public/header.tpl'}
       
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
                                   
                                   {if isset($messageErreur)}
                                       <div class="alert alert-danger">{$messageErreur}</div>
                                   {/if}
                                   
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
/html>