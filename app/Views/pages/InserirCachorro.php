<div class="container">
    <div class="alert-primary my-3">
        <?= \Config\Services::validation() -> listErrors() ?>
    </div>
    <form action="<?= '/gravar' ?>" method="post">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="form-group">
            <label for="raça">Raça</label>
            <input type="text" class="form-control" id="raça" name="raca">
        </div>
        <div class="form-group">
            <label for="cor">Cor</label>
            <input type="text" class="form-control" id="cor" name="cor">
        </div>
        <div class="form-group">
            <label for="data_nascimento">Data de nascimento</label>
            <input type="text" class="form-control" id="data_nascimento" name="data_nascimento">
        </div>
        <input type="hidden" name="id">
        <div class="mt-2">
            <input type="submit" name="submit" value="Salvar" class="btn btn-primary">
            <a href="javascript:history.back()" class="btn btn-primary">Voltar</a>
        </div>
    </form>
</div>