<!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

    	});
	</script>
<!--
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>
    if (navigator.userAgent.indexOf("Firefox") != -1)
{
    $(function() {
    $( ".datepicker" ).datepicker();
  });
}
 </script>
-->

<script>

 window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 1000)
 

 $('.surnameInput').keypress(function(key) {

     if (key.which === 32 && !this.value.length){
          key.preventDefault();
     }
     
     else if((key.charCode < 97 || key.charCode > 122) && (key.charCode < 65 || key.charCode > 90) && (key.charCode != 45) && (key.charCode != 0) && (key.charCode != 32)){
         
         return false;
     }
     return true;  
});
    
     $('.phoneInput').keypress(function(key) {
        if((key.charCode < 48 || key.charCode > 57) && (key.charCode != 0)) 
        return false;
    });
 
    
//    $(document).ready(function() {
//        $("#enter_disable").bind("keypress", function(e) {
//            if (e.keyCode == 13) {
//                return false;
//            }
//        });
//    });
//    
//    $(".UserName_field").on({
//  keydown: function(e) {
//    if (this.value.length === 0 && e.which === 32)
//     e.preventDefault();
//  },
//});
//    
    $(".UserName_field").on({
  keydown: function(e) {
    if (e.which === 32)
      return false;
  },
  change: function() {
    this.value = this.value.replace(/\s/g, "");
  }
});
    
//    $('.UserName_field').keypress(function(key) {
//
//     if (key.which === 32 && !this.value.length){
//          key.preventDefault();
//     }
//});
</script>
</html>
