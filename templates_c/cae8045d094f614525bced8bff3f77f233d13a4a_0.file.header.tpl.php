<?php
/* Smarty version 4.3.4, created on 2024-11-27 12:49:44
  from 'C:\wamp64\www\hotelR-my\public\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67471568068b25_27640280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cae8045d094f614525bced8bff3f77f233d13a4a' => 
    array (
      0 => 'C:\\wamp64\\www\\hotelR-my\\public\\header.tpl',
      1 => 1732711780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67471568068b25_27640280 (Smarty_Internal_Template $_smarty_tpl) {
?>       <!-- Header-->
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
                        <?php if ((isset($_SESSION['username']))) {?>
                            <a class="nav-link" href="index.php?gestion=connexion&action=logout"><i class="fa fa-power -off"></i>deconnexion</a>                        </div>
                        <?php } else { ?>
                            <a class="nav-link" href="index.php?gestion=connexion&action=login"><i class="fa fa-power -off"></i>connexion</a>                        </div>
                        <?php }?>
                    </div>
                        <div class="user-area">
                        <?php if ((isset($_SESSION['username']))) {?>
                             Bienvenue <?php echo $_SESSION['username'];?>

                        <?php } else { ?>
                             Bienvenue ! 
                         <?php }?>

                        </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
<?php }
}
