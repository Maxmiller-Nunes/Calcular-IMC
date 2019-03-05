$(document).ready(function(){
  
  $('#form').submit(function(e){
    e.preventDefault();

    var dados = $(this).serialize();

    $.ajax({
      type:'POST',
      url:'php/calcular.php',
      data:dados,
      success:function(json){
        $('#imc').text(json);
      },
      error:function(){
        $('#imc').text('Deu Merda!');
      }
    });

  });
  
});