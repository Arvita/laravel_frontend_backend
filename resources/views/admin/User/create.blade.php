<form id="form_user" class="form-horizontal" role="form" method="POST" action="{{ isset($user)? url('user/'.$user->id) : url('user') }}">
    {!! csrf_field() !!}
    {!! isset($user)? method_field('PUT') : '' !!}

<div class="modal-header stack0">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3 class="text-center">{{ isset($user)? 'Edit' : 'Create' }} User</h3>
</div>
<div class="modal-body">
              <div class="form-group mt20 top">
                <label class="col-sm-3 control-label">
                  Name User <span class="symbol required"></span>
                </label>
                <div class="col-sm-8">
                  <input type="text" tabindex="1"  placeholder="Nama user" id="name"  class="form-control" name="name" value="{{old('name', $user->name)}}">
                </div>
              </div>
              <div class="form-group mt20">
                <label class="col-sm-3 control-label" >
                  Username <span class="symbol required"></span>
                </label>
                <div class="col-sm-8">
                  <input type="text" tabindex="5" placeholder="Masukkan Username" id="username" class="form-control" name="username"  value="{{old('username', $user->username)}}">
                </div>
              </div>
              @if(isset($user))
                  <div class="form-group mt20">
                    <label class="col-sm-3 control-label" >
                      Password <span class="symbol required"></span>
                    </label>
                    <div class="col-sm-8">
                      <input type="password" tabindex="6" value="" placeholder="Insert your Password" class="form-control" name="passwordupdate"  >
                      <span class="help-block"><i class="fa fa-info-circle"></i> Isi jika ingin mengganti password.</span>
                    </div>
                  </div>
              @else
                  <div class="form-group mt20">
                    <label class="col-sm-3 control-label" >
                      Password <span class="symbol required"></span>
                    </label>
                    <div class="col-sm-8">
                      <input type="password" tabindex="6" value="" placeholder="Insert your Password" id="password" class="form-control" name="password"  >
                    </div>
                  </div>
                  <div class="form-group mt20">
                    <label class="col-sm-3 control-label" >
                      Confirmation <span class="symbol required"></span>
                    </label>
                    <div class="col-sm-8">
                      <input type="password" tabindex="7" class="form-control" id="password_again" name="password_again" placeholder="Insert your confirmation">
                    </div>
                  </div>
              @endif
</div>
<div class="modal-footer">
	<button type="button" data-dismiss="modal" id="closeModal" class="btn btn-warning">Cancel</button>
	<button type="submit" class="btn btn-primary">Save</button>
</div>
</form>
<script type="text/javascript">
jQuery(document).ready(function() {
    $(".user").select2({
        placeholder: "Pilih Status",
        allowClear: true
    });

    jQuery('#form_user').validate({
        errorElement: "span", // contain the error msg in a span tag
        errorClass: 'help-block',
        errorPlacement: function (error, element) { // render error placement for each input type
             if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                 error.insertAfter($(element).closest('.form-group').children('div').children().last());
             } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                 error.insertAfter($(element).closest('.form-group').children('div'));
             } else {
                 error.insertAfter(element);
             }
         },
        ignore: "",
        rules: {
            name: {
                minlength: 2,
                required: true
            },
            username: {
                minlength: 2,
                required: true
            },
            password: {
                minlength: 6,
                required: true
            },
            password_again: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            }
        },

        highlight: function (element) {
            $(element).closest('.help-block').removeClass('valid');
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        success: function (label, element) {
            label.addClass('help-block valid');
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
        },
        submitHandler: function (form) {
            blockTab(ajaxModal);
			jQuery(form).ajaxSubmit({
				dataType:  'json',
				success: function(data){
					var msg;
					$('.alert.alert-success, .alert.alert-danger').remove();
				   unblockTab(ajaxModal);
					if(data.stat){
						msg = '<div class="alert alert-success"><i class="fa fa-check-circle"></i><strong> Berhasil !</strong> '+data.msg+'</div>';
						$('.top').before(msg);
						user.fnReloadAjax();
						window.setTimeout(function () {
				            ajaxModal.modal('hide');
				        }, 1500);
					}else{
						msg = '<div class="alert alert-danger"><i class="fa fa-check-circle"></i><strong> Kesalahan !</strong> '+data.msg+'</div>';
						$('.top').before(msg);
					}
				}
			});
        }
    });
  });
  </script>
