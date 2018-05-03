<?php
/* @var $this yii\web\View */
?>
<h1>Atribuindo regras</h1>

<form action="" method="post">
    <?php foreach($permissoes as $permissao):?>

    <div class="form-check">
        <input type="checkbox" name="permissoes[]" id="permissoes_<?php echo $permissao->name?>"
               value="<?php echo $permissao->name?>"
            <?php echo in_array($permissao->name, $permissoes_perfil) ? 'checked="checked"' : ''?>
        >
        <label for="permissoes_<?php echo $permissao->name?>"><?php echo $permissao->name?></label>
    </div>

    <?php endforeach?>
    <hr>
    <input type="hidden" name="<?php echo Yii::$app->request->csrfParam?>" value="<?php echo Yii::$app->request->csrfToken?>">
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
