<?php
session_start();
if ($_SESSION['us_tipo'] == 1 || $_SESSION['us_tipo'] == 3) {
    include_once 'layouts/header.php';
?>

    <title>Adm | Editar datos</title>
    <?php
    include_once 'layouts/nav.php';
    ?>
    <!-- Modal -->
    <div class="modal fade" id="cambiacontra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cambiar Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img id="avatar3" src="../img/avatar.png" alt="" class="profile-user-img img-fluid img-square">
                    </div>
                    <div class="text-center">
                        <b>
                            <?php
                            echo $_SESSION['nombre_us'];
                            ?>
                        </b>
                    </div>
                    <div class="alert alert-success text-center" id="update" style="display: none;">
                        <span><i class="fas fa-check m-1"> Se cambió password correctamente</i></span>
                    </div>
                    <div class="alert alert-danger text-center" id="noupdate" style="display: none;">
                        <span><i class="fas fa-times m-1"> El password no es correcto</i></span>
                    </div>
                    <form id="form-pass">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                            </div>
                            <input id="oldpass" class="form-control" placeholder="Ingrese password actual" type="password">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            </div>
                            <input id="newpass" class="form-control" placeholder="Ingrese password nueva" type="text">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn bg-gradient-primary">Guardar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- -------End Modal contra-------- -->
    <!-- Modal foto-->
    <div class="modal fade" id="cambiofoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cambiar Avatar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img id="avatar1" src="../img/avatar.png" alt="" class="profile-user-img img-fluid img-square">
                    </div>
                    <div class="text-center">
                        <b>
                            <?php
                            echo $_SESSION['nombre_us'];
                            ?>
                        </b>
                    </div>
                    <div class="alert alert-success text-center" id="edit" style="display: none;">
                        <span><i class="fas fa-check m-1"> Se cambió el avatar</i></span>
                    </div>
                    <div class="alert alert-danger text-center" id="noedit" style="display: none;">
                        <span><i class="fas fa-times m-1"> Formato no soportado</i></span>
                    </div>
                    <form id="form-foto" enctype="multipart/form-data">
                        <div class="input-group mb-3 ml-5 mt-2">
                            <input type="file" name="foto" class="input-group">
                            <input type="hidden" name="funcion" value="cambiar_foto">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn bg-gradient-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- -------End Modal foto-------- -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Datos personales</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../vista/adm_catalogo.php">Home</a></li>
                            <li class="breadcrumb-item active">Datos personales</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card card-success card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img id="avatar2" src="../img/avatar.png" alt="" class="profile-user-img img-fluid img-circle">
                                    </div>
                                    <div class="text-center mt-1">
                                        <button type="button" data-toggle="modal" data-target="#cambiofoto" class="btn btn-primary btn-sm">Cambiar Avatar</button>
                                    </div>
                                    <input id="id_usuario" type="hidden" value="<?php echo $_SESSION['usuario'] ?>">
                                    <!-- <input id="otro" type=" " value="<?php echo $_SESSION['nombre_us'] ?>"> -->
                                    <h3 id="nombre_us" class="profile-username text-center text-success">Nombre</h3>
                                    <p id="apellidos_us" class="text-muted text-center">Apellidos</p>
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b style="color:#0B7300">Edad</b><a id="edad_us" class="float-right">33333</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b style="color:#0B7300">DNI</b><a id="dni_us" class="float-right">44444444</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b style="color:#0B7300">Tipo Usuario</b>
                                            <span id="us_tipo" class="float-right">aquieltipo</span>
                                        </li>
                                        <button data-toggle="modal" data-target="#cambiacontra" type="button" class="btn btn-block btn-outline-warning btn-sm">Cambiar password</button>
                                    </ul>
                                </div>
                            </div>

                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Sobre mí</h3>
                                </div>
                                <div class="card-body">
                                    <strong style="color:#0B7300">
                                        <i class="fas fa-phone mr-1"></i> Teléfono
                                    </strong>
                                    <p id="telefono_us" class="text-muted">999999999</p>
                                    <strong style="color:#0B7300">
                                        <i class="fas fa-map-marker-alt mr-1"></i> Residencia
                                    </strong>
                                    <p id="residencia_us" class="text-muted">999999999</p>
                                    <strong style="color:#0B7300">
                                        <i class="fas fa-at mr-1"></i> Correo
                                    </strong>
                                    <p id="correo_us" class="text-muted">999999999</p>
                                    <strong style="color:#0B7300">
                                        <i class="fas fa-smile-wink mr-1"></i> Sexo
                                    </strong>
                                    <p id="sexo_us" class="text-muted">999999999</p>
                                    <strong style="color:#0B7300">
                                        <i class="fas fa-pencil-alt mr-1"></i> Información adicional
                                    </strong>
                                    <p id="adicional_us" class="text-muted">999999999</p>
                                    <button class="edit btn btn-block bg-gradient-danger">Editar</button>
                                </div>
                                <div class="card-footer">
                                    <p class="text-muted">Click en el botón para editar</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Editar Datos Personales</h3>
                                </div>
                                <div class="card-body">

                                    <div class="alert alert-success text-center" id="editado" style="display: none;">
                                        <span><i class="fas fa-check m-1"></i> Datos editados correctamente</span>
                                    </div>
                                    <div class="alert alert-danger text-center" id="noeditados" style="display: none;">
                                        <span><i class="fas fa-times m-1"></i> Edición deshabilitada </span>
                                    </div>

                                    <form id="form-usuario" class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
                                            <div class="col-sm-10">
                                                <input type="number" id="telefono" class="form-control" oninput="if(this.value.length > 9) this.value = this.value.slice(0, 9);" placeholder="Máximo 9 dígitos">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="residencia" class="col-sm-2 col-form-label">Residencia</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="residencia" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="correo" class="col-sm-2 col-form-label">Correo</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="correo" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="sexo" class="col-sm-2 col-form-label">Sexo</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="sexo" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="adicional" class="col-sm-2 col-form-label">Información adicional</label>
                                            <div class="col-sm-10">
                                                <textarea id="adicional" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10 float-right">
                                                <button class="btn btn-block btn-outline-success">Guardar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <p class="text-muted">Cuidado con ingresar datos erroneos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php
    include_once 'layouts/footer.php';
} else {
    header('Location: ../index.php');
}
?>
<script src="../js/Usuario.js"></script>