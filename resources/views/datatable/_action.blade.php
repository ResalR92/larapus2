{!! Form::model($model,['url'=>$form_url,'method'=>'delete','class'=>'form-inline']) !!}
  <a href="{{ $edit_url }}" class="btn btn-xs btn-warning">Ubah</a> |
  {!! Form::submit('Hapus',['class'=>'btn btn-xs btn-danger']) !!}
{!! Form::close() !!}
