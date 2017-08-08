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
                        <h2 class="title pull-left uk-heading-bullet">Nome: <?php echo $customer['pNome']; ?></h2>
                    </header>
										<header class="panel_header">
											<h2 class="title pull-left uk-heading-bullet">Sobrenome: <?php echo $customer['uNome']; ?></h2>
										</header>
                    <header class="panel_header">
                      <h2 class="title pull-left uk-heading-bullet">Gênero: <?php echo $customer['sexo']; ?></h2>
                    </header>
										<header class="panel_header">
											<h2 class="title pull-left uk-heading-bullet">CPF: <?php echo $customer['cpf']; ?></h2>
										</header>
										<header class="panel_header">
											<h2 class="title pull-left uk-heading-bullet">Data de Nascimento: <?php echo $customer['data_nasc']; ?></h2>
										</header>
										<header class="panel_header">
											<h2 class="title pull-left uk-heading-bullet">Nacionalidade:<?php echo $customer['nacionalidade']; ?></h2>
										</header>                  
                    <header class="panel_header">
                      <h2 class="title pull-left uk-heading-bullet">Curso: <?php echo $customer['curso']; ?></h2>
                    </header>
                    <header class="panel_header">
                      <h2 class="title pull-left uk-heading-bullet">CR: <?php echo $customer['cr']; ?></h2>
                    </header>
                    <header class="panel_header">
                      <h2 class="title pull-left uk-heading-bullet">Ano de Conclusão: <?php echo $customer['ano_concl']; ?></h2>
                    </header>                    
                    <header class="panel_header">
                      <h2 class="title pull-left uk-heading-bullet">Area de Conhecimento: <?php echo $customer['area_conhecimento']; ?></h2>
                    </header>
                    <header class="panel_header">
                      <h2 class="title pull-left uk-heading-bullet">Semestre de Ingresso: <?php echo $customer['semestre_inc']; ?></h2>
                    </header>
                    <header class="panel_header">
                      <h2 class="title pull-left uk-heading-bullet">Orientador: <?php echo $customer['orientador']; ?></h2>
                    </header>
                    <header class="panel_header">
                      <h2 class="title pull-left uk-heading-bullet">Co-orientador: <?php echo $customer['co_orientador']; ?></h2>
                    </header>
                    <header class="panel_header">
                      <h2 class="title pull-left uk-heading-bullet">Nível: <?php echo $customer['nivel']; ?></h2>
                    </header>
                    <header class="panel_header">
                      <h2 class="title pull-left uk-heading-bullet">Modificado em : <?php echo $customer['modified']; ?></h2>
                    </header>
                    <header class="panel_header">
                      <h2 class="title pull-left uk-heading-bullet">Criado em : <?php echo $customer['created']; ?></h2>
                    </header>
										<a href="edit.php?id=<?php echo $customer['id']; ?>" title="Editar"><button class="uk-button uk-button-primary">Editar</button></a>
										<a href="delete.php?id=<?php echo $customer['id']; ?>" class="uk-button uk-button-danger" title="Excluir">Excluir</a>
                </div>
            </section>
          </div>
      </div>
    </div>
  </div>
</div>
<?php include "../inc/footer.php";?>
