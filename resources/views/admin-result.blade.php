<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    </head>
    <body class="antialiased">
        @include('layouts.app')

            <div class="container-xxl">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Police Number</th>
                            <th>Entry Time</th>
                            <th>Exit Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($parkingRecord as $record)
                            <tr>
                                <td>{{ $record->police_number }}</td>
                                <td>{{ $record->entry_time }}</td>
                                <td>{{ $record->exit_time }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">No records found for the specified date range.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
    </div>
    </body>
</html>


