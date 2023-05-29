<div class="container">
    <h1>Resetar senha</h1>
    <p>Por favor, entre com os dados para alterar a sua senha.</p>
    <hr />
    <div class="row">
        <div class="col-md-8" style="padding-left: 40px;">
            <br />
            <?php if($Sessao::retornaMensagem()){ ?>
                <div class="alert alert-warning" role="alert">
                    <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?= $Sessao::retornaMensagem() ?> 
                    <br>
                </div>
            <?php } ?>       
            <?php if($Sessao::retornaErro()){ ?>
                <div class="alert alert-warning" role="alert">
                    <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php foreach($Sessao::retornaErro() as $key => $mensagem) { echo $mensagem . "<br />"; } ?> 
                </div>
            <?php } ?>  
            <div class="table-responsive col-md-6">
                <form action="http://<?php echo APP_HOST; ?>/usuario/resetPassword" method="post" id="form_cadastro">
                    <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $viewVar['usuario']->__get("uso_id"); ?>">
                    <div class="form-group">
                        <label for="nome">Usuário:</label>
                        <input type="text" class="form-control" name="nome" value="<?php echo $viewVar['usuario']->__get("uso_nome"); ?>" readonly>
                    </div>
                    <br />
                    <div class="form-group">
                        <label for="senha">Nova Senha:</label>
                        <input type="senha" class="form-control" name="senha" placeholder="Sua nova senha" value="" required>
                    </div>    
                    <br />
                    <div class="form-group">
                        <label for="senha_confirme">Confirmação da Nova Senha:</label>
                        <input type="senha" class="form-control" name="senha_confirme" placeholder="Confirmação da senha" value="" required>
                    </div>    
                    <br />
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Atualizar </button>          
                        <a href="http://<?php echo APP_HOST; ?>/login/dashboard" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Cancelar </a>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>