<x-master>
    @section('content')
        <h2>Patient register</h2>
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Full name</label>
                <input type="email" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">CPF</label>
                <input type="password" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">RG</label>
                <input type="password" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Birth date</label>
                <input type="password" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Disease</label>
                <input type="password" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Phone number</label>
                <input type="password" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Street</label>
                <input type="password" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">City</label>
                <input type="password" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">District</label>
                <input type="password" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">State</label>
                <input type="password" class="form-control" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endsection
</x-master>
