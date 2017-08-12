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
                 <h2 class="title pull-left uk-heading-bullet">Instituição:<?php echo $customer['nome']; ?></h2>
               </header>
               <header class="panel_header">
                 <h2 class="title pull-left uk-heading-bullet">Tipo:<?php echo $customer['tipo']; ?></h2>
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
