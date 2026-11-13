<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de gastos semanales</title>
</head>
<body>
    
   <main>
         <section>
            <h2>Registrar nuevo gasto</h2>
            <form id="formUsuario" action="guardar_gasto.php" method="POST">
      <label for="concepto">Concepto</label>
      <input type="text" id="concepto" name="concepto" placeholder="concepto completo">

      <label for="monto">Monto</label>
      <input type="text" id="monto" name="monto" placeholder="monto">

      <label for="categoria">Categoria:</label>
      <input type="text" id="categoria" name="categoria" placeholder="categoria">

      <button class="boton" type="submit">Registrar</button>
    </form>
        </section>

       <section>
            <h2>Lista de mensajes</h2>

            <div class="tabla-mensajes">
                <table>
                    <thead>
                        <tr>
                          
                            <th>Concepto</th>
                            <th>Monto</th>
                            <th>Categoria</th>
                            
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        require 'consulta_gasto.php';
                        $rsGasto=consultaGasto();
                        while($arrGasto= mysqli_fetch_array($rsGasto)){
                            
                        

                        echo "<tr>
                        <td>".$arrGasto['concepto']."</td>
                        <td>".$arrGasto['monto']."</td>
                        <td>".$arrGasto['categoria']."</td>
                        
                        
                        </tr>";
                        }
                        ?>

                        
                    </tbody>
                </table>
            </div>

           
        </section>
       </main>

</body>
</html>