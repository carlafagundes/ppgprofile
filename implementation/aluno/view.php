<?php
require_once('functions.php');
view($_GET['id']);
?>

<?php include "../inc/header.php";?>

<!-- Seção de Conteúdo -->
<div class="uk-container">
  <div class="row">
    <div class="page-head">
      <ul class="uk-breadcrumb">
        <li><a href="<?php echo BASEURL; ?>index.php">Visão Geral</a></li>
        <li><span>Visualizar Aluno</span></li>
      </ul>
      <h2 class="page-head-title uk-heading-bullet">Visualizar Aluno</h2>
    </div>
    <div class="uk-grid-medium uk-child-width-expand@s uk-text-left" uk-grid>
      <div>
        <div class="uk-card uk-card-default uk-card-body">
          <section class="box ">
            <div class="content-body">
              <div class="row">
                <?php if (!empty($_SESSION['message'])) : ?>
                  <div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
                <?php endif; ?>        
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Nome: <?php echo $customer['nome']; ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Sobrenome: <?php echo $customer['sobrenome']; ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Gênero: <?php echo $customer['genero']; ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">CPF: <?php echo $customer['cpf']; ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Data de Nascimento: <?php echo $customer['dataNascimento']; ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Nacionalidade: <?php echo $customer['nacionalidade']; ?></h2>
                </header>   
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Logradouro: <?php echo $customer['logradouro']; ?></h2>
                </header>     
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Número: <?php echo $customer['numero']; ?></h2>
                </header>      
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Bairro: <?php echo $customer['bairro']; ?></h2>
                </header>    
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Cidade: <?php echo $customer['cidade']; ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Estado: <?php echo $customer['estado']; ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">CEP: <?php echo $customer['cep']; ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Curso da Graduação: <?php echo $customer['idCursoGraduacao']; ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Área de Conhecimento: <?php echo $customer['areaConhecimento']; ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">CR da Graduação: <?php echo $customer['crGraduacao']; ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Semestre de Ingresso: <?php echo $customer['semestreIngresso']; ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Dedicação: <?php echo $customer['dedicacao']; ?></h2>
                </header>
                <header class="panel_header">
                  <h2 class="title pull-left uk-heading-bullet">Título: <?php echo $customer['titulo']; ?></h2>
                </header>
                <header class="panel_header">
                 <h2 class="title pull-left uk-heading-bullet">Orientador: <?php $idDaInstituicao = $customer['idOrientador']; 
                  $sql = "SELECT nome FROM professor where id=".$customer['idOrientador'];
                  $bd=open_database();
                  $resultado = mysqli_query($bd, $sql);
                  while ($dados = mysqli_fetch_assoc($resultado)){
                    
                    echo $dados['nome'];
                  }

                  ?></h2>
                </header>
                <header class="panel_header">
                 <h2 class="title pull-left uk-heading-bullet">Co-Orientador: <?php $idDaInstituicao = $customer['idCoOrientador']; 
                  $sql = "SELECT nome FROM professor where id=".$customer['idOrientador'];
                  $bd=open_database();
                  $resultado = mysqli_query($bd, $sql);
                  while ($dados = mysqli_fetch_assoc($resultado)){
                    
                    echo $dados['nome'];
                  }

                  ?></h2>
                </header>
                <a href="edit.php?id=<?php echo $customer['id']; ?>" title="Editar">
                  <button class="uk-button uk-button-primary">Editar</button>
                </a>
                <a href="delete.php?id=<?php echo $customer['id']; ?>" class="uk-button uk-button-danger" title="Excluir">Excluir</a>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include "../inc/footer.php";?>
