<?php
/**
 Template Name: finalizar
 */
 ?>
<?php get_header(); ?>
<div class="finalizar-compra-formulario">
  <div class="container-fluid finalizar-ped">
  <div class="container text-center">
  <h2>Finalizar pedido</h2>
  <div class="col-md-8 col-md-offset-2">

    <form action="<?php bloginfo('template_url'); ?>/enviar.php" method="POST" name="userForm">
      <div class="form-group box-nome-email" ng-class="{ 'has-error' : userForm.name.$invalid && !userForm.name.$pristine }">
        <!--  <label></label> -->
        <input class="form-control" type="text" name="name" id="nome"placeholder="* Nome" ng-model="user.name" required>
      </div>
      <div class="form-group box-nome-email">
        <!--   <label></label> -->
        <input class="form-control" type="email" name="email" id="email" placeholder="Email">
      </div>
      <div class="box-empresa-data" ng-class="{ 'has-error' : userForm.data.$invalid && !userForm.data.$pristine }">
        <p><input class="form-control" type="text" id="empresa" placeholder="Empresa">
        <br>
          <input class="form-control" type="text" id="data" placeholder="* Data do Evento" ng-model="user.data" name="data"required>
        </p>
      </div>
      <div class="tel-cel-cidade-estado" ng-class="{ 'has-error' : userForm.telefone.$invalid && !userForm.telefone.$pristine }, { 'has-error' : userForm.celular.$invalid && !userForm.celular.$pristine }">
        <p>
          <input class="form-control" type="phone" id="telefone" required="required" placeholder="* Telefone" ng-model="user.telefone" name="telefone"required>
         <br>
          <input class="form-control" type="phone" id="celular" required="required" placeholder="* Celular" ng-model="user.celular"  name"celular"required>
        </p>
        <p>
          <input class="form-control" type="text" id="cidade" placeholder="Cidade">
         <br>
          <input class="form-control" type="text" id="estado" placeholder="Estado">
        </p>
      </div>
      <div class="textarea">
        <p><textarea class="form-control" value"Observações" id="comments"  placeholder="Observações"></textarea></p>

      </div>
      <div class="texto-preencha">
        <p>* Preencha todos os campos</p>
      </div>

      <div class="enviar-cancelar">
        <a href="javascript:;" class="simpleCart_empty">Cancelar</a>

        <a href="javascript:;"class="simpleCart_checkout btn btn-success" id="bt-enviar" ng-disabled="userForm.$invalid">Confirmar</a>
      </div>
    </form>
  </div>

  </div>

  </div>

</div>

<?php get_footer(); ?>