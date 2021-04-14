<x-master>
    @section('content')
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Disease</th>
                <th scope="col">Interned</th>
            </tr>
            </thead>
            <tbody>
            @foreach($patients as $patient)
            <tr>
                <th><a href="">{{$patient->name}}</a></th>
                <td>{{$patient->age()}}</td>
                <td>{{$patient->disease}}</td>
                <td></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    @endsection
</x-master>
