<div class="row">
    <div class="col-md-12blog-main">
        <h3 class="pb-4  text-center border-bottom">
            La empresa es: {{ setting('company' ) }}
        </h3>
        <h3 class="text-center">
            El año de Tabajo es: {{setting( 'ano')}}
        </h3>
        <h3 class="pb-4">
            <form class="form-horizontal" method="POST" action="{{ route('selectano') }}">
                {{ csrf_field() }}
                 Otro año: {!! Form::select('ano',config('options.ano'),null, ['class'=>'form-control-sm py-1']) !!}
                <button type="submit" class="btn btn-outline-success btn-sm"><i class="fa fa-save"></i> Guardar Seleccion</button>
            </form>
        </h3>
    </div>
    <a href="{{ route('home') }}" class="btn btn-outline-dark btn-lg btn-block">Aceptar</a>
</div>


