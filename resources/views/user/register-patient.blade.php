<x-master>
    @section('content')
        <h2>Patient register</h2>
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Full name</label>
                <input name="name" type="text" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">CPF</label>
                <input name="cpf" type="text" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">RG</label>
                <input name="rg" type="text" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Birth date</label>
                <input name="birthdate" type="text" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Disease</label>
                <input name="disease" type="text" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Phone number</label>
                <input name="phone" type="text" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Street</label>
                <input name="street" type="text" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">City</label>
                <input name="city" type="text" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Zipcode</label>
                <input name="zipcode" type="text" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">State</label>
                <input name="state" type="text" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">State</label>
                <input type="password" class="form-control" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endsection
</x-master>
