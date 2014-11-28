    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="frameworks/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="frameworks/bootstrap/css/bootstrap.css">

  <form id="questions" action="logic/classes/addPoll.php">
    <div class="question" align="left">
      <h4>Put here your question.
        <div class="form-group-lg">
           <input type="text" class="form-control input_question" number="1" name="question1" size="100" placeholder="Question 1" autofocus> <!--required missing-->
        </div>
      </h4>

      <h5>Options:
        <div class="form-group-sm">
              <input type="text" number="1" class="form-control input_option" name="option1-1" size="100" placeholder="Option 1"> <!--required="true"-->
        </div>
      </h5>
    </div>
    <!--<button class="btn btn-lg btn-primary btn-block" type="submit">Submit Poll</button>-->
  <!--</form>-->

  <div>
    <h4>Add question
      <a href="" id="new_question">
        <i class="glyphicon glyphicon-plus"></i>
      </a>
    </h4>
  </div>

  <script type="text/javascript">
  var myClone;
  var myLi;
  // Quando o doc carrega
  $('document').ready(function() {

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
      $('form#questions').append(myClone);  
      
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
  </script>
