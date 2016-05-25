<div class="content">
<form action="{{ URL::to('upload')}}" method="post" enctype="multipart/form-data">
<label>select file to upload:</label>
<input type="file" name="file" id="file">
<input type="submit" value"upload" name="submit">
<input type="hidden" value="{{ csrf_token()}}" name="">
</form>
</div>