<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-05 07:01:30
  from 'D:\XAMP\xampp\htdocs\web11\templates\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e3a5a3a0bce95_77777307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eee6a22391b06802bc9a1c7f1c69d1f64f9b1b3' => 
    array (
      0 => 'D:\\XAMP\\xampp\\htdocs\\web11\\templates\\user.tpl',
      1 => 1580882067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/admin.tpl' => 1,
    'file:tpl/login.tpl' => 1,
  ),
),false)) {
function content_5e3a5a3a0bce95_77777307 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
bootstrap/bootstrap.min.css" />

        <title>會員管理</title>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
bootstrap/jquery-3.4.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
bootstrap/popper.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
    </head>
    <body>
        <style>
            .form-signin {
                width: 100%;
                max-width: 400px;
                padding: 15px;
                margin: 0 auto;
            }
        </style>
        <?php if ($_SESSION['admin']) {?> <?php $_smarty_tpl->_subTemplateRender("file:tpl/admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php } else { ?> <?php $_smarty_tpl->_subTemplateRender("file:tpl/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }?>
    </body>
</html>
<?php }
}
