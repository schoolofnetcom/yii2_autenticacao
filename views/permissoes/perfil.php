<?php
/* @var $this yii\web\View */
?>
<h1>Listando Perfis</h1>
<?php if(Yii::$app->user->can('permissoes/cadastrar-perfil')):?>
<a href="/permissoes/cadastrar-perfil" class="btn btn-primary pull-right">Cadastrar Perfil</a>
<?php endif;?>
<hr>
<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th>Perfil</th>
        <th>Atribuir Permissão</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($perfis as $perfil):?>
    <tr>
        <td><?php echo $perfil->name?></td>
        <td><a class="btn btn-warning" href="/permissoes/regras/?perfil=<?php echo $perfil->name?>">
                Adicionar regra
            </a>
        </td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>
