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
        <li><span>Visualizar Curso</span></li>
      </ul>
      <h2 class="page-head-title uk-heading-bullet">Visualizar Curso</h2>
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
               <h2 class="title pull-left uk-heading-bullet">Instituição: <?php $idDaInstituicao = $customer['idInstituicao']; 
                $sql = "SELECT nome FROM instituicao where id=".$customer['idInstituicao'];
                $bd=open_database();
                $resultado = mysqli_query($bd, $sql);
                while ($dados = mysqli_fetch_assoc($resultado)){

                  echo $dados['nome'];
                }

                ?></h2>
              </header>
              <header class="panel_header">
               <h2 class="title pull-left uk-heading-bullet">Departamento: <?php $idDaInstituicao = $customer['idDepartamento']; 
                $sql = "SELECT nome FROM departamento where id=".$customer['idDepartamento'];
                $bd=open_database();
                $resultado = mysqli_query($bd, $sql);
                while ($dados = mysqli_fetch_assoc($resultado)){

                  echo $dados['nome'];
                }

                ?></h2>
              </header>
              <header class="panel_header">
                <h2 class="title pull-left uk-heading-bullet">Campus: <?php echo $customer['campus']; ?></h2>
              </header>
              <header class="panel_header">
                <h2 class="title pull-left uk-heading-bullet">Conceito: <?php echo $customer['conceitoMec']; ?></h2>
              </header>
              <header class="panel_header">
                <h2 class="title pull-left uk-heading-bullet">Turno: <?php if($customer['turno']=='M') echo 'Matutino'; else if($customer['turno']=='V') echo "Vespertino"; else if($customer['turno']=='N') 'Noturno' ?></h2>
              </header>
              <header class="panel_header">
                <h2 class="title pull-left uk-heading-bullet">Ano de Criação: <?php echo $customer['anoCriacao']; ?></h2>
              </header>
              <a href="edit.php?id=<?php echo $customer['id']; ?>" title="Editar"><button class="uk-button uk-button-primary">Editar</button></a>
              <a href="delete.php?id=<?php echo $customer['id']; ?>" class="uk-button uk-button-danger" uk-toggle="target: #modal-example" title="Excluir">Excluir</a>
            </div>
            <!-- Modal de exclusão -->
            <div id="modal-example" uk-modal>
              <div class="uk-modal-dialog uk-modal-body">
                <h2 class="uk-modal-title">Excluir</h2>
                <p>Tem certeza que deseja excluir "<?php echo $customer['nome']; ?>"</p>
                <p class="uk-text-right">
                  <button class="uk-button uk-button-default uk-modal-close" type="button">Cancelar</button>
                  <a href="delete.php?id=<?php echo $customer['id']; ?>" class="uk-button uk-button-danger" title="Excluir">Excluir</a>
                </p>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include "../inc/footer.php";?>
