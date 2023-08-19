<footer style="background: linear-gradient(#fbf1e4, white, #fbf1e4);">
    <div class="container py-5 d-flex flex-column justify-content-center mx-auto text-center">
        <div class="pb-1">
            <img src="images/Capture-removebg-preview.png" class="img-fluid">
        </div>
        <div class="pb-1">
            <ul class="list-inline mb-0">
          <li class="list-inline-item fw-bold mx-md-4">
            <a href="#" class="text-decoration-none textColor">
              Our Products
            </a>
          </li>
          <li class="list-inline-item fw-bold mx-md-4">
            <a href="#" class="text-decoration-none textColor">
              Our Process
            </a>
          </li>
          <li class="list-inline-item fw-bold mx-md-4">
            <a href="#" class="text-decoration-none textColor">
              Our Story
            </a>
          </li>
            <li class="list-inline-item fw-bold mx-md-4">
            <a href="#" class="text-decoration-none textColor">
              Sustainability
            </a>
          </li>
            <li class="list-inline-item fw-bold mx-md-4">
            <a href="#" class="text-decoration-none textColor">
              FAQ
            </a>
          </li>
        </ul>
        </div>

        <div class="pb-1">
            <a href="#" class="text-decoration-none textColor">No: 123, Abc Avenue, Kandy, Sri Lanka</a>
        </div>

        <div class="pb-1">
            <ul class="list-inline mb-0">
                <li class="list-inline-item mx-md-1">
            <a href="tel:+9477112345" class="text-decoration-none textColor">
              +94 771 123 45
            </a>
          </li>
          <li class="list-inline-item mx-md-1">
           <span class="textColor">/</span>
          </li>
          <li class="list-inline-item mx-md-1">
            <a href="tel:+9477167891" class="text-decoration-none textColor">
             +94 771 678 91
            </a>
          </li>
            </ul>
        </div>

        <div class="pb-1">
            <a href="mailto:ithinkithul@gmail.com" class="text-decoration-none textColor">ithinkithul@gmail.com</a>
        </div>

        <div class="pb-1">
            <ul class="list-inline">
                <li class="list-inline-item mx-md-2">
            <a href="#" class="text-decoration-none textColor">
              <img src="images/7ff98f91-cba6-4a5f-bfb3-1c6d6ae175ef.png" height="30" width="30" class="img-fluid">
            </a>
          </li>
          <li class="list-inline-item mx-md-2">
           <a href="#" class="text-decoration-none textColor">
              <img src="images/9c824e99-b539-4025-934f-5ae24cec9922.png" height="30" width="30" class="img-fluid">
            </a>
          </li>
          <li class="list-inline-item mx-md-2">
            <a href="#" class="text-decoration-none textColor">
             <img src="images/e1d8b449-929d-4794-a069-31e4443f303a.png" height="30" width="30" class="img-fluid">
            </a>
          </li>
            </ul>
        </div>

        <div>
            <div class="row"> 
                <div class="col-lg-4 d-flex justify-content-start">
                    <small class="textColor">All Right Reserved @ ithinKithul2021</small>
                </div>
                <div class="col-lg-4 d-flex justify-content-center">
                     <ul class="list-inline mb-0">
                <li class="list-inline-item mx-md-2">
            <a href="#" class="textColor text-uppercase">
              <small class="fw-bold textColor">terms & conditions</small>
            </a>
          </li>
          <li class="list-inline-item mx-md-2">
           <a href="#" class="textColor text-uppercase">
             <small class="fw-bold textColor">privacypolicy</small>
            </a>
          </li>
            </ul>
                </div>
                <div class="col-lg-4 d-flex justify-content-end">
                    <a href="#" class="text-decoration-none">
                        <img src="images/side-bar-logo.png" class="img-fluid object-fit-cover" height="40" width="40">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<script >
        $(document).ready(function(){
            $('.count').prop('disabled', true);
            $(document).on('click','.plus',function(){
                $('.count').val(parseInt($('.count').val()) + 1 );
            });
            $(document).on('click','.minus',function(){
                $('.count').val(parseInt($('.count').val()) - 1 );
                    if ($('.count').val() == 0) {
                        $('.count').val(1);
                    }
                });
        });
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>