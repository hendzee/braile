<footer>
  <div class="footer-container">
    <p>Copyright &copy 2016 Virginia Hendras Prawira</p>
  </div>
</footer>
</div>
</body>
<!--script-->
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/materialize.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/sweetalert.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/Chart.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/utils.js"></script>
<script>
$(document).ready(function(){
  $("#home").click(function(e){
    $.ajax({
      url: "<?=base_url()?>index.php/Control/get_content/home",

      success: function(respponse){
        $(".main-container").html(respponse);
      }
    });
  });

  $("#about").click(function(e){
    $.ajax({
      url: "<?=base_url()?>index.php/Control/get_content/about_page",

      success: function(respponse){
        $(".main-container").html(respponse);
      }
    });
  });

  $("#learning").click(function(e){
    $.ajax({
      url: "<?=base_url()?>index.php/Control/get_content/learning_page",

      success: function(respponse){
        $(".main-container").html(respponse);
      }
    });
  });

  $("#testing").click(function(e){
    $.ajax({
      url: "<?=base_url()?>index.php/Control/get_content/testing",

      success: function(respponse){
        $(".main-container").html(respponse);
      }
    });
  });

  $("#developer").click(function(e){
    $.ajax({
      url: "<?=base_url()?>index.php/Control/get_content/developer",

      success: function(respponse){
        $(".main-container").html(respponse);
      }
    });
  });


});



$(document).ready(function(){
  $(".menu_what").click(function(){
    $(".nav-active").removeClass("nav-active");
    $(".menu_what").addClass("nav-active");
  });

  $(".menu_home").click(function(){
    $(".nav-active").removeClass("nav-active");
    $(".menu_home").addClass("nav-active");
  });

  $(".menu_learn").click(function(){
    $(".nav-active").removeClass("nav-active");
    $(".menu_learn").addClass("nav-active");
  });

  $(".menu_test").click(function(){
    $(".nav-active").removeClass("nav-active");
    $(".menu_test").addClass("nav-active");
  });

  $(".menu_dev").click(function(){
    $(".nav-active").removeClass("nav-active");
    $(".menu_dev").addClass("nav-active");
  });
});

function submit_learn(){
  var sel_jumlah_input = $("input[name='sel_jumlah_input']").val();
  var text_iterasi = $("input[name='text_iterasi']").val();
  var text_learning = $("input[name='text_learning']").val();
  var text_target = $("input[name='text_target']").val();
  var text_node = $("input[name='text_node']").val();

  $.ajax({
    type: "POST",
    url: "<?=base_url()?>index.php/Control/learning",
    data: {"sel_jumlah_input" : sel_jumlah_input,
      "text_iterasi" : text_iterasi,
      "text_learning" : text_learning,
      "text_target" : text_target,
      "text_node" : text_node},

    success: function(response){
      $("#canvas-content").html("<h5>Hasil Learning</h5>" +
        "<canvas id='canvas'></canvas>" +
        "<table>" +
        "<thead>" +
        "<tr>" +
        "<th>Variabel</th>" +
        "<th>Value</th>" +
        "<tbody>" +
        "<tr><td>Jumlah Pola</td><td><?php echo $this->session->userdata("ses_jum_input");?></td></tr>" +
        "<tr><td>Max Iterasi</td><td><?php echo $this->session->userdata("ses_mx_iterasi");?></td></tr>" +
        "<tr><td>Iterasi Berhenti</td><td><?php echo $this->session->userdata("ses_stop_iterasi");?></td></tr>" +
        "</tbody>" +
        "</tr>" +
        "</thead></table>");
      get_chart();
      swal("sukses", "proses belajar selesai", "success");
    }
  });
}

function reset_form(){
  $("input[name='sel_jumlah_input']").val("");
  $("input[name='text_iterasi']").val("");
  $("input[name='text_learning']").val("");
  $("input[name='text_target']").val("");
  $("input[name='text_node']").val("");
  $(".input-field > label").removeClass("active");
}

function get_chart(){
  var a = "";
  var b = "";
  var c ="";
  var d = "";
  var e = "";
  var lbl_2 = "";
  var lbl_3 = "";
  var lbl_4 = "";
  var lbl_5 = "";

  <?php if ($this->session->has_userdata("graf_mse") && $this->session->has_userdata("ses_stop_iterasi")){ ?>
    a =  <?php echo $_SESSION['graf_mse'][0];?>;
  	b =  <?php echo $_SESSION['graf_mse'][1];?>;
  	c =  <?php echo $_SESSION['graf_mse'][2];?>;
  	d =  <?php echo $_SESSION['graf_mse'][3];?>;
  	e =  <?php echo $_SESSION['graf_mse'][4];?>;
  	lbl_2 = <?php echo ceil($_SESSION['ses_stop_iterasi'] / 2)?>;
  	lbl_3 = <?php echo ceil($_SESSION['ses_stop_iterasi'] / 3)?>;
  	lbl_4 = <?php echo ceil($_SESSION['ses_stop_iterasi'] / 4)?>;
  	lbl_5 = <?php echo ceil($_SESSION['ses_stop_iterasi'])?>;
  <?php } ?>

  var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
  var config = {
      type: 'line',
      data: {
          labels: [lbl_2, lbl_3, lbl_4, lbl_5],
          datasets: [{
              label: "My First dataset",
              backgroundColor: window.chartColors.red,
              borderColor: window.chartColors.red,
              data: [a,b,c,d,e],
              fill: false,
          }]
      },
      options: {
          responsive: true,
          title:{
              display:true,
              text:'Chart.js Line Chart'
          },
          tooltips: {
              mode: 'index',
              intersect: false,
          },
          hover: {
              mode: 'nearest',
              intersect: true
          },
          scales: {
              xAxes: [{
                  display: true,
                  scaleLabel: {
                      display: true,
                      labelString: 'Iterasi'
                  }
              }],
              yAxes: [{
                  display: true,
                  scaleLabel: {
                      display: true,
                      labelString: 'Error'
                  }
              }]
          }
      }
  };

  var ctx = $("#canvas");
  var myChart = new Chart(ctx, config);
}

var braile_1 = 0;
var braile_2 = 0;
var braile_3 = 0;
var braile_4 = 0;
var braile_5 = 0;
var braile_6 = 0;

function get_braile(data){
  switch(data){
    case "1":
      if (braile_1 == 0){
        braile_1 = 1;
        $(".braile-btn-1").addClass("braile-active");
      }else{
        braile_1 = 0;
        $(".braile-btn-1").removeClass("braile-active");
      }
    break;

    case "2":
      if (braile_2 == 0){
        braile_2 = 1;
        $(".braile-btn-2").addClass("braile-active");
      }else{
        braile_2 = 0;
        $(".braile-btn-2").removeClass("braile-active");
      }
    break;

    case "3":
      if (braile_3 == 0){
        braile_3 = 1;
        $(".braile-btn-3").addClass("braile-active");
      }else{
        braile_3 = 0;
        $(".braile-btn-3").removeClass("braile-active");
      }
    break;

    case "4":
      if (braile_4 == 0){
        braile_4 = 1;
        $(".braile-btn-4").addClass("braile-active");
      }else{
        braile_4 = 0;
        $(".braile-btn-4").removeClass("braile-active");
      }
    break;

    case "5":
      if (braile_5 == 0){
        braile_5 = 1;
        $(".braile-btn-5").addClass("braile-active");
      }else{
        braile_5 = 0;
        $(".braile-btn-5").removeClass("braile-active");
      }
    break;

    case "6":
      if (braile_6 == 0){
        braile_6 = 1;
        $(".braile-btn-6").addClass("braile-active");
      }else{
        braile_6 = 0;
        $(".braile-btn-6").removeClass("braile-active");
      }
    break;
  }
}

function translate(){
  $.ajax({
    type: 'POST',
    url: "<?=base_url()?>index.php/Control/testing",
    data: {"braile_1" : braile_1, "braile_2" : braile_2, "braile_3" : braile_3,
      "braile_4" : braile_4, "braile_5" : braile_5, "braile_6" : braile_6},

    success: function(response){
      $("#result-braile").html(response);
    }
  });
}

</script>
</html>
