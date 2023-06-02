<?php require_once "header.php";?>
<?php
            echo $idnotario = $_REQUEST['id']; 
          ?>

    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          # iddatos, subserie, lugar, fecha, otorgante, favorecido, protocolo, escritura, folio
          <h3>Otorgado por:</h3>
          <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Otorgante</th>
                    <th>Favorecido</th>
                    <th>Protocolo</th>
                    <th>Escritura</th>
                    <th>Folio</th>
                    <th>Sub Serie</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
            </tbody>
          </table>
          
          <h3>A Favor de:</h3>

          <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Otorgante</th>
                    <th>Favorecido</th>
                    <th>Protocolo</th>
                    <th>Escritura</th>
                    <th>Folio</th>
                    <th>Sub Serie</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>  


<?php require_once "footer.php";?>