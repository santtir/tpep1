<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo BASE_URL ?>">
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
                             {if isset($smarty.session.USER_ID)}
                                <a class="nav-link" href="logout">({$smarty.session.USER_EMAIL}) Logout</a>
                            {else}
                                <a class="nav-link" href="login">Ingresar</a>
                            {/if}
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>
<!DOCTYPE html>
<html lang="en">