<?php include "includes/header.php";?>
<?php require_once('config.php'); ?>
  <!-- Seção de Conteúdo -->
  <div class="uk-container">
    <div class="row">
      <div class="page-head">
        <h2 class="page-head-title uk-heading-bullet">Visão Geral</h2>
      </div>
      <div class="uk-grid-medium uk-child-width-expand@s uk-text-left" uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
              <section class="box ">
                  <div class="content-body">
                    <div class="row">
                      <header class="panel_header">
                          <a href="cadastraraluno.php"><h2 class="title pull-left uk-heading-bullet">Alunos</h2></a>
                      </header>
                      <header class="panel_header">
                          <a href="cadastrarprofessor.php"><h2 class="title pull-left uk-heading-bullet">Professores</h2></a>
                      </header>
                      <header class="panel_header">
                          <a href="cadastrarcurso.php"><h2 class="title pull-left uk-heading-bullet">Cursos</h2></a>
                      </header>
                    </div>
                  </div>
              </section>
            </div>
        </div>
      </div>
    </div>
  </div>
<?php include "includes/footer.php";?>
