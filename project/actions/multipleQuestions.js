 var myClone;
 var myLi;
  // Quando o doc carrega
  $(function() {

    // Faço copia a primeira vez
    myClone = $(".question").last().clone();
    $('.input_option').bind('focus', function() {
      bindOption($(this), 1);
    })

    // adiona listener ao #new_question
    $('#new_question').on('click', function(event) {
      // Impede o link de trocar de página
      event.preventDefault();
      var question_number = myClone.find('input.input_question').attr('number');
      question_number = parseInt(question_number)+1;

      myClone.find('.input_question').attr({
        'number':question_number, 'name':'question'+question_number, 'placeholder':'Question '+question_number
      });

      myClone.find('.input_option').attr({
        'name':'option'+question_number+'-1', 'placeholder':'Option 1'
      }).bind('focus', function() {
        bindOption($(this), question_number);
      });

      // Adionar no fim do form
      $('form#questions .modal-body').append(myClone);  
      
      // Nova cópia para voltar a adicionar
      myClone = myClone.clone();
    });

    function bindOption(myOption, question_number) {
      var option_number = myOption.attr('number');
      option_number = parseInt(option_number)+1;
      myLi = myOption.parent().clone(true);
      myLi.find('input').attr({
        'number':option_number, 'name':'option'+question_number+'-'+option_number, 'placeholder':'Option '+option_number,
      });
      myOption.parent().parent().append(myLi);
      myOption.unbind('focus');
    }
  });