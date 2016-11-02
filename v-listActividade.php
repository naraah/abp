        <?php 
            if (sizeof($actividades)>0) {
        ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th class="hidden-xs">Prazas</th>
                    <th>Horario</th>
                    <?php if(isset($actions)) { ?>
                    <th>Accións</th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
            <?php if (sizeof($actividades)) foreach ($actividades as $actividade){ ?>
                <tr>
                    
                    <td><?=$actividade->getNomeActividade()?></td>
                    <td class="hidden-xs"><?=$actividade->getPrazas()?></td>
                    <td><?=Tools::date2php($actividade->getHorario())?></td>
                    <?php if(isset($actions)) { ?>
                    <td>
                        <span class="pull-right"><a href="#" data-href="../index.php?controller=Actividade&amp;action=delete&amp;id=<?=$actividade->getNomeActividade()?>&return=<?=$return?>" data-toggle="modal" data-target="#confirm-delete" title="Borrar Actividade"><i class="fa fa-remove fa-fw fa-2x" style="color:red;"></i></a></span>
                        <span class="pull-right"><a href="vistas/v-modificaractividade.php?id=<?=$tarea->getNomeActividade()?>&amp;return=<?=$return?>" title="Modificar Actividade"><i class="fa fa-edit fa-fw fa-2x" style="color:orange;"></i></a></span>
                    </td>
                    <?php } ?>
                </tr>
            <?php } ?>    
            </tbody>
        </table>
        <?php } ?>

        <?php 
            $confirm = [
                //'title' => 'Confirmar Acción',
                'text'  => '¿Está seguro de querer eliminar esta actividade?',
                //'bOk' => 'Eliminar notificación'
                ];
            include('vistas/inc-confirm.php'); 
            //include('vistas/inc-pluginTableData.php');
        ?>
