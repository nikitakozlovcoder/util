@extends('layouts.app')

@section('content')
admin!
<textarea name="content" id="editor"></textarea>
<script src="{{ asset("ckeditor/ckeditor.js")}}"></script>
<script type="text/javascript">
  CKEDITOR.replace('editor');
</script>
@endsection
