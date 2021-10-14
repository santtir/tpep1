<?php
/* Smarty version 3.1.39, created on 2021-10-13 22:15:54
  from 'C:\xampp\htdocs\Web2tpe\tpep1\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61673e7ab47915_50198285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd28deaa7eaa481fcc8ebd869e7ef51278f01af11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2tpe\\tpep1\\templates\\header.tpl',
      1 => 1634155823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61673e7ab47915_50198285 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo '<?php ';?>
echo BASE_URL <?php echo '?>';?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Campeones Sudamericanos</title>
    
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">Campeones Sudamericanos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="teams">Todos Los Equipos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="administrator">Acceso Administrador</a>
                    </li>
                    <li class="nav-item ms-auto">
                             <?php if ((isset($_SESSION['USER_ID']))) {?>
                                <a class="nav-link" href="logout">(<?php echo $_SESSION['USER_EMAIL'];?>
) Logout</a>
                            <?php } else { ?>
                                <a class="nav-link" href="login">Ingresar</a>
                            <?php }?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>
<!DOCTYPE html>
<html lang="en"><?php }
}
