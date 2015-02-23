<html>
<head>
<style>
	.headers{padding:20 0 5 200px; margin-left:25%;}
	.searchres{margin-left:25%;width:650px;border: #f0f0f0 1px solid;border-radius:5px;}.img{float:left;margin: 5 5 5 5px;}
	.search_box{width: 650px;height: 50px; border: 1px solid #50AADF;font-size:1em;border-radius: 5px;padding: 10px;font-family: verdana;color:black; font-size: 15px;}
	.name{margin-top: 14px; margin-left:15px;}
	.user_div{clear:both;font-family: verdana;border-top: #f0f0f0 1px solid;color:black; font-size: 15px;height:40px;margin:1px;padding:10px;width:380px;border-radius:4px;vertical-align: top;  }
	.user_div:hover{background:#4c66a4;color:#fff;cursor:pointer}
	.no_data{height: 40px;background-color: #F0F0F0;padding: 10 0 0 10px;width: 650px;border-radius: 5px;font-family: verdana;color:black; font-size: 15px;}
	.name{float:left;margin:0 0 0 10px;}.cntry{margin:0 0 0 50px; font-size:13px}
	a:link {text-decoration:none;}a:visited {text-decoration:none;}a:hover {text-decoration:none;}a:active {text-decoration:none;}
</style>
<script src="web/js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$("#search_box").keyup(function(){var search_string = $("#search_box").val();
if(search_string == ''){$("#searchres").html('');}else{postdata = {'string' : search_string}
$.post("Retrieve_Data_People",postdata,function(data){	$("#searchres").html(data);	});}});});
function fillme(name){$("#search_box").val(name);$("#searchres").html('');}
</script>
</head>
<body>
<div class="headers"><input type="text" class="search_box" id="search_box" placeholder="Search Your Friends" autocomplete="off"></div>
<div id="searchres" class="searchres"></div>
</body>
</html>