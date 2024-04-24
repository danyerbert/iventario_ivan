<?php
    include "content/inc/header.php";

    include "content/inc/sidebar.php";


    include 'php/conexion.php';
?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Administrador</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="listadeequipo.php">Administrador</a></li>
          <li class="breadcrumb-item active">Lista de equipos</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
      <div class="col-lg-12">
    <h5 class="card-title">Lista de Equipos</h5>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable">
        Registrar Equipo
    </button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#RegistrarUsuario">
        Registrar Usuario
    </button>
    <!-- Table with stripped rows -->

    <?php
      $sqlLista = "SELECT * FROM equipo_invent";
      $resultado = $mysqli->query($sqlLista);
    ?>
    <table class="table datatable">
      <thead>
        <tr>
          <th>
            Planta
          </th>
          <th>GCIA</th>
          <th>GCIA / DIV / DEP</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Cedula</th>
          <th>Usuario</th>
          <th>Cargo</th>
          <th>Tipo de equipo</th>
          <th>Marca de Equipo</th>
          <th>Modelo de Equipo</th>
          <th>Serial De equipo</th>
          <th>Marca de Monitor</th>
          <th>Modelo de Monitor</th>
          <th>Serial Del Monitor</th>
          <th>Bien Nacional</th>
          <th>Serial Tecnologia</th>
          <th>Sistema de Migracion</th>
          <th>Disco Duro</th>
          <th>Memoria Ram</th>
          <th>Nombre del equipo</th>
          <th>Mac del equipo</th>
          <th>Observaciones</th>
          <th>Tecnico Responsable</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          while ($row = $resultado->fetch_assoc()) :
        ?>
        <tr>
          <td><?php echo $row['planta'];?></td>
          <td><?php echo $row['gcia'];?></td>
          <td><?php echo $row['gcia_div_dep'];?></td>
          <td><?php echo $row['nombre'];?></td>
          <td><?php echo $row['apellido'];?></td>
          <td><?php echo $row['cedula'];?></td>
          <td><?php echo $row['usuario'];?></td>
          <td><?php echo $row['cargo'];?></td>
          <td><?php echo $row['tipo_de_equipo'];?></td>
          <td><?php echo $row['marca_equipo'];?></td>
          <td><?php echo $row['modelo'];?></td>
          <td><?php echo $row['serial_equipo'];?></td>
          <td><?php echo $row['monitor_marca'];?></td>
          <td><?php echo $row['monitor_modelo'];?></td>
          <td><?php echo $row['serial_monitor'];?></td>
          <td><?php echo $row['bien_nacional'];?></td>
          <td><?php echo $row['serial_tecnologia'];?></td>
          <td><?php echo $row['sistema_migrado'];?></td>
          <td><?php echo $row['disco_duro'];?></td>
          <td><?php echo $row['ram'];?></td>
          <td><?php echo $row['nombre_de_equipo'];?></td>
          <td><?php echo $row['mac_equipo'];?></td>
          <td><?php echo $row['observaciones'];?></td>
          <td><?php echo $row['tecnico_responsable'];?></td>
        </tr>
        <?php
          endwhile;
          
        ?>
      </tbody>
    </table>
    <!-- End Table with stripped rows -->

</div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php
    include "content/inc/footter.php";
    include "content/inc/script.php";
    include "content/modal/registroEquipo.php";
    include "content/modal/registrarUsuario.php";
  ?>

  <script src="js/registroEquipo.js"></script>
  <script src="js/registrarUsuario.js"></script>
</body>

</html>