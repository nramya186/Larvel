<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Form using laravel</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <script>
function jumpto(x){

if (document.form1.jumpmenu.value != "null") {
	document.location.href = x
	}
}



</script>

</head>

<body>
  <h1> welcome to laravel
  </h1>
  <form name="form1">
<select name="jumpmenu" onChange="jumpto(document.form1.jumpmenu.options[document.form1.jumpmenu.options.selectedIndex].value)">
<option>larvel 1 ...</option>
<option value=https://www.google.com>Quackit Homepage</option>
<option value=https://www.google.com/javascript/>JavaScript</option>
<option value=https://www.google.com/html/>HTML</option>
<option value=https://www.google.com/css/>CSS</option>
<option value=https://www.google.com/sql/>SQL</option>
<option value=https://www.google.com/database/>Database </option>
<option value=https://www.google.com/web_hosting/>Web blog</option>
</select>
<select name="jumpmenu" onChange="jumpto(document.form1.jumpmenu.options[document.form1.jumpmenu.options.selectedIndex].value)">
<option>larvel2...</option>
<option value=https://www.google.com>Quackit Homepage</option>
<option value=https://www.google.com/javascript/>JavaScript</option>
<option value=https://www.google.com/html/>HTML</option>
<option value=https://www.google.com/css/>CSS</option>
<option value=https://www.google.com/sql/>SQL</option>
<option value=https://www.google.com/database/>Database </option>
<option value=https://www.google.com/web_hosting/>Web blog</option>
</select>

</form>


<style>
.springy-text {
  color: white;
  animation-name: springy-text;
  animation-duration: 1s;
  animation-timing-function: ease;
  animation-delay: 0s;
  animation-iteration-count: 1;
  animation-direction: normal;
  animation-fill-mode: forwards;
}
@keyframes springy-text {
  0%   {
    letter-spacing: 1.2em;
    color: white;
  }
  100%   {
    letter-spacing: 0.1em;
    color: orange;
  }
}
</style>
<h3 class="springy-text">WELCOME!</h3>




<form action="/html/tags/html_form_tag_action.cfm">
<div class="form-group">
<label for="first_name">First Name</label>
<input type="text" class="form-control" id="first_name" name="first_name">
</div>
<div class="form-group">
<label for="last_name">Last Name</label>
<input type="text" class="form-control" id="last_name" name="last_name">
</div>
<button type="submit" class="btn btn-default">Submit</button>
</form>





</body>
</html>