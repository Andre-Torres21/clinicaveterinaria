<main class="container">
    <a href="<?= '/inserir' ?>" class="btn btn-primary">Adicionar cachorro</a>
    <div class="d-flex flex-wrap" style="gap:20px;">
        <?php if(!empty($cachorros)): ?>
            <?php foreach($cachorros as $cachorro): ?>
                <div class="card my-2" style="width: 25rem;">
                    <div class="card-body">
                        <h2 class="card-title"><?= $cachorro['nome'] ?></h2>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Raça: <?= $cachorro['raca'] ?></li>
                            <li class="list-group-item">Cor: <?= $cachorro['cor'] ?></li>
                            <li class="list-group-item">Data de nascimento: <?= date('d/m/Y', strtotime($cachorro['data_nascimento'])) ?></li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="" class="btn btn-primary">Saiba mais</a>
                        <a href="" class="btn btn-warning">Editar</a>
                        <a href="" class="btn btn-danger">Excluir</a>
                    </div>
                </div>
            <?php endforeach ?>
    </div>
    <?php else: ?>
        <p>Nenhum cachorro cadastrado.</p>
    <?php endif ?>
</main>