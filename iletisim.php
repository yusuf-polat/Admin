<?php include "header.php"  ?>
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
        <div class="col-md-8 text-center">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h3 class="mb-4">İletişime Geç</h3>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="İsminiz">
                        <label for="floatingPassword">İsminiz</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <label for="floatingSelect">Works with selects</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px;"></textarea>
                        <label for="floatingTextarea">Şikayetiniz</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="submit" class="btn btn-primary w-100 m-2" value="Gönder">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blank End -->


<?php include "footer.php"  ?>