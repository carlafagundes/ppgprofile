<?php include "includes/header.php";?>
  <!-- Seção de Conteúdo -->
  <div class="uk-container">
    <div class="row">
      <div class="page-head">
        <ul class="uk-breadcrumb">
          <li><a href="<?php echo BASEURL; ?>index.php">Visão Geral</a></li>
          <li><span href="<?php echo BASEURL; ?>cadastrarprofessor.php">Cadastrar Professor</span></li>
        </ul>
        <h2 class="page-head-title uk-heading-bullet">Cadastrar Professor</h2>
      </div>
      <div class="uk-grid-medium uk-child-width-expand@s uk-text-left" uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
              <section class="box ">
                  <div class="content-body">
                    <div class="row">
                      <form method="post" action="registra-professor.php" class="uk-grid-small" uk-grid>
                        <header class="panel_header">
                            <h2 class="title pull-left uk-heading-bullet">Informações Pessoais</h2>
                        </header>
                        <div class="uk-width-1-3@s">
                          <label class="uk-form-label" for="form-stacked-text">Nome</label>
                          <div class="uk-form-controls">
                              <input class="uk-input" id="form-stacked-text" type="text" name="name">
                          </div>
                        </div>
                        <div class="uk-width-1-3@s">
                          <label class="uk-form-label" for="form-stacked-text">Sobrenome</label>
                          <div class="uk-form-controls">
                              <input class="uk-input" id="form-stacked-text" type="text" name="lastname">
                          </div>
                        </div>
                        <div class="uk-width-1-3@s">
                          <label class="uk-form-label" for="form-stacked-text">SIAPE</label>
                          <div class="uk-form-controls">
                              <input class="uk-input" id="form-stacked-text" type="text" name="siape">
                          </div>
                        </div>
                        <header class="panel_header">
                            <h2 class="title pull-left uk-heading-bullet">Dados para Login</h2>
                        </header>
                        <div class="uk-width-1-2@s">
                          <label class="uk-form-label" for="form-stacked-text">E-mail</label>
                          <div class="uk-form-controls">
                              <input class="uk-input" id="form-stacked-text" type="email" name="email">
                          </div>
                        </div>
                        <div class="uk-width-1-2@s">
                          <label class="uk-form-label" for="form-stacked-text">Senha</label>
                          <div class="uk-form-controls">
                              <input class="uk-input" id="form-stacked-text" type="password" name="password">
                          </div>
                        </div>
                        <div class="cadastrar">
                          <button class="uk-button uk-button-primary">Cadastrar</button>
                        </div>
                    </form>
                    </div>
                  </div>
              </section>
            </div>
        </div>
      </div>
    </div>
  </div>
<?php include "includes/footer.php";?>
