

<form action="./view/pages/user-info-page.php"method="get">
    <h2>Registro de usuario</h2>
    <div class="form_row">
        <div>
            <label for="first-name">Nombres del usuario</label>
            <input id="first-name"type="text" name="first_name" placeholder="john" required>

        </div>
        <div>
            <label for="last-name">Apellidos del usuario</label>
            <input id="last-name"type="text" name="last_name" placeholder="Doe" required> 
        </div>
        <div>
            <label for="document">Cédula del usuario</label>
            <input id="document"type="text" name="document" placeholder="1023786098" required> 
        </div>

    </div>

    <div class="buttons">
    <button>Registrar</button>
    <a href="../index.php">Volver</a>
    </div>


</form>