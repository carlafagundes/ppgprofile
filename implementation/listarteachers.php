<?php
    require_once('database.php');
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<!-- Seção de Conteúdo -->
<div class="uk-container">
  <div class="row">
    <div class="page-head">
      <ul class="uk-breadcrumb">
        <li><a href="<?php echo BASEURL; ?>index.php">Visão Geral</a></li>
        <li><span href="<?php echo BASEURL; ?>cadastrarprofessor.php">Professores</span></li>
      </ul>
      <h2 class="page-head-title uk-heading-bullet">Professores</h2>
      <div class="cadastrar">
        <button class="uk-button uk-button-primary">Adicionar Novo Professor</button>
      </div>
    </div>
    <div class="uk-grid-medium uk-child-width-expand@s uk-text-left" uk-grid>
      <div>
          <div class="uk-card uk-card-default uk-card-body">
            <section class="box ">
                <div class="content-body">
                  <div class="row">
                    <?php if (!empty($_SESSION['message'])) : ?>
                    	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
                    		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    		<?php echo $_SESSION['message']; ?>
                    	</div>
                    	<?php clear_messages(); ?>
                    <?php endif; ?>
                    <table class="uk-table uk-table-hover uk-table-divider">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>SIAPE</th>
                          <th>E-mail</th>
                          <th>Ações</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if ($teachers) : ?>
                        <?php foreach ($teachers as $teacher) : ?>
                        <tr>
                          <td><?php echo $teacher['name' + 'lastname']; ?></td>
                          <td><?php echo $teacher['siape']; ?></td>
                          <td><?php echo $teacher['email']; ?></td>
                          <td class="actions text-right">
                      			<a href="view.php?id=<?php echo $teacher['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
                      			<a href="edit.php?id=<?php echo $teacher['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
                      			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $customer['id']; ?>">
                      				<i class="fa fa-trash"></i> Excluir
                      			</a>
                      		</td>
                        </tr>
                        <?php endforeach; ?>
                        <?php else : ?>
                        <tr>
                        	<td colspan="6">Nenhum professor encontrado.</td>
                        </tr>
                        <?php endif; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
            </section>
          </div>
      </div>
    </div>
  </div>
</div>
<?php include(FOOTER_TEMPLATE); ?>
