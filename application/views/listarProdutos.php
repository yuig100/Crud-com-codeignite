<?php
include("includes/header.php");
?>   
<title>Lista de produtos da tabela produtos</title>
</head>
<body>
    <div class="container">

        <div class="row">
            <h1>Lista de produtos</h1>

            <a href="/crud/index.php/produtos/add" class="btn btn-success margin-button15">Novo Produto</a>

            <table class="table table-bordered">

                <thead>
                    <tr>
                        <th class="text-center">Produto</th>
                        <th class="text-right">Preço</th>
                        <th class="text-center">Status</th>        
                        <th class="text-center">Açoes</th>
                    </tr>
                </thead>

                <?php
                $contador = 0;
                foreach ($produtos as $produto)
                {        
                    echo '<tr>';
                    echo '<td>'.$produto->nome.'</td>'; 
                    echo '<td class="text-right">'.$produto->preco.'</td>';

                    echo '<td class="text-center">';

                    //Verificamos o status do produto
                    if ($produto->ativo == 1) {
                        //Se tiver == 1 está ATIVO
                        echo '<span class="label label-success"><a href="/crud/index.php/produtos/status/'.$produto->id.'"title="Deixar inativo">Ativo</a></span>';
                    } else {
                        //Se tiver == 0 está INATIVO
                        echo '<span class="label label-warning"><a href="/crud/index.php/produtos/status/'.$produto->id.'"title="Deixar ativo">Inativo</a></span>';
                    }

                    echo '<td class="text-center">';
                    echo '<a href="/crud/index.php/produtos/editar/'.$produto->id.'" title="Editar cadastro" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>';
                    echo ' <a href="/crud/index.php/produtos/apagar/'.$produto->id.'" title="Apagar cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';
                    echo '</td>'; 
                    echo '</tr>';
                    $contador++;
                }
                ?>

            </table>

            <div class="row">
                <div class="col-md-12">
                    Total de Registro: <?php echo $contador ?>
                </div>
            </div>
            
        </div>

    </div><!-- /.container -->

    <?php
    include("includes/footer.php");
    ?>