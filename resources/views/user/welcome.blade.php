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
                @if($patient->currentInternment())
            <tr>
                <th><a href="">{{$patient->name}}</a></th>
                <td>{{$patient->age()}}</td>
                <td>{{$patient->disease}}</td>
            </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    @endsection
</x-master>
