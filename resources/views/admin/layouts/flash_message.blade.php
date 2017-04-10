@if (Session::has('success'))
  <script type="text/javascript">
    $(document).ready(function(){
        $.Notify({
            caption: 'Success',
            content: '{{ Session::get('success')}}',
            timeout: 5000,
            type: 'success'
        });
    });
  </script>
@elseif (Session::has('success_edit'))
  <script type="text/javascript">
    $(document).ready(function(){
        $.Notify({
            caption: 'Edit',
            content: '{{ Session::get('success_edit')}}',
            timeout: 5000,
            type: 'success'
        });
    });
  </script>
@elseif (Session::has('delete'))
  <script type="text/javascript">
    $(document).ready(function(){
        $.Notify({
            caption: 'Delete',
            content: '{{ Session::get('delete')}}',
            timeout: 5000,
            type: 'alert'
        });
    });
  </script>
@endif

{{-- @if ($errors->any())
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert">×</button>
	Please check the form below for errors
</div>
@endif --}}
