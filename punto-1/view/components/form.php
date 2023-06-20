<?php include"./controller/calculationController.php";?>

<form method="post">
    <h2>Calculadora</h2>
    <div class="form_row">
        <div>
            <label for="first-number">Digite el primer número</label>
            <input id="first-number"type="text" name="first_number" placeholder="5">

        </div>
        <div>
            <label for="second-number">Digite el segundo número</label>
            <input id="second-number"type="text" name="second_number" placeholder="5">

        </div>
        <div>
            <label for="operation-type">Tipo de operación</label>
            <select name="operation_type" id="operation-type">
                <option value="blank"> - </option>
                <option value="sumar"> Sumar </option>
                <option value="restar"> Restar </option>
                <option value="multiplicar"> Multiplicar </option>
                <option value="dividir"> Dividir </option>

            </select> 
        </div>

    </div>
    <button>Calcular</button>
    <div class="volver">
    <a href="../index.php">Volver</a>
    </div>


</form>