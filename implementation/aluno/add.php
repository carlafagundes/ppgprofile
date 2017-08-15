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
                      <input class="uk-input" id="form-stacked-text" type="text" name="customer['nome']">
                    </div>
                  </div>
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label" for="form-stacked-text">Sobrenome</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="text" name="customer['sobrenome']">
                    </div>
                  </div>
                  <div class="uk-width-1-3@s">
                    <div class="uk-form-label">Gênero</div>                                              
                    <div class="uk-form-controls">
                      <select class="uk-select" id="form-stacked-select" type="text" name="customer['genero']">
                        <option value="0" >Selecione um gênero</option>
                        <option value="F" >Feminino</option>
                        <option value="M" >Masculino</option>
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
                      <input class="uk-input" id="form-stacked-text" type="date" name="customer['dataNascimento']">
                    </div>
                  </div>
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label" for="form-stacked-text">Nacionalidade</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="text" name="customer['nacionalidade']">
                    </div>
                  </div>
                  <header class="panel_header">
                    <h2 class="title pull-left uk-heading-bullet">Endereço</h2>
                  </header>
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label" for="form-stacked-text">Logradouro</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="text" name="customer['logradouro']">
                    </div>
                  </div> 
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label" for="form-stacked-text">Número</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="number" name="customer['numero']">
                    </div>
                  </div>
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label" for="form-stacked-text">Bairro</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="text" name="customer['bairro']">
                    </div>
                  </div>
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label" for="form-stacked-text">Cidade</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="text" name="customer['cidade']">
                    </div>
                  </div>
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label" for="form-stacked-text">Estado</label>
                    <div class="uk-form-controls">                              
                      <select class="uk-select" id="form-stacked-select" type="text" name="customer['estado']">
                        <option value="">Selecione um estado</option>
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
                    <label class="uk-form-label" for="form-stacked-text">CEP</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="number" name="customer['cep']">
                    </div>
                  </div>
                  <header class="panel_header">
                    <h2 class="title pull-left uk-heading-bullet">Informações Sobre a Graduação</h2>
                  </header>
                  <div class="uk-width-1-2@s">
                    <div class="uk-form-label">Curso</div>
                    <div class="uk-form-controls">
                      <select class="uk-select" id="form-stacked-select" name="customer['idCursoGraduacao']" id="id_instituicao">
                        <option value="">Selecione o curso</option>
                        <?php 
                        $sql = "SELECT * FROM curso";
                        $bd=open_database();
                        $resultado = mysqli_query($bd, $sql);
                        while ($dados = mysqli_fetch_assoc($resultado)){
                          $id = $dados['id'];
                          $nome = $dados['nome'];
                          echo "<option value='$id'>$nome</option>";
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="uk-width-1-2@s">
                    <div class="uk-form-label">Instituição</div>
                    <div class="uk-form-controls">
                      <select class="uk-select" id="form-stacked-select" name="customer['idInstituicao']" id="id_instituicao">
                        <option value="">Selecione a Instituição</option>
                        <?php 
                        $sql = "SELECT * FROM instituicao";
                        $bd=open_database();
                        $resultado = mysqli_query($bd, $sql);
                        while ($dados = mysqli_fetch_assoc($resultado)){
                          $id = $dados['id'];
                          $nome = $dados['nome'];
                          echo "<option value='$id'>$nome</option>";
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="uk-width-1-2@s">
                    <label class="uk-form-label" for="form-stacked-text">CR</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="number" name="customer['crGraduacao']">
                    </div>
                  </div>
                  <div class="uk-width-1-2@s">
                    <label class="uk-form-label" for="form-stacked-text">Ano de Conclusão</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="number" name="customer['anoConclusaoGraduacao']">
                    </div>
                  </div>
                  <header class="panel_header">
                    <h2 class="title pull-left uk-heading-bullet">Informações Sobre a Pós-Graduação</h2>
                  </header>
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label" for="form-stacked-text">Curso</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="text" name="customer['cursoPosGraducao']">
                    </div>
                  </div>
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label" for="form-stacked-text">Área de Conhecimento</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="text" name="customer['areaConhecimento']">
                    </div>
                  </div>
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label" for="form-stacked-text">CR</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="number" name="customer['cr']">
                    </div>
                  </div>
                  <div class="uk-width-1-3@s">
                    <label class="uk-form-label" for="form-stacked-text">Semestre de Ingresso</label>
                    <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="number" name="customer['semestreIngresso']">
                    </div>
                  </div>
                  <div class="uk-width-1-3@s">
                    <div class="uk-form-label">Dedicação</div>
                    <div class="uk-form-controls">
                      <select class="uk-select" id="form-stacked-select" name="customer['dedicacao']">
                        <option value="0">Selecione a dedicação</option>
                        <option value="1">Exclusiva</option>
                        <option value="2">Parcial</option>
                      </select>
                    </div>
                  </div>
                  <div class="uk-width-1-3@s">
                    <div class="uk-form-label">Título</div>
                    <div class="uk-form-controls">
                      <select class="uk-select" id="form-stacked-select" name="customer['titulo']">
                      <option value="0">Selecione um título</option>
                        <option value="1">Mestrado</option>
                        <option value="2">Doutorado</option>
                      </select>
                    </div>
                  </div>
                  <div class="uk-width-1-2@s">
                    <div class="uk-form-label">Orientador</div>
                    <div class="uk-form-controls">
                      <select class="uk-select" id="form-stacked-select" name="customer['idOrientador']" id="id_instituicao">
                        <option value="">Selecione o orientador</option>
                        <?php 
                        $sql = "SELECT * FROM professor";
                        $bd=open_database();
                        $resultado = mysqli_query($bd, $sql);
                        while ($dados = mysqli_fetch_assoc($resultado)){
                          $id = $dados['id'];
                          $nome = $dados['nome'];
                          echo "<option value='$id'>$nome</option>";
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="uk-width-1-2@s">
                    <div class="uk-form-label">Co-Orientador</div>
                    <div class="uk-form-controls">
                      <select class="uk-select" id="form-stacked-select" name="customer['idCoOrientador']" id="id_instituicao">
                        <option value="">Selecione o co-orientador</option>
                        <?php 
                        $sql = "SELECT * FROM professor";
                        $bd=open_database();
                        $resultado = mysqli_query($bd, $sql);
                        while ($dados = mysqli_fetch_assoc($resultado)){
                          $id = $dados['id'];
                          $nome = $dados['nome'];
                          echo "<option value='$id'>$nome</option>";
                        }
                        ?>
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
