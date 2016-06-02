<?php
/**
 Template Name: finalizar
 */
 ?>
<?php get_header(); ?>
<div class="finalizar-compra-formulario">
  <h4>Finalizar pedido</h4>


  <div class="container">
    <form action="<?php bloginfo('template_url'); ?>/enviar.php" method="POST" name="userForm">
      <div class="form-group box-nome-email" ng-class="{ 'has-error' : userForm.name.$invalid && !userForm.name.$pristine }">
        <!--  <label></label> -->
        <input type="text" name="name" id="nome"placeholder="* Nome" ng-model="user.name" required>
      </div>
      <div class="form-group box-nome-email">
        <!--   <label></label> -->
        <input type="email" name="email" id="email" placeholder="Email">
      </div>
      <div class="box-empresa-data" ng-class="{ 'has-error' : userForm.data.$invalid && !userForm.data.$pristine }">
        <p><input type="text" id="empresa" placeholder="Empresa">
          <input type="text" id="data" placeholder="* Data do Evento" ng-model="user.data" name="data"required>
        </p>
      </div>
      <div class="tel-cel-cidade-estado" ng-class="{ 'has-error' : userForm.telefone.$invalid && !userForm.telefone.$pristine }, { 'has-error' : userForm.celular.$invalid && !userForm.celular.$pristine }">
        <p>
          <input type="phone" id="telefone" required="required" placeholder="* Telefone" ng-model="user.telefone" name="telefone"required>
          <input type="phone" id="celular" required="required" placeholder="* Celular" ng-model="user.celular"  name"celular"required>
        </p>
        <p>
          <input type="text" id="cidade" placeholder="Cidade">
          <input type="text" id="estado" placeholder="Estado">
        </p>
      </div>
      <div class="textarea">
        <p><textarea value"Observações" id="comments"  placeholder="Observações"></textarea></p>

      </div>
      <div class="texto-preencha">
        <p>* Preencha todos os campos</p>
      </div>

      <div class="enviar-cancelar">
        <a href="javascript:;" class="simpleCart_empty">Cancelar</a>

        <a href="javascript:;"class="simpleCart_checkout btn btn-primary" id="bt-enviar" ng-disabled="userForm.$invalid">Confirmar</a>
      </div>
    </form>
  </div>

</div>

<?php get_footer(); ?>