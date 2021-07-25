
<div class="Search">
    <div>
        <input type="text" placeholder="Tìm kiếm" id="search_id" class="input-search" name="search" autocomplete="off">
        <i class="fas fa-search position-absolute icon-search px-2 text-secondary"></i>
    </div>
    <div id="search_product"></div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#search_id").keyup(function() {
        $.ajax({
          type: "POST",
          url: "ajax.php",
          data: 'keyword=' + $(this).val(),
          beforeSend: function() {
            $("#search_product").css("background", "#FFF url(LoaderIcon.gif) no-repeat 165px");
          },
          success: function(data) {
            $("#search_id").show();
            $("#search_product").html(data);
          }
        });
      });
    });
    //To select country name
    function selectCountry(val) {
      $("#search_id").val(val);
      $("#search_product").hide();
    }
  </script>