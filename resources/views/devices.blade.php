@extends('layouts.main')
        @section('container')
            <h1>Devices</h1>
            @php
                $i = 1;
            @endphp
            <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                <th>No</th>
                <th>ID</th>
                <th>Device Name</th>
                <th>Min</th>
                <th>Max</th>
                <th>Current Value</th>
            </tr>
            </thead>
            <tbody>
                @foreach($devices as $device)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>
                            <a href="/devices/{{ $device["id"] }}">{{ $device["id"] }}</a>
                        </td>
                        <td>{{ $device["name"] }}</td>
                        <td>{{ $device["min_value"] }}</td>
                        <td>{{ $device["max_value"] }}</td>
                        <td>{{ $device["current_value"] }}</td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                @endforeach
            </tbody>
            </table>
        @endsection
