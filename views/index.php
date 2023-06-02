<?php require "header.php";

require_once "../models/busqueda.model.php";

@$otorgante = $_REQUEST['otorgante'];
@$favorecido = $_REQUEST['favorecido'];
@$fecha = $_REQUEST['fecha'];
@$bien = $_REQUEST['bien'];

$busqueda = new Busqueda();


if(empty($otorgante) && empty($favorecido) && empty($fecha) && empty($bien))
{
    #echo "todos vacio";
    $data = $busqueda->Listado();
}else{
    if(!empty($otorgante))
    {
        $data = $busqueda->Otorgante($otorgante);
    }else{
        if(!empty($favorecido))
        {
            $data = $busqueda->Favorecido($favorecido);
        }else{
            if(!empty($fecha))
            {
                $data = $busqueda->Fecha($fecha);
            }else{
                if(!empty($bien))
                {
                    $data = $busqueda->Bien($bien);
                }else{
                    echo "final";
                }
            }

        }

    }

}


?>

    <form>
                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                        <div class="large-12 cell">
                            <h1>Buscador de Arbolito</h1>
                        </div>
                        <div class="medium-6 cell">
                            <label>Otorgante
                            <input type="text" name="otorgante" id="otorgante" placeholder="Otorgante">
                            </label>
                        </div>
                        <div class="medium-6 cell">
                            <label>Favorecido
                            <input type="text" name="favorecido" id="favorecido" placeholder="Favorecido">
                            </label>
                        </div>
                        <div class="medium-6 cell">
                            <label>Fecha
                            <input type="date" name="fecha" id="fecha" placeholder="fecha">
                            </label>
                        </div>
                        <div class="medium-6 cell">
                            <label>Nombre del bien
                            <input type="text" name="bien" id="bien" placeholder="Nombre del bien">
                            </label>
                        </div>
                        <div class="medium-6 cell">
                            <button type="submit" class="button large">Buscar</button>
                        </div>
                    </div>
                </div>
    </form>

    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <h1>Resultado de la busqueda</h1>            
        </div>

        <div class="large-12 cell" id="tabla">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Otorgante</th>
                        <th>Favorecido</th>
                        <th>Fecha</th>
                        <th>Protocolo</th>
                        <th>Escritura</th>
                        <th>Folio</th>
                        <th>Nombre Bien</th>
                        <th>Opt</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $i=1;
                        while ($fila = $data->fetch_array(MYSQLI_ASSOC))
                        {
                        # iddatos, subserie, lugar, fecha, otorgante, favorecido, protocolo, escritura, folio
                    ?>
                    <td><?php echo $i; //$fila['iddatos'];?></td>
                    <td><?php echo $fila['otorgante'];?></td>
                    <td><?php echo $fila['favorecido'];?></td>
                    <td><?php echo $fila['fecha'];?></td>
                    <td><?php echo $fila['protocolo'];?></td>
                    <td><?php echo $fila['escritura'];?></td>
                    <td><?php echo $fila['folio'];?></td>
                    <td><?php echo $fila['subserie'];?></td>
                    <td><a href="detalles.php?id=<?php echo $fila['iddatos'];?>">Detalles</a></td>
                </tbody>
                    <?php
                        $i++;
                        }
                    ?>
            </table>
        </div>
      </div>
    </div>

<?php require "footer.php";?>