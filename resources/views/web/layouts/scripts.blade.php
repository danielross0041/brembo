

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   <script src="{{asset('web/js/jquery-3.6.0.min.js')}}"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="{{asset('web/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('web/js/popper.min.js')}}"></script>
    <script src="{{asset('web/js/slick.min.js')}}"></script>
    <script src="{{asset('web/js/fontawesome.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    
<script type="text/javascript">
    $("#year_search").on("input", function() {
        console.log($(this).val())
        var year = $(this).val();

        if (year!='') {
            $.ajax({
                type: 'post',
                dataType : 'json',
                url: "{{route('get_make')}}",
                data: {year, year , _token: '{{csrf_token()}}'},
                success: function (response) {
                    if (response.status == 1) {
                        $("#make_datalist").html(response.message);
                    }
                }
            });
        }
    });
    $("#make_search").on("input", function() {
        console.log($(this).val())
        var make = $(this).val();
        var year = $("#year_search").val();
        console.log(year)
        if (make!='') {
            $.ajax({
                type: 'post',
                dataType : 'json',
                url: "{{route('get_model')}}",
                data: {year:year,make: make , _token: '{{csrf_token()}}'},
                success: function (response) {
                    if (response.status == 1) {
                        $("#model_datalist").html(response.message);
                    }
                }
            });
        }
    });



    $("#year-search-side").on("input", function() {
        console.log($(this).val())
        var year = $(this).val();
        if (year!='') {
            $.ajax({
                type: 'post',
                dataType : 'json',
                url: "{{route('get_make')}}",
                data: {year, year , _token: '{{csrf_token()}}'},
                success: function (response) {
                    if (response.status == 1) {
                        $("#make-side").html(response.message);
                    }
                }
            });
        }
    });
    $("#make-search-side").on("input", function() {
        console.log($(this).val())
        var make = $(this).val();
        var year = $("#year-search-side").val();
        console.log(year)
        if (make!='') {
            $.ajax({
                type: 'post',
                dataType : 'json',
                url: "{{route('get_model')}}",
                data: {year:year,make: make , _token: '{{csrf_token()}}'},
                success: function (response) {
                    if (response.status == 1) {
                        $("#model-side").html(response.message);
                    }
                }
            });
        }
    });
</script>
<script src="{{asset('web/js/custom.js')}}"></script>
    