@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $client->name }}</div>

                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Client Name</th>
                                <th>Contact Name</th>
                                <th>Contact Phone</th>
                                <th>Contact Email</th>
                                <th>Hosting</th>
                                <th>Dashboard</th>
                                <th>SSL</th>
                                <th>SSL Expire</th>
                                <th>WordPress</th>
                                <th>Cost</th>
                                <th>Due Date</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$client->name}}</td>
                                    <td>{{ $client->contact_name }}</td>
                                    <td>{{ $client->contact_phone }}</td>
                                    <td><a href="mailto:{{ $client->contact_email }}">{{ $client->contact_email }}</a></td>
                                    <td>@if($client->hosting === 'on') Yes @endif</td>
                                    <td>@if($client->dashboard === 'on') Yes @endif</td>
                                    <td>@if($client->ssl === 'on') Yes @endif</td>
                                    <td>{{ $client->sslexpire }}</td>
                                    <td>@if($client->wordpress === 'on') Yes @endif</td>
                                    <td>${{ $client->cost }}</td>
                                    <td>{{ $client->due_date }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
