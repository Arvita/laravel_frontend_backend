@extends('layouts.template')
@section('content')
    <div class="main-content">
      <div class="container">
        <!-- start: PAGE HEADER -->
        <div class="row">
            <div class="col-sm-12">
              <!-- start: PAGE TITLE & BREADCRUMB -->
              <ol class="breadcrumb">
                  <li><i class="clip-home-3"></i><a href="{{ url('/') }}">Home</a></li>
                  <li class="active">Setting </li>
                  <li class="active">User </li>
              </ol>
              <div class="page-header">
                <h1>User <small>Data Pengguna</small></h1>
              </div>
              <!-- end: PAGE TITLE & BREADCRUMB -->
            </div>
        </div>
        <!-- end: PAGE HEADER -->

        <div class="panel panel-default">
            <div class="panel-heading"><i class="fa fa-external-link-square"></i> List Data</div>
            <div class="panel-body">
                <table  width="100%" id="asset_table" class="table table-striped table-bordered table-hover table-full-width">
                      <thead>
                        <tr>
                          <th class="text-center">#</th>
                          <th>Name</th>
                          <th>Username</th>
                          <th>Update</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>

                      </tbody>
                    </table>
                    <div class="col-md-12 text-right">
                    <button type="button" data-url="{{ route('user.create') }}" class="ajax_modal btn btn-primary">Add New <i class="fa fa-plus"></i></button>
                    </div>
        </div>
      </div>
      </div>
    </div>
    <!-- untuk add / edit -->
    <div id="ajax-modal" class="modal fade bs-example-modal-static" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="50%" style="display: none;"></div>
    <!-- untuk konfirmasi hapus -->
    <div id="ajax-modal-popup" class="modal fade bs-example-modal-static" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="520" style="display: none;"></div>
@endsection
@push('content-css')
@endpush

@push('content-js')
<script>
var user;
var ajaxModal = $('#ajax-modal');
var ajaxModalPopup = $('#ajax-modal-popup');
$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});

$(document).ready(function() {
  user = $('#asset_table').dataTable({
              "processing": true,
              "serverSide": true,
              "ajax": {
                  "url": '{{ url('user/data') }}',
                  "type": "POST"
              },
              "aoColumns": [
                  { "mData": "row", "name": "row", "sWidth": "4%", "sClass": "text-center", "bSortable": false, "bSearchable": false},
                  { "mData": "name",  "nama": "row", "sWidth": "15%", "sClass": "", "bSortable": true, "bSearchable": true},
                  { "mData": "username", "name": "row", "sWidth": "15%", "sClass": "text-center", "bSortable": false, "bSearchable": false},
                  { "mData": "updated_at",  "nama": "row", "sWidth": "10%", "sClass": "", "bSortable": true, "bSearchable": true},
                  { "mData": "detail",  "sWidth": "10%", "sClass": "text-center", "bSortable": false, "bSearchable": false}
              ],
        });
        $('div.dataTables_filter input').unbind().bind('keyup', function(e) {
            if (e.keyCode == 13) {
               user.fnFilter( this.value );
           }else{
               if(this.value.length == 0) user.fnFilter('');
           }
        });
    });
    </script>
    @endpush
