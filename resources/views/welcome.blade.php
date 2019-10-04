@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">        
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="background-color:#0d98ba; color:white;"> <h3> Service Fees Chart: </h3> </div>
                
                <div class="card-body">    
                    <table border="1">
                        <tr>
                            <th style="background-color:#0d98ba; color:white"> Count </th>
                            <th style="background-color:#0d98ba; color:white"> Normal Clothes </th>
                            <th style="background-color:#0d98ba; color:white"> Large Clothes </th>
                            <th style="background-color:#0d98ba; color:white"> Extra Large Clothes </th>
                        </tr>
                        <tr>
                            <td> Under 5 Items </td>
                            <td> 1500 Kyats </td>
                            <td> 2000 Kyats </td>
                            <td> 3500 Kyats </td>
                        </tr>
                        <tr>
                            <td> Between 5-10 Items </td>
                            <td> 1000 Kyats </td>
                            <td> 1500 Kyats </td>
                            <td> 3000 Kyats </td>
                        </tr>
                        <tr>
                            <td> Over 10 Items </td>
                            <td> 500 Kyats</td>
                            <td> 1000 Kyats </td>
                            <td> 2000 Kyats </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
            <div class="card-header" style="background-color:#0d98ba; color:white;"> <h3> Start Services: </h3> </div>
                <div class="card-body">    
                    <a href="{{ route('items.create') }}">
                        <center> <img src="/images/services.png" width="300px;" height="300px;"> </center>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
