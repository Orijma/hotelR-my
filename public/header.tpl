       <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>


                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="public/images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                        {if isset($smarty.session.username)}
                            <a class="nav-link" href="index.php?gestion=connexion&action=logout"><i class="fa fa-power -off"></i>deconnexion</a>                        </div>
                        {else}
                            <a class="nav-link" href="index.php?gestion=connexion&action=login"><i class="fa fa-power -off"></i>connexion</a>                        </div>
                        {/if}
                    </div>
                        <div class="user-area">
                        {if isset($smarty.session.username)}
                             Bienvenue {$smarty.session.username}
                        {else}
                             Bienvenue ! 
                         {/if}

                        </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
