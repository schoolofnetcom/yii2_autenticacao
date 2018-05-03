<?php
/* @var $this yii\web\View */
?>
<h1>Cadastrar Perfil</h1>

<form action="" method="post">
    <div class="form-group">
        <label for="perfil">Perfil</label>
        <input type="text" name="perfil" id="perfil" class="form-control">
    </div>

    <div class="form-group">
        <label for="perfil_pai">Perfil Pai</label>
        <select name="perfil_pai" id="perfil_pai" class="form-control">
            <option value="">Selecione</option>
            <?php foreach($perfis as $perfil):?>
                <option value="<?php echo $perfil->name?>"><?php echo $perfil->name?></option>
            <?php endforeach;?>
        </select>
    </div>

    <hr>
    <input type="hidden" name="<?php echo Yii::$app->request->csrfParam?>" value="<?php echo Yii::$app->request->csrfToken?>">
    <button type="submit" class="btn btn-primary">Enviar</button>

</form>
