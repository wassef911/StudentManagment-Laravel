  <script type="text/javascript">
        $(window).on('load', function() {
            $('#staticBackdrop').modal('show');
        });

    </script>
    <button type="button" style="opacity : 0;cursor:default;" class="btn btn-primary" data-bs-toggle="modal"
        data-bs-target="#staticBackdrop">
    </button>
    <div class="modal fade bg-dark" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">bienvenue</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Login</span>
                        <input type="text" class="form-control" placeholder="name@domain.com" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Password</span>
                        <input type="password" class="form-control" placeholder="*******" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Login</button>
                </div>
            </div>
        </div>
    </div>