<?php include "includes/header.php";?>
  <!-- Seção de Conteúdo -->
  <div class="uk-container">
    <div class="row">
      <div class="page-head">
        <ul class="uk-breadcrumb">
          <li><a href="<?php echo BASEURL; ?>index.php">Visão Geral</a></li>
          <li><span href="<?php echo BASEURL; ?>cadastrarcurso.php">Cadastrar Curso</span></li>
      </ul>
        <h2 class="page-head-title uk-heading-bullet">Cadastrar Curso</h2>
      </div>
      <div class="uk-grid-medium uk-child-width-expand@s uk-text-left" uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
              <section class="box ">
                  <div class="content-body">
                    <div class="row">
                      <header class="panel_header">
                          <h2 class="title pull-left uk-heading-bullet">Informações do Curso</h2>
                      </header>
                      <form class="uk-grid-small" uk-grid>
                        <div class="uk-width-1-2@s">
                          <label class="uk-form-label" for="form-stacked-text">Nome</label>
                          <div class="uk-form-controls">
                              <input class="uk-input" id="form-stacked-text" type="text">
                          </div>
                        </div>
                        <div class="uk-width-1-2@s">
                          <label class="uk-form-label" for="form-stacked-text">Conceito no MEC</label>
                          <div class="uk-form-controls">
                              <input class="uk-input" id="form-stacked-text" type="number">
                          </div>
                        </div>
                        <header class="panel_header">
                            <h2 class="title pull-left uk-heading-bullet">Informações da Intituição</h2>
                        </header>
                        <div class="uk-width-1-2@s">
                          <label class="uk-form-label" for="form-stacked-select">Instituição</label>
                          <div class="uk-form-controls">
                              <select class="uk-select" id="form-stacked-select">
                                  <option>Universidade Federal da Bahia</option>
                                  <option>Unifacs</option>
                              </select>
                          </div>
                        </div>
                        <div class="uk-width-1-2@s">
                          <div class="uk-form-label">Tipo</div>
                          <div class="uk-form-controls">
                              <select class="uk-select" id="form-stacked-select">
                                  <option>Pública</option>
                                  <option>Privada</option>
                              </select>
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
