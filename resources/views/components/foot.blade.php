@foreach($footerJsFiles as $name => $jsPath)
<script src="{{url($jsPath)}}" type="text/javascript"></script>
@endforeach