<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Sport Family - Centro Infantil</title>
    
    <!-- Water CSS para diseño minimalista y responsive -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    
    <!-- Fuentes infantiles de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Comic+Neue&display=swap" rel="stylesheet">
    
    <style>
        /* ===== PALETA DE COLORES OFICIAL ===== */
        :root {
            --rosa: #BF3978;    /* Amor, calidez */
            --morado: #3B0273;   /* Creatividad, confianza */
            --verde: #88A61C;    /* Crecimiento, naturaleza */
            --amarillo: #D9BD32; /* Alegría, optimismo */
            --naranja: #F28729;  /* Energía, diversión */
        }
        
        /* ===== ESTILOS GENERALES ===== */
        body {
            font-family: 'Comic Neue', cursive;
            background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%);
            min-height: 100vh;
        }
        
        h1, h2, h3 {
            font-family: 'Fredoka One', cursive;
            color: var(--morado);
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        /* ===== SECCIÓN PODIO DE ESTRELLAS ===== */
        .podio {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin: 40px 0;
            flex-wrap: wrap;
        }
        
        .estrella-puesto {
            text-align: center;
            padding: 25px;
            border-radius: 20px;
            transition: transform 0.3s ease;
            min-width: 150px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        
        .estrella-puesto:hover {
            transform: scale(1.1) rotate(5deg);
        }
        
        .estrella {
            font-size: 3em;
            margin-bottom: 10px;
            animation: brillo 2s infinite alternate;
        }
        
        @keyframes brillo {
            from { transform: scale(1); }
            to { transform: scale(1.2); }
        }
        
        .puesto {
            display: block;
            font-weight: bold;
            font-size: 1.4em;
            margin-bottom: 8px;
            font-family: 'Fredoka One', cursive;
        }
        
        /* Colores específicos para cada puesto */
        #primero {
            background: var(--naranja);
            color: white;
            order: 1;
        }
        
        #segundo {
            background: var(--amarillo);
            color: var(--morado);
            order: 2;
        }
        
        #tercero {
            background: var(--verde);
            color: white;
            order: 3;
        }
        
        .mensaje-campeones {
            text-align: center;
            background: var(--rosa);
            color: white;
            padding: 25px;
            border-radius: 20px;
            margin: 30px 0;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        
        .mensaje-campeones h2 {
            color: white;
            margin: 0;
            font-size: 2em;
        }
        
        /* ===== FORMULARIO DE INSCRIPCIÓN SEGURO ===== */
        .formulario-seguro {
            background: var(--morado);
            color: white;
            padding: 40px;
            border-radius: 25px;
            max-width: 600px;
            margin: 40px auto;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        }
        
        .formulario-seguro h3 {
            color: white;
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.8em;
        }
        
        .formulario-seguro label {
            display: block;
            margin: 20px 0 8px;
            font-weight: bold;
            font-size: 1.1em;
        }
        
        .formulario-seguro input,
        .formulario-seguro select {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 12px;
            font-size: 1em;
            font-family: 'Comic Neue', cursive;
            box-sizing: border-box;
        }
        
        .formulario-seguro input:focus,
        .formulario-seguro select:focus {
            outline: 3px solid var(--amarillo);
        }
        
        .formulario-seguro button {
            background: var(--amarillo);
            color: var(--morado);
            border: none;
            padding: 18px 35px;
            border-radius: 12px;
            font-size: 1.2em;
            font-weight: bold;
            margin-top: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            font-family: 'Fredoka One', cursive;
        }
        
        .formulario-seguro button:hover {
            background: var(--naranja);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        /* ===== RESPONSIVE DESIGN ===== */
        @media (max-width: 768px) {
            .podio {
                gap: 20px;
            }
            
            .estrella-puesto {
                min-width: 120px;
                padding: 20px;
            }
            
            .formulario-seguro {
                padding: 25px;
                margin: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- ===== ENCABEZADO PRINCIPAL ===== -->
        <header style="text-align: center; margin-bottom: 40px;">
            <h1 style="font-size: 3em; margin-bottom: 10px;">🏃 Training Sport Family 🏃‍♀️</h1>
            <p style="font-size: 1.3em; color: var(--morado);">¡Donde cada niño descubre el campeón que lleva dentro!</p>
        </header>
        
        <!-- ===== PODIO DE ESTRELLAS ===== -->
        <section>
            <h2 style="text-align: center; font-size: 2.5em;">⭐ Nuestros Pequeños Campeones ⭐</h2>
            
            <div class="podio">
                <!-- Primer Puesto -->
                <div class="estrella-puesto" id="primero">
                    <div class="estrella">⭐</div>
                    <span class="puesto">1er Lugar</span>
                    <p>¡Campeón!</p>
                </div>
                
                <!-- Segundo Puesto -->
                <div class="estrella-puesto" id="segundo">
                    <div class="estrella">⭐</div>
                    <span class="puesto">2do Lugar</span>
                    <p>¡Increíble!</p>
                </div>
                
                <!-- Tercer Puesto -->
                <div class="estrella-puesto" id="tercero">
                    <div class="estrella">⭐</div>
                    <span class="puesto">3er Lugar</span>
                    <p>¡Fantástico!</p>
                </div>
            </div>
            
            <!-- Mensaje Inclusivo -->
            <div class="mensaje-campeones">
                <h2>¡TODOS SOMOS CAMPEONES! 🏆</h2>
                <p style="margin: 10px 0 0; font-size: 1.2em;">En Training Sport Family, celebramos el esfuerzo de cada niño</p>
            </div>
        </section>
        
        <!-- ===== FORMULARIO DE INSCRIPCIÓN ===== -->
        <section>
            <h2 style="text-align: center; font-size: 2.5em; margin-top: 60px;">📝 ¡Inscríbete Ahora! 📝</h2>
            
            <form class="formulario-seguro" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <h3>¡Únete a la Familia Deportiva! 🚀</h3>
                
                <!-- Campo: Nombre del Niño -->
                <label for="nombre">👦 Nombre del niño/a:</label>
                <input type="text" id="nombre" name="nombre" required 
                       pattern="[A-Za-záéíóúñÑ\s]{2,50}"
                       title="Solo letras y espacios (2-50 caracteres)"
                       placeholder="Ej: María González">
                
                <!-- Campo: Edad -->
                <label for="edad">🎂 Edad:</label>
                <input type="number" id="edad" name="edad" required 
                       min="3" max="12"
                       title="Entre 3 y 12 años"
                       placeholder="Ej: 8">
                
                <!-- Campo: Email del Padre -->
                <label for="email">📧 Email del padre/madre:</label>
                <input type="email" id="email" name="email" required
                       placeholder="ejemplo@familia.com">
                
                <!-- Campo: Teléfono -->
                <label for="telefono">📞 Teléfono de contacto:</label>
                <input type="tel" id="telefono" name="telefono" 
                       pattern="[0-9+]{9,15}"
                       title="Número válido (9-15 dígitos)"
                       placeholder="Ej: +1234567890">
                
                <!-- Campo: Actividad Favorita -->
                <label for="actividad">🎯 Actividad favorita:</label>
                <select id="actividad" name="actividad" required>
                    <option value="">Elige una actividad divertida</option>
                    <option value="futbol">⚽ Fútbol</option>
                    <option value="natacion">🏊 Natación</option>
                    <option value="baloncesto">🏀 Baloncesto</option>
                    <option value="atletismo">🏃 Atletismo</option>
                    <option value="gimnasia">🤸 Gimnasia</option>
                    <option value="danza">💃 Danza</option>
                </select>
                
                <!-- Botón de Envío -->
                <button type="submit">🎉 ¡Enviar Inscripción! 🎉</button>
            </form>
        </section>
        
        <!-- ===== INFORMACIÓN ADICIONAL ===== -->
        <section style="text-align: center; margin: 50px 0;">
            <h2 style="color: var(--verde);">🏅 ¿Por qué elegirnos?</h2>
            <div style="display: flex; justify-content: center; gap: 30px; flex-wrap: wrap; margin-top: 30px;">
                <div style="flex: 1; min-width: 200px; padding: 20px;">
                    <h3 style="color: var(--naranja);">👨‍🏫 Entrenadores Certificados</h3>
                    <p>Profesionales especializados en educación infantil</p>
                </div>
                <div style="flex: 1; min-width: 200px; padding: 20px;">
                    <h3 style="color: var(--rosa);">🏟️ Instalaciones Seguras</h3>
                    <p>Espacios diseñados para la seguridad de los niños</p>
                </div>
                <div style="flex: 1; min-width: 200px; padding: 20px;">
                    <h3 style="color: var(--morado);">💚 Enfoque en Valores</h3>
                    <p>Desarrollamos habilidades sociales y emocionales</p>
                </div>
            </div>
        </section>
    </div>

    <!-- ===== PROCESAMIENTO PHP DEL FORMULARIO ===== -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo '<div style="background: var(--verde); color: white; padding: 30px; border-radius: 20px; max-width: 600px; margin: 40px auto; text-align: center;">';
        echo '<h2 style="color: white; margin-bottom: 20px;">¡Inscripción Recibida! ✅</h2>';
        
        // ===== VALIDACIÓN Y LIMPIEZA DE DATOS =====
        
        // 1. LIMPIAR DATOS - Elimina espacios y convierte caracteres especiales
        $nombre = htmlspecialchars(trim($_POST['nombre']));
        $edad = intval($_POST['edad']); // Convierte a número entero
        $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
        $telefono = preg_replace('/[^0-9+]/', '', $_POST['telefono']); // Solo números y +
        $actividad = htmlspecialchars($_POST['actividad']);
        
        // 2. VALIDAR DATOS
        $errores = [];
        
        if (empty($nombre) || !preg_match('/^[A-Za-záéíóúñÑ\s]{2,50}$/', $nombre)) {
            $errores[] = "Nombre inválido (solo letras y espacios, 2-50 caracteres)";
        }
        
        if ($edad < 3 || $edad > 12) {
            $errores[] = "La edad debe estar entre 3 y 12 años";
        }
        
        if (!$email) {
            $errores[] = "Email inválido";
        }
        
        if (empty($actividad)) {
            $errores[] = "Debes seleccionar una actividad";
        }
        
        // 3. MOSTRAR RESULTADO O ERRORES
        if (empty($errores)) {
            echo "<p><strong>Nombre:</strong> $nombre</p>";
            echo "<p><strong>Edad:</strong> $edad años</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            if (!empty($telefono)) {
                echo "<p><strong>Teléfono:</strong> $telefono</p>";
            }
            echo "<p><strong>Actividad elegida:</strong> $actividad</p>";
            echo "<p style='margin-top: 20px; font-size: 1.2em;'>📬 <strong>Nos contactaremos contigo en 24 horas</strong></p>";
            echo "<p style='font-style: italic;'>¡Prepárate para divertirte y aprender!</p>";
        } else {
            echo "<h3 style='color: var(--amarillo);'>❌ Errores encontrados:</h3>";
            foreach ($errores as $error) {
                echo "<p>• $error</p>";
            }
            echo "<p>Por favor, corrige los errores e intenta nuevamente.</p>";
        }
        
        echo '</div>';
    }
    ?>
    
    <!-- ===== PIE DE PÁGINA ===== -->
    <footer style="text-align: center; padding: 30px; background: var(--morado); color: white; margin-top: 50px;">
        <p style="margin: 0; font-size: 1.1em;">🏆 Training Sport Family - Desarrollado por Mosha 🦝</p>
        <p style="margin: 10px 0 0; opacity: 0.8;">¡Cada niño es un campeón en potencia!</p>
    </footer>
</body>
</html>