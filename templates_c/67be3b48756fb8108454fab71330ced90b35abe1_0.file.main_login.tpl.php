<?php
/* Smarty version 3.1.30, created on 2017-11-18 01:40:36
  from "D:\1061014_php\UniServerZ\www\reporter\templates\main_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0f8f949d3a26_43768491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67be3b48756fb8108454fab71330ced90b35abe1' => 
    array (
      0 => 'D:\\1061014_php\\UniServerZ\\www\\reporter\\templates\\main_login.tpl',
      1 => 1510370104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a0f8f949d3a26_43768491 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh-Hant-TW">

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>

<body>

    <div class="img-container">
        <div class="container">
             <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <h1 class="pt-5">巷集談-街道新聞</h1>

            <form class="form-signin" name="form1" method="post" action="checklogin.php">
                <h2 class="form-signin-heading">Please sign in</h2>
                <input name="myusername" id="myusername" type="text" class="form-control" placeholder="Username" autofocus>
                <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Password">
                <!-- The checkbox remember me is not implemented yet...
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        -->
                <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

                <div id="message"></div>
            </form>
        </div>
    </div>


    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- The AJAX login script -->
    <?php echo '<script'; ?>
 src="js/login.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
