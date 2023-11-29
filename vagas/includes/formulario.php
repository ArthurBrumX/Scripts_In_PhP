<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success">voltar</button>
        </a>
    </section>
    <h2 class="mt-3" >Cadastrar Vaga</h2>

    <form method="post" >
        <div class="form-group">
            <label>Titulo</label>
            <input type="text" class="form-control" name="titulo">
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control" name="descricao"></textarea>
        </div>
        <div class="form-group">
            <label>Status</label>
            <div>
                <div class="form-check form-check-inline">
                    <label>
                        <input type="radio" name="ativo" value="s"> Ativo
                    </label>
                </div>
            </div>
        </div>
    </form>
</main>