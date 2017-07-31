<?php
  require_once('functions.php');
  add();
?>

<?php include "../inc/header.php";?>

<!-- Seção de Conteúdo -->
<div class="uk-container">
  <div class="row">
    <div class="page-head">
      <ul class="uk-breadcrumb">
        <li><a href="<?php echo BASEURL; ?>index.php">Visão Geral</a></li>
        <li><span>Cadastrar Aluno</span></li>
    </ul>
      <h2 class="page-head-title uk-heading-bullet">Cadastrar Aluno</h2>
    </div>
    <div class="uk-grid-medium uk-child-width-expand@s uk-text-left" uk-grid>
      <div>
          <div class="uk-card uk-card-default uk-card-body">
            <section class="box ">
                <div class="content-body">
                  <div class="row">
                    <header class="panel_header">
                        <h2 class="title pull-left uk-heading-bullet">Informações Pessoais</h2>
                    </header>
                    <form action="add.php" method="post" class="uk-grid-small" uk-grid>
                      <div class="uk-width-1-3@s">
                        <label class="uk-form-label" for="form-stacked-text">Nome</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="text" name="customer['pNome']">
                        </div>
                      </div>
                      <div class="uk-width-1-3@s">
                        <label class="uk-form-label" for="form-stacked-text">Sobrenome</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="text" name="customer['uNome']">
                        </div>
                      </div>
                      <div class="uk-width-1-3@s">
                        <div class="uk-form-label">Gênero</div>
                        <div class="uk-form-controls">
                            <select class="uk-select" id="form-stacked-select">
                                <option>Feminino</option>
                                <option>Masculino</option>
                            </select>
                        </div>
                      </div>
                      <div class="uk-width-1-3@s">
                        <label class="uk-form-label" for="form-stacked-text">CPF</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="number" name="customer['cpf']">
                        </div>
                      </div>
                      <div class="uk-width-1-3@s">
                        <label class="uk-form-label" for="form-stacked-text">Data de Nascimento</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="date" name="customer['data_nasc']">
                        </div>
                      </div>
                      <div class="uk-width-1-3@s">
                        <label class="uk-form-label" for="form-stacked-text">Nacionalidade</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="text" name="customer['nacionalidade']">
                        </div>
                      </div>
                      <header class="panel_header">
                          <h2 class="title pull-left uk-heading-bullet">Informações Sobre a Graduação</h2>
                      </header>
                      <div class="uk-width-1-3@s">
                        <div class="uk-form-label">Curso</div>
                        <div class="uk-form-controls">
                            <select class="uk-select" id="form-stacked-select">
                                <option>Curso A da UFBA</option>
                                <option>Curso A da Unifacs</option>
                            </select>
                        </div>
                      </div>
                      <div class="uk-width-1-3@s">
                        <label class="uk-form-label" for="form-stacked-text">CR</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="number">
                        </div>
                      </div>
                      <div class="uk-width-1-3@s">
                        <label class="uk-form-label" for="form-stacked-text">Ano de Conclusão</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="number">
                        </div>
                      </div>
                      <header class="panel_header">
                          <h2 class="title pull-left uk-heading-bullet">Informações Sobre a Pós-Graduação</h2>
                      </header>
                      <div class="uk-width-1-2@s">
                        <label class="uk-form-label" for="form-stacked-text">Área de Conhecimento</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="text">
                        </div>
                      </div>
                      <div class="uk-width-1-2@s">
                        <label class="uk-form-label" for="form-stacked-text">Semestre de Ingresso</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="text">
                        </div>
                      </div>
                      <div class="uk-width-1-3@s">
                        <div class="uk-form-label">Orientador</div>
                        <div class="uk-form-controls">
                            <select class="uk-select" id="form-stacked-select">
                                <option value="">Selecione um orientador</option>
                                <option value="1">Daniela Claro</option>
                                <option value="2">Ivan Machado</option>
                            </select>
                        </div>
                      </div>
                      <div class="uk-width-1-3@s">
                        <label class="uk-form-label" for="form-stacked-text">Co-Orientador</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="text">
                        </div>
                      </div>
                      <div class="uk-width-1-3@s">
                        <div class="uk-form-label">Nível</div>
                        <div class="uk-form-controls">
                            <select class="uk-select" id="form-stacked-select">
                                <option value="">Selecione um nível</option>
                                <option value="1">Mestrado</option>
                                <option value="2">Doutorado</option>
                            </select>
                        </div>
                      </div>
                      <div id="actions" class="cadastrar">
                        <button type="submit" class="uk-button uk-button-primary">Cadastrar</button>
                        <a href="index.php" class="uk-button uk-button-danger">Cancelar</a>
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
<?php include "../inc/footer.php";?>
