<x-master>
    @section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Medicament name</th>
            <th scope="col">Medicament band</th>
            <th scope="col">Application time</th>
        </tr>
        </thead>
        <tbody>
        @foreach($applications as $application)
        <tr>
            <td>{{ $application->medicament->name }}</td>
            <td>{{ $application->medicament->band }}</td>
            <td>{{ $application->application_time }}</td>
        </tr>
        @endforeach

        </tbody>
    </table>
        @endsection
</x-master>
