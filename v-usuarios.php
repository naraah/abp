
<?php
            if (sizeof($usuarios)>0) {
                ?>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th class="hidden-xs">Id</th>
                        <th>Login</th>
                        <th class="hidden-xs">Nome</th>
                        <th class="hidden-xs">Enderezo Electrónico</th>
                        <th>Imaxe</th>
                        <th class="hidden-xs">Data Nacemento</th>
                        <th class="hidden-xs">Telefono</th>
                        <th>Accións</th>
                        <!--<th></th>-->
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (sizeof($usuarios)) foreach ($usuarios as $usuario){ ?>
                        <tr>
                            <td class="hidden-xs"><?=$usuario->getIdUsuario()?></td>
                            <td><?=$usuario->getUsername()?></td>
                            <td class="hidden-xs"><?=$usuario->getNome()?></td>
                            <td class="hidden-xs"><?=$usuario->getEmail()?></td>
                            <td><a data-toggle="modal" data-target="#verImagen-<?=$usuario->getIdUsuario()?>" disabled><img class="img-responsive"
                                     style="max-width:50px; border-radius: 300px;"
                                     src="lib/img.php?id=<?=$usuario->getUsername()?>"
                                     alt="Foto"></a></td>                           
                            <td class="hidden-xs"><?=$usuario->getDataNac()?></td>
                            <td class="hidden-xs"><?=$usuario->getTelefono()?></td>


                            <td>
                                <span class="pull-right"><a href="#" data-href="../index.php?controller=Usuario&amp;action=delete&amp;id=<?=$usuario->getIdUsuario()?>" data-toggle="modal" data-target="#confirm-delete" title="Borrar Usuario"><i class="fa fa-remove fa-fw fa-2x" style="color:red;"></i></a></span>
                                <span class="pull-right"><a href="vistas/v-modificarusuario.php?id=<?=$usuario->getIdUsuario()?>&amp;return=listarusuarios" title="Modificar Usuario"><i class="fa fa-edit fa-fw fa-2x" style="color:orange;"></i></a></span>
                                <!--<span class="pull-right"><a data-toggle="modal" data-target="#modificarUsuario-<?=$usuario->getIdUsuario()?>" title="Modificar Usuario"><i class="fa fa-edit fa-fw fa-2x" style="color:orange;"></i></a></span>-->
                                <span class="pull-right"><a href="vistas/v-altanotificacion.php?destinatario=<?=$usuario->getIdUsuario()?>&amp;return=listarusuarios" title="Enviar Notificación"><i class="fa fa-send fa-fw fa-2x"></i></a></span>
                                <!--<span class="pull-right"><a data-toggle="modal" data-target="#enviarNotificacion-<?=$usuario->getIdUsuario()?>" title="Enviar Notificación"><i class="fa fa-send fa-fw fa-2x"></i></a></span>-->
                            </td>
 </tr>


                      

                        <div id="verImagen-<?=$usuario->getIdUsuario()?>" class="modal fade" role="dialog">

                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">

                                        <div align="center">
                                        <img class="img-responsive"
                                             style="border-radius: 15px;"
                                             src="lib/img.php?id=<?=$usuario->getUsername()?>"
                                             alt="Foto">
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>


 

                    <?php } ?>

                    <?php
                    $confirm = [
                        //'title' => 'Confirmar Acción',
                        'text'  => '¿Está seguro de querer borrar el usuario?',
                        'bOk' => 'Borrar Usuario'
                    ];
                    include('vistas/inc-confirm.php');
                    include('vistas/inc-pluginTableData.php'); 
                    ?>
                    </tbody>
                </table>



            <?php } ?>
