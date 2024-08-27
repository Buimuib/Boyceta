<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
         <a class="navbar-brand" href="#">
            <img src="data:image/png;base64,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" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">Bootstrap
        </a>
    </div>
    </nav >
 
        <div class="container">
            <h2 class="text-center"> Vai dar Namoro </h2>
 
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <input class=" form-control" type="text" name="nome " id="nome" placeholder="Insira seu Nome">
                        </div>
                        <div class="col-md-6">
                            <input class=" form-control" type="text" name="email " id="email" placeholder="Insira seu Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input class="form-control mt-2" type="text" name="end" id="end" placeholder="Digite seu Endereço">
                        </div>
                        <div class="col-md-2">
                            <input class="form-control mt-2" type="number" name="num" id="num" placeholder="Digite seu Número">
                        </div>
                        <div class="col-md-4">
                            <input class="form-control mt-2" type="text" name="bairro" id="bairro" placeholder="Digite sua comida favorita">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <input class="form-control mt-2" type="text" name="cidade" id="cidade" placeholder="Digite um hobby">
                        </div>
                        <div class="col-md-3">
                            <select class="form-control mt-2" id="estado" name="estado" id="estado" placeholder="Selecione o seu Estado">
                                <option value="Selecione seu Estado">Selecione seu gosto</option>
                                <option value="AC">Mulher</option>
                                <option value="AL">loiras</option>
                                <option value="AP">Ruivas</option>
                                <option value="AM">Morenas</option>
                                <option value="BA">Asiaticas</option>
                                <option value="CE">Koreanas</option>
                                <option value="DF">Americanas</option>
                                <option value="ES">Góticas</option>
                                <option value="GO">Princesa</option>
                                <option value="MA">Burguesa</option>
                                
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input class="form-control mt-2" type="number" name="rg" id="cpf" placeholder="Digite seu Lazer favorito">
                        </div>
                        <div class="col-md-3">
                            <input class="form-control mt-2" type="number" name="rg" id="rg" placeholder="primeiro encontro">
                        </div>
                     </div>
                        <div class="col-md-12">
                            <input class="form-control mt-2" type="submit" value="Ver compatibilidade">
                        </div>
                </form>
        </div>
<footer>
    <nav class="navbar">
        <div>
            Todos os direitos reservados para mulheres
        </div>
    </nav>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
 
 