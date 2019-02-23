@include('layouts/header')
    <div class="container">
        <div class="row mt-5">
            
            <div class="col-4"></div>
            <div class="col-4">
                <h2 class="ml-5 mb-4" >Login User</h2>
                <div class="card" >
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <a href="" id="idRecoveryPassword" >Olvidaste tu contraseña, presiona aquí</a>
                            </div>
                            <button type="submit" class="btn btn-secondary btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('layouts/footer')
