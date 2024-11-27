<!doctype html>
<html class="no-js" lang="">
<head>
</head>
<body>
{include file='public/left.tpl'}
<div id="right-panel" class="right-panel">
    {include file='public/header.tpl'}
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <!-- Formulaire de connexion -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Connexion</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="index.php" method="post">
                                <input type="hidden" name="gestion" value="connexion">
                                <input type="hidden" name="action" value="login">
                                
                                <div class="form-group">
                                    <label for="username">Nom d'utilisateur</label>
                                    <input type="text" name="username" id="username" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="password">Mot de passe</label>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Se connecter</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Formulaire d'inscription -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Inscription</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="index.php" method="post">
                                <input type="hidden" name="gestion" value="connexion">
                                <input type="hidden" name="action" value="register">
                                
                                <div class="form-group">
                                    <label for="reg_username">Nom d'utilisateur</label>
                                    <input type="text" name="username" id="reg_username" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="reg_password">Mot de passe</label>
                                    <input type="password" name="password" id="reg_password" class="form-control" required>
                                </div>
                                
                                <button type="submit" class="btn btn-success">S'inscrire</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>