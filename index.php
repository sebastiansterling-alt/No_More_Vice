<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No More Vice</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Encabezado -->
    <header>
        <h1>No More Vice</h1>
        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#informacion">Información</a></li>
                <li><a href="#estadisticas">Mis Estadísticas</a></li>
                <li><a href="#login">Iniciar Sesión</a></li>
                <li><a href="#registro">Registrarse</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sección Inicio -->
    <section id="inicio">
        <h2>Bienvenido a No More Vice</h2>
        <p>Aquí encontrarás información, motivación y herramientas para mejorar tus hábitos y superar las adicciones.</p>
    </section>

    <!-- Sección de Información -->
    <section id="informacion">
        <h2>Información sobre Vida Saludable</h2>
        
        <!-- Problemáticas con Consecuencias -->
        <article class="accordion">
            <button class="accordion-btn">Problemáticas</button>
            <div class="accordion-content">
                <p>Descripción de las problemáticas relacionadas con las adicciones.</p>
                <div class="subtema">
                    <h4>Consecuencias</h4>
                    <p>Impacto de los malos hábitos y beneficios de una vida saludable.</p>
                </div>
            </div>
        </article>

        <!-- Motivación con Rutinas y Malos Hábitos -->
        <article class="accordion">
            <button class="accordion-btn">Motivación</button>
            <div class="accordion-content">
                <p>Frases, consejos y recursos para motivarte día a día.</p>
                <div class="subtema">
                    <h4>Rutinas</h4>
                    <p>Ejemplos de rutinas saludables para mantenerte enfocado y evitar recaídas.</p>
                </div>
                <div class="subtema">
                    <h4>Malos Hábitos</h4>
                    <p>Cómo identificar y reemplazar los malos hábitos por acciones positivas y sostenibles.</p>
                </div>
            </div>
        </article>
    </section>

    <!-- Sección de Estadísticas -->
    <section id="estadisticas">
        <h2>Mis Estadísticas</h2>
        <p>Aquí podrás ver tu progreso personal.</p>
        <div id="progreso-usuario">
            <!-- Aquí se mostrarán los datos de progreso desde la base de datos -->
        </div>
    </section>

    <!-- Sección de Login -->
    <section id="login">
        <h2>Iniciar Sesión</h2>
        <form>
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" required>
            <br>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <button type="submit">Ingresar</button>
        </form>
    </section>

    <!-- Sección de Registro -->
    <section id="registro">
        <h2>Registrarse</h2>
        <form>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <br>
            <label for="correo-reg">Correo:</label>
            <input type="email" id="correo-reg" name="correo" required>
            <br>
            <label for="password-reg">Contraseña:</label>
            <input type="password" id="password-reg" name="password" required>
            <br>
            <button type="submit">Crear Cuenta</button>
        </form>
    </section>

    <!-- Sección de Contacto -->
    <section id="contacto">
        <h2>Contacto</h2>
        <p>¿Tienes dudas o necesitas apoyo? Contáctanos.</p>
        <form>
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" rows="4" required></textarea>
            <br>
            <button type="submit">Enviar</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 No More Vice | Manejo de Adicciones</p>
    </footer>

    <!-- Script para acordeón -->
    <script>
        const accordions = document.querySelectorAll('.accordion');
        accordions.forEach(acc => {
            const btn = acc.querySelector('.accordion-btn');
            btn.addEventListener('click', () => {
                // Cierra todos antes de abrir otro
                accordions.forEach(a => {
                    if (a !== acc) a.classList.remove('active');
                });
                acc.classList.toggle('active');
            });
        });
    </script>
</body>
</html>