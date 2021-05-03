<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device=widht, initial-scale-1">
        <title>Cadastrar nova pessoa</title>
    </head>
    <body>
        <form action="{{route('salvar_pessoa')}}" method="post">
            @csrf
            <div><label for="nome">Nome</label><input type="text" name="nome" id="nome"></div>
            <div><label for="email">E-mail</label><input type="text" name="email" id="email"></div>
            <div><label for="cpf">CPF</label><input type="text" name="cpf" id="cpf"></div>
            <div><label for="data_nasc">Data de Nascimento</label><input type="text" name="data_nasc" id="data_nasc"></div>
            <div><label for="nacionalidade">Nacionalidade</label><input type="text" name="nacionalidade" id="nacionalidade"></div>
        </form>
    </body>
</html>        