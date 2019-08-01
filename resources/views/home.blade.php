@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        You are logged in! <br/> <br/>
                    <form method="POST" action="{{ url('sendSms') }}" id="first" name="first_form" >
                        {{csrf_field()}}
                        Number:
                        <input type="text" name="recipient_number" class="form-control mb-2" placeholder="(+380_________)">
                        Text:
                        <input type="text" name="body" class="form-control mb-2" placeholder="text..."><br/>
                        <input type="submit" value="Send sms!" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
