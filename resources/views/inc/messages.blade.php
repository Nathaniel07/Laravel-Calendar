@if(count($errors) > 0)

	<?php /* @foreach($errors->all() as $error)
	<div class="alert alert-danger">
	{{$error}}

	</div>
	@endforeach
*/ ?>


<div class="alert alert-danger alert-dismissible fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
 	Please fill out all fields.
</div>

@endif

@if(session('success'))
<div class="alert alert-success alert-dismissible fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
 	<span class="glyphicon glyphicon-ok"></span>&nbsp;{{session('success')}}
</div>

@endif



<?php /* @if(session('error'))
<div class="alert alert-danger">
	{{session('error')}}
</div>
@endif

?>