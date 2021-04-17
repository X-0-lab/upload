

<h1>CSC353 Laravel Photo Upload File Final</h1>
<form id="style" action="upload" method="POST" enctype="multipart/form-data">
@csrf 
<input type="file" name="file"> <br> <br>
<button type="submit" >*Upload*</button>
</form>