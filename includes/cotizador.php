
<!-- filter modal -->
<script language='JavaScript'>
 function showpay() {
  if ((document.cotizador.price.value == null || document.cotizador.price.value.length == 0) ||
   (document.cotizador.months.value == null || document.cotizador.months.value.length == 0)  ||
    (document.cotizador.rate.value == null || document.cotizador.rate.value.length == 0)) {
    document.cotizador.pay.value = "Incomplete data";
  } else {
    var down_payment = document.cotizador.down_payment.value || 0;
    var trade_in_value = document.cotizador.trade_in_value.value || 0;
    var sales_tax = document.cotizador.sales_tax.value || 0;
    var discounts = parseFloat(down_payment) + parseFloat(trade_in_value);
    var princ = document.cotizador.price.value - discounts;
    princ = princ * (1 + (sales_tax / 100));
    var term  = document.cotizador.months.value;
    var rate   = document.cotizador.rate.value || 0;
    var x = Math.pow(1 + rate/100/12, term);
    if (x == 1) {
      var result = princ/term;
    } else {
      var result = (princ * x * rate/100/12)/(x-1);
    }
    document.cotizador.pay.value = result.toFixed(2);
  }
}
</script>
<div aria-hidden='true' aria-labelledby='calculatorModalLabel' class='modal fade' id='cotizador_modal' role='dialog' tabindex='-1'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <!--  encabezado -->
      <div class='modal-header'>
        <button aria-hidden='true' class='close' data-dismiss='modal' type='button'>&times;</button>
        <h4 class='modal-title h3' id='calculatorModalLabel'>
        <span class='glyphicon glyphicon-calculator'></span>
        Cotización de carga </h4>
      </div>
      <!--  cuerpo modal -->
      <div class='modal-body'>
        <!--  form calculadora -->
        <form class='form-horizontal' id='payments_calculator' name='cotizacion' role='form'>
          <div class='form-group'>
            <label class='col-sm-3 control-label' for='price'>Origen:</label>
            <div class='col-sm-8 input-group'>
              <span class='input-group-addon'>$</span>
              <input class='form-control' id='price' name='price' placeholder='Price' type='text' value=''>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-sm-3 control-label' for='down_payment'>Destino:</label>
            <div class='col-sm-8 input-group'>
              <span class='input-group-addon'>$</span>
              <input class='form-control' id='down_payment' name='down_payment' type='text'>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-sm-3 control-label' for='trade_in_value'>Trade-In Value:</label>
            <div class='col-sm-8 input-group'>
              <span class='input-group-addon'>$</span>
              <input class='form-control' id='trade_in_value' name='trade_in_value' type='text'>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-sm-3 control-label' for='sales_tax'>Sales Tax:</label>
            <div class='col-sm-8 input-group'>
              <input class='form-control' id='sales_tax' name='sales_tax' type='text'>
              <span class='input-group-addon'>%</span>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-sm-3 control-label' for='rate'>Interest Rate (APR):</label>
            <div class='col-sm-8 input-group'>
              <input class='form-control' id='rate' name='rate' type='text' value='3.9'>
              <span class='input-group-addon'>%</span>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-sm-3 control-label' for='months'>Term:</label>
            <div class='col-sm-8 input-group'>
              <input class='form-control' id='months' name='months' type='text' value='36'>
              <span class='input-group-addon'>months</span>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-sm-3 control-label' for='pay'>Monthly Payment:</label>
            <div class='col-sm-8 input-group'>
              <span class='input-group-addon'>$</span>
              <input class='form-control' id='pay' name='pay' readonly='readonly' type='text'>
            </div>
          </div>
        </form>
      </div>
      <!-- /.modal-body -->
      <div class='modal-footer'>
        <button class='btn btn-default' data-dismiss='modal' type='button'>Close</button>
        <button class='btn btn-callOA btn-lg' onclick='showpay()' type='button'>
        Calculate <span class='glyphicon glyphicon-refresh'></span>
        </button>
      </div>
    <!-- footer -->
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->













  <button class='btn btn-xs btn-important' data-target='#cotizador_modal' data-toggle='modal' onclick="payments_click()">Financing/Calculate Payments</button>