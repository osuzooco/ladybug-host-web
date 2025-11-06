
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Únete - Training Sport Family</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    
    <style>
        :root {
            --rosa: #BF3978;
            --morado: #3B0273;
            --verde: #88A61C;
            --amarillo: #D9BD32;
            --naranja: #F28729;
        }
        
        body {
            font-family: 'Comic Neue', cursive;
            background: linear-gradient(135deg, #a1c4fd 0%, #c2e9fb 100%);
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .volver {
            display: inline-block;
            background: var(--morado);
            color: white;
            padding: 10px 20px;
            border-radius: 10px;
            text-decoration: none;
            margin-bottom: 30px;
            font-weight: bold;
        }
        
        .form-group {
            margin: 20px 0;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: var(--morado);
        }
        
        input, select {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 10px;
            font-size: 1em;
            font-family: 'Comic Neue', cursive;
            box-sizing: border-box;
        }
        
        input:focus, select:focus {
            border-color: var(--amarillo);
            outline: none;
        }
        
        .btn-unirse {
            background: var(--naranja);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 10px;
            font-size: 1.2em;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
            transition: all 0.3s ease;
        }
        
        .btn-unirse:hover {
            background: var(--verde);
            transform: translateY(-3px);
        }
        
        h1 {
            color: var(--morado);
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="ladybug.php" class="volver">← Volver al Inicio</a>
        
        <h1>🎯 Únete a Nuestra Familia</h1>
        <p style="text-align: center; color: #666; margin-bottom: 30px;">
            Completa este formulario y nos contactaremos contigo para contarte sobre nuestros planes
        </p>
        
        <form method="POST" action="ldbg_listen.php">
            <div class="form-group">
                <label for="nombre_niño">👦 Nombre del niño/a:</label>
                <input type="text" id="nombre_niño" name="nombre_niño" required 
                       placeholder="Ej: María González">
            </div>
            
            <div class="form-group">
                <label for="edad">🎂 Edad:</label>
                <input type="number" id="edad" name="edad" required 
                       min="3" max="17" placeholder="Ej: 8">
            </div>
            
            <div class="form-group">
                <label for="nombre_padre">👨‍👩‍👧‍👦 Nombre del padre/madre:</label>
                <input type="text" id="nombre_padre" name="nombre_padre" required 
                       placeholder="Ej: Ana López">
            </div>
            
            <div class="form-group">
                <label for="email">📧 Email:</label>
                <input type="email" id="email" name="email" required 
                       placeholder="ejemplo@familia.com">
            </div>
            
            <div class="form-group">
                <label for="telefono">📞 Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" 
                       placeholder="+123 456 7890">
            </div>
            
            <div class="form-group">
                <label for="actividad_interes">⚽ Actividad de interés:</label>
                <select id="actividad_interes" name="actividad_interes" required>
                    <option value="">Elige una actividad</option>
                    <option value="futbol">⚽ Fútbol</option>
                    <option value="natacion">🏊 Natación</option>
                    <option value="baloncesto">🏀 Baloncesto</option>
                    <option value="atletismo">🏃 Atletismo</option>
                    <option value="gimnasia">🤸 Gimnasia</option>
                    <option value="danza">💃 Danza</option>
                    <option value="no_se">🤔 Aún no sé</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="mensaje">💬 Mensaje adicional (opcional):</label>
                <input type="text" id="mensaje" name="mensaje" 
                       placeholder="Algo que quieras contarnos...">
            </div>
            
            <button type="submit" class="btn-unirse">
                🚀 ¡Enviar Solicitud!
            </button>
        </form>
        
        <div style="text-align: center; margin-top: 30px; padding: 20px; background: #f0f8ff; border-radius: 10px;">
            <h3 style="color: var(--verde);">📞 ¿Prefieres contacto directo?</h3>
            <p>Tel: +123 456 7890<br>
               Email: info@trainingsportfamily.com</p>
        </div>
    </div>
</body>

</html>
