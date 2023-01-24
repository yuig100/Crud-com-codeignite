<?php
include("includes/header.php");
?>    
<title>Atualizar Cadastro</title>
</head>

<body>    

    <div class="container">

        <div class="row">

            <h1>Atualizar Cadastro</h1>   
            <ol class="breadcrumb">
                <li><a href="/crud/index.php">Inicio</a></li>          
                <li class="active">Editar produto</li>
            </ol>      

            <!-- Formulário de novo cadastro  -->
            <form action="/crud/index.php/produtos/salvar" name="form_add" method="post">

                <!-- Input text nome do produtos -->
                <div class="row">
                    <div class="col-md-8">
                        <label>Nome</label>
                        <input type="text" name="nome" value="<?php echo $produto->nome ?>" class="form-control">
                    </div>
                </div> <!-- fim input text nome produtos -->

                <!-- Input text preço do produtos -->
                <div class="row">
                    <div class="col-md-8">
                        <label>Preço</label>
                        <input type="text" name="preco" value="<?php echo $produto->preco ?>" class="form-control">
                    </div>
                </div><!-- fim input text preco produtos -->

                <!-- Select produtos ativo ou inativo -->
                <div class="row">
                    <div class="col-md-2">
                        <label>Ativo</label>
                        <select name="ativo" class="form-control">
                            <option value="1" <?php echo ($produto->ativo == 1 ? 'selected="selected"' : '') ?>>Sim</option>
                            <option value="0" <?php echo ($produto->ativo == 0 ? 'selected="selected"' : '') ?>>Não</option>
                        </select>
                    </div>
                </div><!-- fim select produtos ativo ou inativo -->

                <!-- Button submit(enviar) formulário -->
                <br />
                <div class="row">
                    <div class="col-md-2">
                        <input type="hidden" name="id" value="<?php echo $produto->id ?>">
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </div>
                </div><!-- fim do button submit(enviar) formulário -->


            </form><!--Fim formulário de novo cadastro  -->

        </div>

    </div><!-- /.container -->




    <?php
    include("includes/footer.php");
    ?>