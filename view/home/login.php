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
        Create una cuenta en CatCom
    </div>
    <form action="/LoginRegistroPHP/view/home/verify.php" method="post" class="col-3 login" autocomplete="off">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
            <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <div class="box-eye">
                <button type="button" onclick="showPassword('password', 'eyePassword')">
                    <i id="eyePassword" class="fa-solid fa-eye showPassword"></i>
                </button>
            </div>
            <input type="password" name="contraseña" class="form-control" id="password">
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
    <div class="col-3 login mt-3">
        Nuevo en CatCom? <a href="/LoginRegistroPHP/view/home/singup.php" style="text-decoration: none;">Create una cuenta</a>
    </div>
</div>

<?php

    require_once("C:/laragon/www/LoginRegistroPHP/view/head/footer.php");

?>

