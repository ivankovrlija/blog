@if(count($errors))
  <div class="alert alert-danger" style="position:absolute; top:100%;color:red;">
      <ul>
        @foreach($errors->all() as $error)
        <li style="clear:left;">{{ $error }}</li>
        @endforeach
      </ul>
  </div>
 @endif
