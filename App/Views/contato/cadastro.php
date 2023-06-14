<link href="http://<?php echo APP_HOST; ?>/public/css/style-dashboard.css" rel="stylesheet">

<div class="container">
    <h1>Edição de Usuário</h1>
    <h2>Escreva uma mensagem para o NuAzul</h2>
    <p>Por favor, preencha os campos para que a mensagem seja enviada</p>
    <div class="col-md-9">
        <?php if($Sessao::retornaErro()){ ?>
            <div class="alert alert-warning" role="alert">
                <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php foreach($Sessao::retornaErro() as $key => $mensagem) { echo $mensagem . "<br />"; } ?> 
            </div>
        <?php } ?>     

        <form action="http://<?php echo APP_HOST; ?>/contato/salvar" method="post" id="form_cadastro">
            <input type="hidden" class="form-control" name="uso_id" id="uso_id" value="<?php echo $viewVar['uso_id']; ?>">
            <br />
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text"  class="form-control" name="titulo" id="titulo" placeholder="" value="" required>
            </div>
            <br />
            <div class="form-group">
                <label for="msg">Mensagem</label>
                <textarea type="text"  class="form-control" name="msg" id="msg" placeholder="" value="" required> </textarea>
            </div>
            <br />
            <button type="submit" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Enviar </button>          
            <a href="http://<?php echo APP_HOST; ?>/contato" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Cancelar </a>
        </form>
    </div>
    <div class=" col-md-3"></div>
</div>
