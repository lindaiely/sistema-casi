<?php require_once "components/topo.php" ?>

<div class="participar-evento">
    <form action="">
        <h1>Cadastre-se no evento</h1>
        <div class="form-label">
            <input type="text" name="nome" id="nome" placeholder="Nome">
        </div>
        <div class="form-label">
            <input type="text" name="matricula" id="matricula" placeholder="Matricula">
        </div>
        <div class="form-label">
            <input type="text" name="email" id="email" placeholder="E-mail">
        </div>
        <div class="form-label">
            <input type="password" name="senha" id="senha" placeholder="Senha">
        </div>
        <div class="form-label">
            <select name="categoria" id="categoria">
                <option value="">Selecione a categoria</option>
                <option value=""></option>
                <option value=""></option>
            </select>
        </div>
        <div class="center">
            <input type="submit" value="Cadastrar" id="button-save">
            <a href="login.php" id="c-login"><p>Já me cadastrei</p></a>
        </div>
    </form>
</div>

<?php require_once "components/rodape.php" ?>