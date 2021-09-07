$(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

  function calc_total() {
    valor = 0;  
    

    valor = valor + parseInt(document.getElementById('tipo').value);

    //============ELEMENTOS===================

    if(document.getElementById('form').checked) {
    valor += 59.99;
    }

    if(document.getElementById('banner').checked) {
        valor += 79.99;
    }

    if(document.getElementById('paleta').checked) {
        valor += 20;
    }

    if(document.getElementById('mobile').checked) {
        valor += 69.99;
    }

    if(document.getElementById('logotipo').checked) {
        valor += 179.99;
    }

    if(document.getElementById('post').checked) {
        valor += 79.99;
    }

    if(document.getElementById('video').checked) {
        valor += 99.99;
    }

    if(document.getElementById('port').checked) {
        valor += 14.99;
    }

    //=======CALCULAR TOTAL==============
     
     tot = `R$${valor.toFixed(2)}`;
     document.getElementById('total').value = tot; 
  }