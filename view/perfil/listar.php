<center>
    <?php if (isset($_COOKIE['msg'])){ echo $_COOKIE['msg']; } DestroyCookie('msg') ?>
</center>
<table class="table">
    <thead>
        <th>#</th>
        <th>Descrição</th>
        <th>Ação</th>
    </thead>
    <tbody>
        <?php foreach ($listar as $dados): ?>
        <tr>
            <td>
                <?= $dados->id_per ?>
            </td>
            <td>
                <?= $dados->desc_per ?>
            </td>
            <td><a href="<?= base_url('perfil/deletar/'.$dados->id_per) ?>">Deletar</a>
                <a href="<?= base_url('perfil/editar/'.$dados->id_per) ?>">Editar</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
