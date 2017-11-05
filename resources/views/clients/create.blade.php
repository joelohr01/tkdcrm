@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Client</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <form action="{{ url('clients') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name">Client Name</label>
                                    <input class="form-control" type="text" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="contact_name">Contact Name</label>
                                    <input class="form-control" type="text" name="contact_name">
                                </div>
                                <div class="form-group">
                                    <label for="contact_phone">Contact Phone Number</label>
                                    <input class="form-control" type="phone" name="contact_phone">
                                </div>
                                <div class="form-group">
                                    <label for="contact_email">Contact Email</label>
                                    <input class="form-control" type="email" name="contact_email">
                                </div>
                                <div class="form-group">
                                    <label for="hosting">Are they hosting with us?</label>
                                    <input class="form-control" type="checkbox" name="hosting">
                                </div>
                                <div class="form-group">
                                    <label for="dashboard">Are they on the dashboard?</label>
                                    <input class="form-control" type="checkbox" name="dashboard">
                                </div>
                                <div class="form-group">
                                    <label for="ssl">Do they have an SSL?</label>
                                    <input class="form-control" type="checkbox" name="ssl">
                                </div>
                                <div class="form-group">
                                    <label for="sslexpire">When does the SSL expire?</label>
                                    <input type="date" name="sslexpire" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="wordpress">Is it a WordPress site?</label>
                                    <input class="form-control" type="checkbox" name="wordpress">
                                </div>
                                <div class="form-group">
                                    <label for="cost">What are they being billed?</label>
                                    <input class="form-control" type="text" name="cost">
                                </div>
                                <div class="form-group">
                                    <label for="due_date">Billing Due Date</label>
                                    <input class="form-control" type="date" name="due_date">
                                </div>
                                <input type="submit" class="btn btn-primary">
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
