  <footer id="contact" class="container-fluid">
        <div class="container">
            
            <div class="row content-ro">
                <div class="col-lg-4 col-md-12 footer-contact">
                    <h2>Contact Informatins</h2>
                    <div class="address-row">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="detail">
                            <p>Rajapur, Dhaka - Pabna Highway, Pabna 6600</p>
                        </div>
                    </div>
                    <div class="address-row">
                        <div class="icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="detail">
                            <p>donateblood@onlineblood.com <br> support@onlineblood.com</p>
                        </div>
                    </div>
                    <div class="address-row">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="detail">
                            <p>0731-64981</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 footer-links">

                </div>
                <div class="col-lg-4 col-md-12 footer-form">
                    <div class="form-card">
                        <div class="form-title">
                            <h4>Feedback</h4>
                        </div>
                        <div class="form-body">
                            <form class="form-horizontal" role="form" action="add_feedback" method="POST" >
                                @csrf
                            <input type="text" name="Name" placeholder="Enter Name" class="form-control">
                            <input type="text" name="Email" placeholder="Enter Email Address" class="form-control">
                            <input type="text" name="Feedback" placeholder="Your Feedback" class="form-control">
                            <button class="btn btn-sm btn-primary w-100">Send Feedback</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <p>Developed By Araf Ahmed | All right reserved.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 socila-link">
                        <ul>
                            <li><a><i class="fab fa-github"></i></a></li>
                            <li><a><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a><i class="fab fa-twitter"></i></a></li>
                            <li><a><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>