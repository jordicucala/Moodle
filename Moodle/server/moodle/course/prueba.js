<script type="text/javascript" src="jquery-1.8.3.js"></script>
<body onload="prueba()"> 
hola;
</body>

<script type="text/javascript">

function prueba(){
  var words = $("body:first").text().split(" ");
  var text = words.join("</span> <span>");
  $("body:first").html("<span>" + text + "</span>");
  $("span").click(function () {
    $(this).css("background-color","yellow");
     var nom = window.prompt($(this).text(),"defaultvalue");
     // alert("texto:"+ $(this).text()); 
  });
}

</script>
