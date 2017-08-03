<?php
  require_once('functions.php');
  edit();
?>

<?php include "../inc/header.php"; ?>

<!-- Seção de Conteúdo -->
<div class="uk-container">
  <div class="row">
    <div class="page-head">
      <ul class="uk-breadcrumb">
        <li><a href="<?php echo BASEURL; ?>index.php">Visão Geral</a></li>
        <li><span>Editar Aluno</span></li>
    </ul>
      <h2 class="page-head-title uk-heading-bullet">Editar Aluno</h2>
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
                    <form action="edit.php?id=<?php echo $customer['id']; ?>" method="post" class="uk-grid-small" uk-grid>
                      <div class="uk-width-1-3@s">
                        <label class="uk-form-label" for="form-stacked-text">Nome</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="text" name="customer['pNome']" value="<?php echo $customer['pNome']; ?>">
                        </div>
                      </div>
                      <div class="uk-width-1-3@s">
                        <label class="uk-form-label" for="form-stacked-text">Sobrenome</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="text" name="customer['uNome']" value="<?php echo $customer['uNome']; ?>">
                        </div>
                      </div>
                      <div class="uk-width-1-3@s">
                        <div class="uk-form-label">Gênero</div>
                        <div class="uk-form-controls">
                            <select class="uk-select" id="form-stacked-select" name="customer['genero']" value="<?php echo $customer['genero']; ?>" >
                                <option value="masculino"<?php echo selected( 'masculino', $customer['genero'] ); ?>>Masculino</option>
                                <option value="feminino"<?php echo selected( 'feminino', $customer['genero'] ); ?>>Feminino</option>
                            </select>
                        </div>
                      </div>
                      <div class="uk-width-1-3@s">
                        <label class="uk-form-label" for="form-stacked-text">CPF</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="number" name="customer['cpf']" value="<?php echo $customer['cpf']; ?>">
                        </div>
                      </div>
                      <div class="uk-width-1-3@s">
                        <label class="uk-form-label" for="form-stacked-text">Data de Nascimento</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="date" name="customer['data_nasc']" value="<?php echo $customer['data_nasc']; ?>">
                        </div>
                      </div>
                      <div class="uk-width-1-3@s">
                        <label class="uk-form-label" for="form-stacked-text">Nacionalidade</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="text" name="customer['nacionalidade']" value="<?php echo $customer['nacionalidade']; ?>">
                        </div>
                      </div>
                      <header class="panel_header">
                        <h2 class="title pull-left uk-heading-bullet">Endereço</h2>
                      </header>
                        <div class="uk-width-1-3@s">
                          <label class="uk-form-label" for="form-stacked-text">CEP</label>
                          <div class="uk-form-controls">
                              <input class="uk-input" id="form-stacked-text" type="number" name="customer['cep']" value="<?php echo $customer['cep']; ?>">
                          </div>
                        </div>
                        <div class="uk-width-1-3@s">
                          <label class="uk-form-label" for="form-stacked-text">UF</label>
                          <div class="uk-form-controls">                            
                               <select class="uk-select" id="form-stacked-select" type="text" name="customer['uf']">
                                  <option value="AC">AC</option>
                                  <option value="AL">AL</option>
                                  <option value="AP">AP</option>
                                  <option value="AM">AM</option>
                                  <option value="BA">BA</option>
                                  <option value="CE">CE</option>
                                  <option value="ES">ES</option>
                                  <option value="DF">DF</option>
                                  <option value="MA">MA</option>
                                  <option value="MT">MT</option>
                                  <option value="MS">MS</option>
                                  <option value="MG">MG</option>
                                  <option value="PA">PA</option>
                                  <option value="PB">PB</option>
                                  <option value="PR">PR</option>
                                  <option value="PE">PE</option>
                                  <option value="PI">PI</option>
                                  <option value="RJ">RJ</option>
                                  <option value="RN">RN</option>
                                  <option value="RS">RS</option>
                                  <option value="RO">RO</option>
                                  <option value="RR">RR</option>
                                  <option value="SC">SC</option>
                                  <option value="SP">SP</option>
                                  <option value="SE">SE</option>
                                  <option value="TO">TO</option>
                              </select>
                          </div>
                        </div>                        
                        <div class="uk-width-1-3@s">
                          <label class="uk-form-label" for="form-stacked-text">Cidade</label>
                          <div class="uk-form-controls">
                              <input class="uk-input" id="form-stacked-text" type="text" name="customer['cidade']" value="<?php echo $customer['cidade']; ?>">
                          </div>
                        </div>
                        <div class="uk-width-1-3@s">
                          <label class="uk-form-label" for="form-stacked-text">Bairro</label>
                          <div class="uk-form-controls">
                              <input class="uk-input" id="form-stacked-text" type="text" name="customer['bairro']" value="<?php echo $customer['bairro']; ?>">
                          </div>
                        </div>
                        <div class="uk-width-1-3@s">
                          <label class="uk-form-label" for="form-stacked-text">Rua</label>
                          <div class="uk-form-controls">
                              <input class="uk-input" id="form-stacked-text" type="text" name="customer['rua']" value="<?php echo $customer['rua']; ?>">
                          </div>
                        </div>                            
                        <div class="uk-width-1-3@s">
                          <label class="uk-form-label" for="form-stacked-text">N°</label>
                          <div class="uk-form-controls">
                              <input class="uk-input" id="form-stacked-text" type="text" name="customer['n_endereco']" value="<?php echo $customer['n_endereco']; ?>">
                          </div>
                        </div>
                      <header class="panel_header">
                          <h2 class="title pull-left uk-heading-bullet">Informações Sobre a Graduação</h2>
                      </header>
                      <div class="uk-width-1-3@s">
                        <div class="uk-form-label">Curso</div>
                        <div class="uk-form-controls">
                            <select class="uk-select" id="form-stacked-select" name="customer['curso']" value="<?php echo $customer['curso']; ?>">
                                <option>Curso A da UFBA</option>
                                <option>Curso A da Unifacs</option>
                            </select>
                        </div>
                      </div>
                      <div class="uk-width-1-3@s">
                        <label class="uk-form-label" for="form-stacked-text">CR</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="number" name="customer['cr']" value="<?php echo $customer['cr']; ?>">
                        </div>
                      </div>
                      <div class="uk-width-1-3@s">
                        <label class="uk-form-label" for="form-stacked-text">Ano de Conclusão</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="number" name="customer['ano_concl']" value="<?php echo $customer['ano_concl']; ?>">
                        </div>
                      </div>                     
                      <header class="panel_header">
                          <h2 class="title pull-left uk-heading-bullet">Informações Sobre a Pós-Graduação</h2>
                      </header>
                      <div class="uk-width-1-2@s">
                        <label class="uk-form-label" for="form-stacked-text">Área de Conhecimento</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="text" name="customer['area_conhecimento']" value="<?php echo $customer['area_conhecimento']; ?>">
                        </div>
                      </div>
                      <div class="uk-width-1-2@s">
                        <label class="uk-form-label" for="form-stacked-text">Semestre de Ingresso</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="text" name="customer['semestre_inc']" value="<?php echo $customer['semestre_inc']; ?>">
                        </div>
                      </div>
                      <div class="uk-width-1-3@s">
                        <div class="uk-form-label">Orientador</div>
                        <div class="uk-form-controls">
                            <select class="uk-select" id="form-stacked-select" name="customer['orientador']" value="<?php echo $customer['orientador']; ?>">
                                <option value="">Selecione um orientador</option>
                                <option value="1">Daniela Claro</option>
                                <option value="2">Ivan Machado</option>
                            </select>
                        </div>
                      </div>
                      <div class="uk-width-1-3@s">
                        <label class="uk-form-label" for="form-stacked-text">Co-Orientador</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="text" name="customer['co_orientador']" value="<?php echo $customer['co_orientador']; ?>">
                        </div>
                      </div>
                      <div class="uk-width-1-3@s">
                        <div class="uk-form-label">Nível</div>
                        <div class="uk-form-controls">
                            <select class="uk-select" id="form-stacked-select" name="customer['nivel']" value="<?php echo $customer['nivel']; ?>">
                                <option value="">Selecione um nível</option>
                                <option value="1">Mestrado</option>
                                <option value="2">Doutorado</option>
                            </select>
                        </div>
                      </div>
                      <div id="actions" class="cadastrar">
                        <button type="submit" class="uk-button uk-button-primary">Salvar</button>
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
