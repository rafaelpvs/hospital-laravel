<x-master>
    @section('content')
        <h2>Patient register</h2>

        <form action="{{ route('patients.store') }}" method="post" >
            @csrf
            <div class="form-group">
                <label for="name">Full name</label>
                <input required name="name" type="text" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input required name="cpf" type="text" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="rg">RG</label>
                <input required name="rg" type="text" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="birthdate">Birth date</label>
                <input required name="birthdate" type="date" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="disease">Disease</label>
                <input required name="disease" type="text" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label class="mr-sm-2" for="phone">Phone number</label>
                <div class="form-inline">
                    <input required name="ddd" type="text" class="form-control col-1  mr-3" placeholder="DDD">
                    <input required name="ddi" type="text" class="form-control col-1  mr-3" placeholder="DDI">
                    <input required name="number" type="text" class="form-control mr-3" placeholder="Number">
                </div>

            </div>
            <div class="form-group">
                <label for="street">Street</label>
                <input required name="street" type="text" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input required name="city" type="text" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="zipcode">Zipcode</label>
                <input  required name="zipcode" type="text" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="district">District</label>
                <input required name="district" type="text" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <input required name="state" type="text" class="form-control" placeholder="">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endsection
</x-master>
