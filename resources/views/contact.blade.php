@extends("layout.template")

@section("title", "D2Studios")

@section("css")

@endsection

@section("js")

@endsection

@section("content")

    <h1>@lang("Contact")</h1>
    {{ var_dump($errors->any()) }}
    <form method="POST" action="">
        @csrf
        <div class="form-group">
            <label for="txtNombre">Nombre:</label>
            <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre" value="{{ old("txtNombre")}}"/>
            {!! $errors->first('txtNombre','<small class="text-danger">:message</small>') !!}
        </div>
        <div class="form-group">
          <label for="txtEmail">Email:</label>
        <input type="text" class="form-control" id="txtEmail" name="txtEmail" aria-describedby="txtEmailMessage" placeholder="Email" value="{{ old("txtEmail") }}">
          {!! $errors->first('txtEmail','<small class="text-danger">:message</small>') !!}
        </div>
        <div class="form-group">
          <label for="txtAsunto">Asunto</label>
          <input type="text" class="form-control" id="txtAsunto" name="txtAsunto" placeholder="Asunto" value="{{ old("txtAsunto") }}">
          {!! $errors->first('txtAsunto','<small class="text-danger">:message</small>') !!}
        </div>
        <div class="form-group">
          <label for="txtMensaje">Mensaje</label>
          <textarea class="form-control" id="txtMensaje" name="txtMensaje" rows="5">{{ old("txtMensaje") }}</textarea>
          {!! $errors->first('txtMensaje','<small class="text-danger">:message</small>') !!}
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
