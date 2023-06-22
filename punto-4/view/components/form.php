<?php include"./controller/calculationController.php";?>

<form method="post">
    <h2>Calculadora de mayoria de edad con fechas</h2>
    <div class="form_row">
        <div>
            <label for="name">Nombre</label>
            <input id="name"type="text" name="name" placeholder="jhon" required>

        </div>
        <br>
        <div>
            <label for="date-birth">Seleccione su fecha de nacimiento</label>
            <input id="date-birth"type="date" name="date_birth" required> 
        </div>

    </div>
        <button>Calcular</button>
       
        <div class="volver">
        <a href="../index.php">Volver</a>
        </div>

</form>


