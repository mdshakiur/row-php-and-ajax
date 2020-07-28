<footer class="footer">

</footer>

<!-- <script src="js/jquery-3.3.1.slim.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
  $(document).ready(function() {

    $('#country').change(function(){
      var country_id = $(this).val();
      $.ajax({
            type : 'post',
            url  : 'process.php',
            data : {country_id:country_id},
            success : function(data){
              $('#city').html(data)
            },
      });
    });

  });
</script>


<script>
$(document).ready(function(){
  $('#city').change(function(){
    var city_id = $(this).val();
    $.ajax({
      type : 'post',
      url  : 'zip_code.php',
      data : {city_id:city_id},
      success : function(data){
        $('#zip_code').html(data)
      },
    });
  });
});
</script>


<script>
$(document).ready(function() {
    $('#country').select2();
    $('#city').select2();
    $('#zip_code').select2();
});
</script>
</body>
</html>
