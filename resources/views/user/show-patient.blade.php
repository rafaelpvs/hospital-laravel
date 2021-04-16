<x-master>
    @section('content')

    <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Full Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    {{ $patient->name }}
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Idade</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    {{ $patient->age() }}
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Cpf</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    {{$patient->cpf}}
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Rg</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    {{$patient->rg}}
                </div>
            </div>

        </div>
    </div>
    <div class="card mb-3">



        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <h5 class="mb-0">Address</h5>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0 bold">Street</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    {{ $patient->address->street }}
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Idade</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    {{ $patient->age() }}
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Cpf</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    {{$patient->cpf}}
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Rg</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    {{$patient->rg}}
                </div>
            </div>

        </div>
    </div>


    </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <button class="btn btn-primary btn-md">Edit</button>
                <button class="btn btn-danger btn-md">Delete</button>
            </div>
        </div>


    @endsection

</x-master>
