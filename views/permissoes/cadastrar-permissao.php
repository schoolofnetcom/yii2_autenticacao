<?php
/* @var $this yii\web\View */
?>
<h1>Cadastrar Permissão</h1>

<form action="" method="post">
    <div class="form-group">
        <label for="permissao">Permissão</label>
        <input type="text" name="permissao" id="permissao" class="form-control">
    </div>
    <hr>
    <input type="hidden" name="<?php echo Yii::$app->request->csrfParam?>" value="<?php echo Yii::$app->request->csrfToken?>">
    <button type="submit" class="btn btn-primary">Enviar</button>

</form>
