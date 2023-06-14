<link href="http://<?php echo APP_HOST; ?>/public/css/style-dashboard.css" rel="stylesheet">

<div class="container" style="margin-left:300px">
        <div class="row content">
            <h2 class="signin-text mb-3" style="margin-top: 50px;">Mensagens</h2>
            <p>Mensagens enviadas pelos usuários</p>
            <hr>
            <br></br>
            <br></br>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="table-info" style="text-align:center">
                        <th scope="col" style="width: 25%;">Usuário</th>
                        <th scope="col">Título</th>
                        <th scope="col">Mensagem</th>
                        <th scope="col">Lida</th>
                        <th scope="col" style="width: 25%;">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($viewVar['listaContatos'] as $contato) { ?>
                        <tr>
                            <td style="text-align:center"><?php echo $contato->__get('uso_nome'); ?></td>
                            <td style="text-align:center"><?php echo $contato->__get('con_titulo'); ?></td>
                            <td style="text-align:center"><?php echo $contato->__get('con_msg'); ?></td>
                            <td style="text-align:center"><?php echo $contato->__get('con_lida') == "1" ? "Sim": "Não"; ?></td>
                            <td style="text-align:center">
                            <?php if ($contato->__get('con_lida')== "0") { ?>
                                <a href="http://<?php echo APP_HOST .'/contato/lida' ; ?>/<?php echo $contato->__get('con_id'); ?>"><button type="button" class="btn btn-primary-acao">Lida</button></a>
                            <?php } ?>
                                <a href="http://<?php echo APP_HOST; ?>/contato/excluir?con_id=<?php echo $contato->__get('con_id'); ?>"><button type="button" class="btn btn-danger">Excluir</button></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>