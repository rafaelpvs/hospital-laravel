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
            <hr>
            <div class="row">
                <div class="col-sm-3">

                    <h6 class="mb-0">Current interned</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    @if($patient->isInterned() == true)

                        <form method="POST" action="{{ route('internments.update', $patient->currentInternment()->id) }}">
                            @csrf
                            <input name="_method" type="hidden" value="PATCH">

                            <input type="submit" class="btn btn-success" value="Discharge">
                        </form>
                    @else
                        <form method="POST" action="{{ route('internments.store') }}">
                            @csrf
                            <input name="_method" type="hidden" value="POST">
                            <input name="patientid" type="hidden" value="{{$patient->id}}">
                            <input name="disease" class="form-control mb-3" type="text">
                            <input type="submit" class="btn btn-danger" value="New disease">
                        </form>
                    @endif
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
                    <h6 class="mb-0">District</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    {{ $patient->address->district }}
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">City</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    {{ $patient->address->city }}
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Zipcode</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    {{ $patient->address->zipcode }}
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">State</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    {{ $patient->address->state }}
                </div>
            </div>

        </div>
    </div>



    <div class="row">
        <div class="col-sm-12 text-center">
            <input class="btn btn-primary btn-md" value="Edit">
        </div>
    </div>

        <div class="card mb-3">



            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <h5 class="mb-0">Phones</h5>
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


            </div>
        </div>

    @endsection

</x-master>
