@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:#1cb8de; color:white;"> Register Your Payment Information: </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('banks.store') }}">
                        @csrf
                        CARD NO: <br>
                        <input id="cardno" type="text" class="form-control" name="cardno" value="{{ old('cardno') }}" placeholder="1234 1234 1234 1234">
                        <br>
                        CVV: <br>
                        <input id="cvv" type="text" class="form-control" name="cvv" value="{{ old('cvv') }}" placeholder="124">
                        <br>
                        EXP DATE: <br>
                        <input id="exp" type="text" class="form-control" name="exp" value="{{ old('exp') }}" placeholder="11/11">
                        <br>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Save Card') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
