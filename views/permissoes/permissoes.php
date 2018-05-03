<?php
/* @var $this yii\web\View */
?>
<h1>Listando Perfis</h1>
<?php if(Yii::$app->user->can('permissoes/cadastrar-permissao')):?>
<a href="/permissoes/cadastrar-permissao" class="btn btn-primary pull-right">Cadastrar Permissão</a>
<?php endif;?>
<hr>
<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th>Permissão</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($permissoes as $permissao):?>
        <tr>
            <td><?php echo $permissao->name?></td>
            <td></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
