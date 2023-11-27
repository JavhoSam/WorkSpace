<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de Datos de Tienda</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
        <main>
            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/Login_cuenta.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Nombre de Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="php/GuardarRegistroUsuario.php" method="POST" class="formulario__register">
                        <h2>Regístrarse</h2>

                        <!-- TSesion -->
                        <input type="text" id="usuario" name="usuario" placeholder="Nombre de Usuario" required>
                        <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" required>

                        <!-- TRoles -->
                        <label for="rol">Rol:</label>
                        <select id="rol" name="rol" required>
                        <option value="administrador" name="administrador">Administrador</option>
                        <option value="usuario" name="usuario">Usuario</option>
                        </select>

                        <!-- TDeptos --> 
                        <label for="departamento">Departamento:</label>
                        <select id="departamento" name="departamento">
                          <option value="ventas" data-codigo-depto="001">Ventas</option>
                          <option value="almacen" data-codigo-depto="002">Almacen</option>
                          <option value="limpieza" data-codigo-depto="003">Limpieza</option>
                        </select>

                        <!-- Un input hidden para almacenar el código-depto -->
                        <input type="hidden" name="codigo-depto" id="codigo-depto">
                        
                        <!-- TDetallesEmpleados -->

                        <input type="correo" id="correo" name="correo" placeholder="Correo Electrónico" required>
                        <input type="tel" id="telefono" name="telefono" placeholder="Teléfono" required>
                        <input type="number" id="salario" name="salario" placeholder="Salario" required>

                        <label>Dirección:</label><br><br>

                        <label for="pais">País:</label>
                        <select id="pais" name="pais" required>
                        <option value="México">México</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Brasil">Brasil</option>
                        <option value="Chile">Chile</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Perú">Perú</option>
                        </select>

                        <label for="estado">Estado:</label>
                        <select id="estado" name="estado" required>
                        <option value="Aguascalientes">Aguascalientes</option>
                        <option value="BajaCalifornia">Baja California</option>
                        <option value="Campeche">Campeche</option>
                        <option value="Coahuila">Coahuila</option>
                        <option value="Colima">Colima</option>
                        <option value="Jalisco">Jalisco</option>
                        <option value="México">México</option>
                        <option value="Nayarit">Nayarit</option>
                        </select>

                        <label for="ciudad">Ciudad:</label>
                        <select id="ciudad" name="ciudad" required>
                        <option value="LaPaz">La Paz</option>
                        <option value="BajaCalifornia">Baja California</option>
                        <option value="Guadalajara">Guadalajara</option>
                        <option value="Morelia">Morelia</option>
                        <option value="Tepic">Tepic</option>
                        <option value="PuertoVallarta">Puerto Vallarta</option>
                        <option value="SanJose">San José</option>
                        <option value="Porvenir">Porvenir</option>
                        </select>

                        <label for="colonia">Colonia:</label>
                        <select id="colonia" name="colonia" required>
                        <option value="Juárez">Juárez</option>
                        <option value="Roma">Roma</option>
                        <option value="Polanco">Polanco</option>
                        <option value="Tlatelolco">Tlatelolco</option>
                        <option value="Coyoacán">Coyoacán</option>
                        <option value="Narvarte">Narvarte</option>
                        <option value="Tlalpan">Tlalpan</option>
                        <option value="Condesa">Condesa</option>
                        </select>

                        <input id="calle" name="calle" autocomplete="home street-address" placeholder="Calle y Número" required>

                        <input id="codigo-postal" name="codigo-postal" autocomplete="home postal-code" placeholder="Código postal" required>

                        <label for="fecha-contratacion">Fecha de Contratación:</label>
                        <input type="date" id="fecha-contratacion" name="fecha-contratacion" required>

                        <label for="puesto">Puesto:</label>
                        <select id="puesto" name="puesto" required>
                        <option value="gerente">Gerente</option>
                        <option value="empleado">Empleado</option>
                        </select>

                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="assets/js/script.js"></script>
</body>
</html>