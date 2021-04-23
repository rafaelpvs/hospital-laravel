<x-master>
    @section('content')
        <h2>Patient edit</h2>

        <form action="{{ route('patients.update', $patient->id) }}" method="POST" >
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name">Full name</label>
                <input required name="name" type="text" class="form-control" placeholder="" value="{{ $patient->name }}">
            </div>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input required name="cpf" type="text" class="form-control" placeholder="" value="{{ $patient->cpf }}">
            </div>
            <div class="form-group">
                <label for="rg">RG</label>
                <input required name="rg" type="text" class="form-control" placeholder="" value="{{ $patient->rg }}">
            </div>
            <div class="form-group">
                <label for="birthdate">Birth date</label>
                <input required name="birthdate" type="date" class="form-control" placeholder="" value="{{ $patient->birthdate }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    @endsection
</x-master>
