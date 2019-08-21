@extends('layouts.app')

@section('content')
<div class="container">

    <div class="modal fade bdmodal-sm" id="Modalsmal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                  @include('setting._confirm')
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        $('#Modalsmal').modal('show');
    </script>
@endsection
