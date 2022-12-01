<h4 class="h4 col-md-12 text-center text-muted font-weight-bold" style="font-size: 1.2em;">Alterar Status</h4><br>

<form class="needs-validation" novalidate action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="alterar">
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">N° do Processo</label>
        <input type="text" name="numprocesso" class="form-control" id="validationCustom01" placeholder="Digite o número do processo" value="" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-8 mb-3">
        <label for="validationCustom04">Data</label>
        <input type="date" name="dataproc" class="form-control" id="validationCustom04" value="" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
    </div>
      <div class="form-row">
      <div class="col-md-12 mb-3">
        <label for="validationCustom05">Status</label>
        <input type="text" name="statusproc" class="form-control" id="validationCustom05" value="" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
    </div>
    <button class="btn btn-primary" type="submit"><i class="fa-solid fa-plus"></i> Registrar</button>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>