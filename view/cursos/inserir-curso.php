<?php include __DIR__.'./../header.php'; ?>
            <form action="/salvar-curso" method="post">
                <div class="mb-3">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control mb-2" name="descricao" id="descricao"/>
                    <button class="btn btn-primary mb-2">Inserir Curso</button>
                </div>
<?php include __DIR__.'./../footer.php'; ?>