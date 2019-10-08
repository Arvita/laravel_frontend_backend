<form id="deleteMenuForm" class="form-horizontal" role="form" method="POST" action="#">
    {!! csrf_field() !!}
    {!! isset($user)? method_field('DELETE') : '' !!}
    {!! Form::hidden('id', $user->id) !!}

<div class="modal-header stack0">
	 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
   <h3 class="text-center">Konfirmasi Hapus User</h3>
</div>
<div class="modal-body">
  <div class="alert alert-warning fade in nomargin top">
    <h4>Konfirmasi !!!</h4>
     <p>Apakah Anda yakin menghapus user seperti di bawah ini ?</p>
     <p><strong><em>"{{ $user->name }} "</em></strong></p>
 </div>
</div>
<div class="modal-footer">
  <button data-dismiss="modal" class="btn btn-white" type="button">Batal</button>
  <button class="btn btn-info" id="deleteMenuButton" type="submit">Hapus</button>
</div>
</form>

<script>
  $(document).ready(function(){
    $('#deleteMenuButton').click(function(e){
      e.preventDefault();
    	blockTab(ajaxModalPopup);
		$.post( "{{ url("/user/$user->id") }}",
			    $("#deleteMenuForm").serialize(),
			    function( data ) {
                    var msg;
                    $('.alert.alert-success, .alert.alert-danger').remove();
                        unblockTab(ajaxModalPopup);
                    if(data.stat){
                        msg = '<div class="alert alert-success"><i class="fa fa-check-circle"></i><strong> Berhasil !</strong> '+data.msg+'</div>';
                        $('.top').before(msg);

                        user.fnReloadAjax();
                        window.setTimeout(function () {
                            ajaxModalPopup.modal('hide');
                        }, 1500);
                    }else{
                        msg = '<div class="alert alert-danger"><i class="fa fa-check-circle"></i><strong> Kesalahan !</strong> '+data.msg+'</div>';
                        $('.top').before(msg);
                    }
			      },
		        "json");
		});
  });
</script>
