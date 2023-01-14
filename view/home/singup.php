<?php

    require_once("C:/laragon/www/LoginRegistroPHP/view/head/head.php");

?>

<div class="fondo-login">
    <div class="icon">
        <a href="/LoginRegistroPHP/index.php">
            <i class="fa-solid fa-shield-cat cat-icon"></i>
        </a>    
    </div>
    <div class="titulo">
        Inicia sesión en CatCom
    </div>
    <form action="/LoginRegistroPHP/view/home/store.php" method="post" class="col-3 login" autocomplete="off">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
            <input type="email" name="correo" value="<?= (!empty($_GET['correo'])) ? $_GET['correo'] : "" ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <div class="box-eye">
                <button type="button" onclick="showPassword('password', 'eyePassword')">
                    <i id="eyePassword" class="fa-solid fa-eye showPassword"></i>
                </button>
            </div>
            <input type="password" name="contraseña" value="<?= (!empty($_GET['contraseña'])) ? $_GET['contraseña'] : "" ?>" class="form-control" id="password">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Repite la contraseña</label>
            <div class="box-eye">
                <button type="button" onclick="showPassword('password2', 'eyePassword2')">
                    <i id="eyePassword2" class="fa-solid fa-eye showPassword"></i>
                </button>
            </div>
            <input type="password" name="confirmarContraseña" value="<?= (!empty($_GET['confirmarContraseña'])) ? $_GET['confirmarContraseña'] : "" ?>" class="form-control" id="password2">
        </div>
        <?php if(!empty($_GET['error'])):?>
            <div id="alertError" style="margin: auto;" class="alert alert-danger mb-2" role="alert">
                <?= !empty($_GET['error']) ? $_GET['error'] : "" ?>
            </div>
        <?php endif;?>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Crear cuenta</button>
        </div>
    </form>
    <div class="col-3 login mt-3">
        Tienes una cuenta? <a href="/LoginRegistroPHP/view/home/login.php" style="text-decoration: none;">Inicia Sesión</a>
    </div>
</div>

<?php

    require_once("C://laragon/www/LoginRegistroPHP/view/head/footer.php");

?>

