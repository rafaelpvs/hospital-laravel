<x-master>
    @section('content')
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Disease</th>
            </tr>
            </thead>
            <tbody>
            @foreach($patients as $patient)
                @if($patient->isInterned())
            <tr>
                <th><a href="{{ route('patients.show', $patient->id) }}">{{$patient->name}}</a></th>
                <td>{{$patient->age()}}</td>
                <td>{{$patient->currentInternment()->disease}}</td>
            </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    @endsection
</x-master>
