<?php
$checked='checked';
if(isset($user->name)){
	$checked='';
}
?>

<div class="menuForm">
<div class="row disabled">
    <div class='col-md-6 col-sm-6'>
        <div class='col-md-6 col-sm-6'>
            {!! Form::text('name')
            -> label(trans('user::user.label.name'))
            -> placeholder(trans('user::user.placeholder.name')) !!}
        </div>
        <div class='col-md-6 col-sm-6'>
            {!! Form::email('email')
            -> label(trans('user::user.label.email'))
            -> placeholder(trans('user::user.placeholder.email')) !!}
        </div>
        <div class='col-md-6 col-sm-6'>
            {!! Form::password('password')
            -> label(trans('user::user.label.password').' <a href="javascript:void(0)" class="pwdedit"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>')
            -> disabled(true)
            -> placeholder(trans('user::user.placeholder.password')) !!}
        </div>
         <div class='col-md-6 col-sm-6'>
            {!! Form::tel('mobile')
            -> label(trans('user::user.label.mobile'))
            -> placeholder(trans('user::user.placeholder.mobile')) !!}
        </div>     
        
        
        </div>
    <div  class='col-md-6 col-sm-6'>
    <div class='col-md-12 col-sm-12'>
		<strong>Roles</strong><br/>
		@foreach ($roles as $role)
			@if($role->slug=='admin')
			
				<div class="checkbox checkbox-danger chkkkk">
					<input name="roles[{{ $role->id }}]" id="roles.{{ $role->id }}" type="checkbox" {{$checked}} {{ !($user->hasRole($role->slug)) ? :'checked'}} value='{{ $role->id }}'>
					<label for="roles.{{ $role->id }}">{{ $role->name }}</label>              
				</div>
			
			@endif
		@endforeach
    </div>

   
  </div>
</div>
</div>



<style type="text/css">

.treeview {
  margin: 10px 0 0 0px;
}
.treeview ul { 
  list-style: none;
}

.treeview li label {
    font-weight: 500;
    margin-bottom: 2px;
}
.treeview hr {
    margin-top: 2px;
}
.treeview>ul>li>label {
    font-weight: 700;
}
</style>

<script type="text/javascript">


$(function() {
    $(".pwdedit").click(function(){
      console.log('dsfdsf');
      $("#password").removeAttr('disabled');
    });

    $('input[type="checkbox"]').change(function(e) {

      var checked = $(this).prop("checked"),
          container = $(this).parent(),
          siblings = container.siblings();

      container.find('input[type="checkbox"]').prop({
        indeterminate: false,
        checked: checked
      });

      function checkSiblings(el) {

        var parent = el.parent().parent(),
            all = true;

        el.siblings().each(function() {
          return all = ($(this).children('input[type="checkbox"]').prop("checked") === checked);
        });

        if (all && checked) {

          parent.children('input[type="checkbox"]').prop({
            indeterminate: false,
            checked: checked
          });

          checkSiblings(parent);

        } else if (all && !checked) {

          parent.children('input[type="checkbox"]').prop("checked", checked);
          parent.children('input[type="checkbox"]').prop("indeterminate", (parent.find('input[type="checkbox"]:checked').length > 0));
          checkSiblings(parent);

        } else {

          el.parents("li").children('input[type="checkbox"]').prop({
            indeterminate: true,
            checked: false
          });

        }
      }
      checkSiblings(container);
    });
});
</script>
