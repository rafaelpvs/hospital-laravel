<x-master>
    @section('content')
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Disease</th>
                <th scope="col">Medicaments</th>
                <th scope="col">Interned</th>
            </tr>
            </thead>
            <tbody>
            @foreach($internments as $internment)
                    <tr>
                        <th><a href="{{ route('patients.show',$internment->patient->id) }}">{{$internment->patient->name}}</a></th>
                        <td>{{$internment->patient->age()}}</td>
                        <td>{{$internment->disease}}</td>
                        <td>
                            <a href="{{ route('internment.medicaments', $internment->id) }}" class="btn btn-info">Medicament Applications</a>
                        </td>
                        <td>

                            @if($internment->departure_time == null)

                                <form method="POST" action="{{ route('internments.update', $internment->id) }}">
                                    @csrf
                                    <input name="_method" type="hidden" value="PATCH">
                                    <input type="submit" class="btn btn-success" value="Discharge">
                                </form>
                            @else
                                <form method="POST" action="{{ route('internments.update', $internment->id) }}">
                                    @csrf
                                    <input name="_method" type="hidden" value="PATCH">
                                    <input type="submit" class="btn btn-danger" value="Intern">
                                </form>
                            @endif

                        </td>
                    </tr>
            @endforeach
            </tbody>
        </table>
    @endsection
</x-master>
