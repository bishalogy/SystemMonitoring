<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<style>
.pricing-divider {
    border-radius: 20px;
    background: #C64545;
    padding: 1em 0 4em;
    position: relative;
}

.blue .pricing-divider {
    background: #2D5772;
}

.green .pricing-divider {
    background: #1AA85C;
}

.red b {
    color: #C64545
}

.blue b {
    color: #2D5772
}

.green b {
    color: #1AA85C
}

.pricing-divider-img {
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 100%;
    height: 80px;
}

.deco-layer {
    -webkit-transition: -webkit-transform 0.5s;
    transition: transform 0.5s;
}

.btn-custom {
    background: #C64545;
    color: #fff;
    border-radius: 20px
}

.img-float {
    width: 50px;
    position: absolute;
    top: -3.5rem;
    right: 1rem
}

.princing-item {
    transition: all 150ms ease-out;
}

.princing-item:hover {
    transform: scale(1.05);
}

.princing-item:hover .deco-layer--1 {
    -webkit-transform: translate3d(15px, 0, 0);
    transform: translate3d(15px, 0, 0);
}

.princing-item:hover .deco-layer--2 {
    -webkit-transform: translate3d(-15px, 0, 0);
    transform: translate3d(-15px, 0, 0);
}




.modal-confirm {
    color: #636363;
    width: 325px;
}

.modal-confirm .modal-content {
    padding: 20px;
    border-radius: 5px;
    border: none;
}

.modal-confirm .modal-header {
    border-bottom: none;
    position: relative;
}

.modal-confirm h4 {
    text-align: center;
    font-size: 26px;
    margin-left: 300px;
    margin: 30px 0 -15px;
}

.modal-confirm .form-control,
.modal-confirm .btn {
    min-height: 40px;
    border-radius: 3px;
}

.modal-confirm .close {
    position: absolute;
    top: -5px;
    right: -5px;
}

.modal-confirm .modal-footer {
    border: none;
    text-align: center;
    border-radius: 5px;
    font-size: 13px;
}

.modal-confirm .icon-box {
    color: #fff;
    position: absolute;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: -70px;
    width: 95px;
    height: 95px;
    border-radius: 50%;
    z-index: 9;
    background: #82ce34;
    padding: 15px;
    text-align: center;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}

.modal-confirm .icon-box i {
    font-size: 58px;
    position: relative;
    top: 3px;
}

.modal-confirm.modal-dialog {
    margin-top: 80px;
}

.modal-confirm .btn {
    color: #fff;
    border-radius: 4px;
    background: #82ce34;
    text-decoration: none;
    transition: all 0.4s;
    line-height: normal;
    border: none;
}

.modal-confirm .btn:hover,
.modal-confirm .btn:focus {
    background: #6fb32b;
    outline: none;
}

.trigger-btn {
    display: inline-block;
    margin: 100px auto;
}

#container {
    width: 1000px;
    height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    position: relative;
}
</style>
<div class="container-flex body_text_color">
    <div class="home w-100  text-center main_body_support " style="height:110vh">
        <div class="container pt-5">
            <h1>Want to Improve Your Results?
            </h1>
            <p>Here are a few steps you can take:</p>
        </div>
        <div class="d-flex text-dark flex-row justify-content-around align-items-around h-100 w-100 flex-wrap p-5">

            <div class="card m-1 " style="width: 15rem;">

                <div class="card-body text-center d-flex align-items-between flex-column justify-content-around">
                    <i class="fas fa-tachometer-alt fa-3x p-1"></i>
                    <h5 class="card-title">Improve Speeds</h5>
                    <p class="card-text">Explore steps you can take to improve your Internet speed.</p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#spped">
                        Get Tips
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="spped" tabindex="-1" role="dialog" aria-labelledby="sppedTitle"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="speedTitle"><i class="fas fa-tachometer-alt  pb-2"></i>
                                        <b>Internet Speed Boost</b>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="height:500px;overflow:hidden;;overflow-y:scroll;">
                                    <div class="list-group">
                                        <button type="button"
                                            class="list-group-item list-group-item-action text-uppercase active">
                                            Tips to improve performance
                                        </button>
                                        <button type="button" class="list-group-item list-group-item-action ">Test a
                                            different
                                            modem/router</button>
                                        <button type="button" class="list-group-item list-group-item-action">Scan for
                                            viruses</button>
                                        <button type="button" class="list-group-item list-group-item-action">Check for
                                            on-system
                                            interference</button>
                                        <button type="button" class="list-group-item list-group-item-action">Check your
                                            filters</button>
                                        <button type="button" class="list-group-item list-group-item-action">Try
                                            getting rid of your cordless phone</button>
                                        <button type="button" class="list-group-item list-group-item-action">Check for
                                            external
                                            interference</button>
                                        <button type="button" class="list-group-item list-group-item-action">Check for
                                            Foxtel or
                                            other types of TV</button>
                                        <button type="button" class="list-group-item list-group-item-action">Shorten and
                                            replace
                                            cables</button>
                                        <button type="button" class="list-group-item list-group-item-action">Update
                                            firmware and
                                            software regularly</button>
                                        <button type="button" class="list-group-item list-group-item-action">Find your
                                            router/ISP’s best settings</button>
                                        <button type="button" class="list-group-item list-group-item-action">Check the
                                            cabling and
                                            do a line test</button>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card m-1" style="width: 15rem;">

                <div class="card-body text-center d-flex align-items-between flex-column justify-content-around">
                    <i class="fas fa-trash fa-3x p-1"></i>
                    <h5 class="card-title">Disk Clean</h5>
                    <p class="card-text">Free up unnecessary spaces. Delete temporary files, unused programs.
                    </p>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" onclick="cleaningfunc()"
                        data-target="#clean">
                        Clean up
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="clean" tabindex="-1" role="dialog" aria-labelledby="cleanTitle"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">

                                <div class="modal-body">
                                    <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet'
                                        type='text/css'>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card m-1" style="width: 15rem;">

                <div class="card-body text-center d-flex align-items-between flex-column justify-content-around ">
                    <i class="fas fa-recycle fa-3x p-1"></i>
                    <h5 class="card-title">Troubleshoot</h5>
                    <p class="card-text">See if there are any outages and restart your system to become problem
                        free.</p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#troublehot">
                        Check Outages
                    </button>

                    <!-- Modal -->
                    <div id="troublehot" class="modal fade">
                        <div class="modal-dialog modal-confirm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="icon-box">
                                        <i class="fas fa-check fa-3x"></i>
                                    </div>
                                    <h4 class="modal-title ml-100 w-100 ">Awesome!</h4>
                                </div>
                                <div class="modal-body">
                                    <p class="text-center">Your system is working normaly. All the process is
                                        working safely with no deadlock !!.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card m-1" style="width: 15rem;">

                <div class="card-body text-center d-flex align-items-between flex-column justify-content-around">
                    <i class="fab fa-hire-a-helper fa-3x p-1"></i>
                    <h5 class="card-title">Help Online</h5>
                    <p class="card-text">We are 24 hours online. <br>
                        Toll-free : xx-xxxxxxxxxx <br>
                        <p>scan_me@scme.com</p>
                    </p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#thirdone">
                        Contact-us
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="thirdone" tabindex="-1" role="dialog" aria-labelledby="thirdoneTitle"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Contact Us</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">

                                        <div class="row justify-content-center">
                                            <div class="col-12 ">


                                                <!--Form with header-->

                                                <form id="myForm" method="post">
                                                    <div class="card border-primary rounded-0">
                                                        <div class="card-header p-0">
                                                            <div class="bg-info text-white text-center py-2">
                                                                <h3><i class="fa fa-envelope"></i> Send your
                                                                    Queries</h3>
                                                                <p class="m-0">Feel free to Ask</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-body p-3">

                                                            <!--Body-->
                                                            <div class="form-group">
                                                                <div class="input-group mb-2">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text"><i
                                                                                class="fa fa-user text-info"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="nombre"
                                                                        name="nombre" placeholder="@username" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="input-group mb-2">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text"><i
                                                                                class="fa fa-envelope text-info"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="email" class="form-control" id="nombre"
                                                                        name="email" placeholder="example@gmail.com"
                                                                        required>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="input-group mb-2">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text"><i
                                                                                class="fa fa-comment text-info"></i>
                                                                        </div>
                                                                    </div>
                                                                    <textarea class="form-control"
                                                                        placeholder="Write your message"
                                                                        required></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="text-center">
                                                                <input type="submit" value="Send"
                                                                    class="btn btn-info btn-block rounded-0 py-2">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </form>
                                                <!--Form with header-->


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" onclick="clearthis()">Clear</button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-100 mt-5">
                <div class="alert alert-success p-5 w-100" style="box-shadow:0px 5px 10px 1px black">
                    <h1>All-in-One IT systems Monitoring!</h1>
                    <h3>Affordable. Powerful. Get Started in Minutes.</h3>
                    <button class="btn btn-success mt-5 w-50 text-bold" style="box-shadow:0px 2px 10px 1px black"
                        data-toggle="modal" data-target="#exampleModalLong">
                        Build your custom plan
                    </button>
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="background:rgba(0,0,0,0.8);">
                        <div class="modal-dialog " role="document" style="margin:50px;">
                            <div class="modal-content" style="width:80vw;background:transparent;margin-left:100px">
                                <div class="modal-header p-0 m-0" style="border:0px solid red">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span class="display-4 text-light" aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body pt-0" style="border:0px solid rgba(0,0,0,0.5)">
                                    <div class="container-fluid bg-gradient p-5">
                                        <div class="row m-auto text-center">

                                            <div class="col-4  princing-item red">
                                                <div class="pricing-divider ">
                                                    <h3 class="text-light">Free</h3>
                                                    <h4 class="my-0  text-light font-weight-normal mb-0 "><span
                                                            class="h3">Rs.</span> 0 <span class="h5">/mo</span>
                                                    </h4>
                                                    <svg class='pricing-divider-img' enable-background='new 0 0 300 100'
                                                        height='100px' id='Layer_1' preserveAspectRatio='none'
                                                        version='1.1' viewBox='0 0 300 100' width='300px' x='0px'
                                                        xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink'
                                                        xmlns='http://www.w3.org/2000/svg' y='0px'>
                                                        <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
                                c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF'
                                                            opacity='0.6'></path>
                                                        <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
                                c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF'
                                                            opacity='0.6'></path>
                                                        <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
                                H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                                                        <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
                                c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z'
                                                            fill='#FFFFFF'></path>
                                                    </svg>
                                                </div>
                                                <div class="card-body bg-white mt-0 shadow" style="border-radius:5px;">
                                                    <ul class="list-unstyled  position-relative p-3">
                                                        <li><b>1</b> users included</li>
                                                        <li><b>Limited</b> Data protection</li>
                                                        <li><b>Scan </b>4 Selected Features</li>
                                                        <li><b>Help center access</b></li>
                                                    </ul>
                                                    <button type="button"
                                                        class="btn font-weight-bold btn-block btn-danger ">Buy
                                                        Now</button>
                                                </div>
                                            </div>




                                            <div class="col-4 princing-item blue">
                                                <div class="pricing-divider ">
                                                    <h3 class="text-light">Basic</h3>
                                                    <h4 class="my-0  text-light font-weight-normal mb-0"><span
                                                            class="h3">Rs.</span> 500 <span class="h5">/mo</span></h4>
                                                    <svg class='pricing-divider-img' enable-background='new 0 0 300 100'
                                                        height='100px' id='Layer_1' preserveAspectRatio='none'
                                                        version='1.1' viewBox='0 0 300 100' width='300px' x='0px'
                                                        xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink'
                                                        xmlns='http://www.w3.org/2000/svg' y='0px'>
                                                        <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
                                c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF'
                                                            opacity='0.6'></path>
                                                        <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
                                c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF'
                                                            opacity='0.6'></path>
                                                        <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
                                H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                                                        <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
                                c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z'
                                                            fill='#FFFFFF'></path>
                                                    </svg>
                                                </div>

                                                <div class="card-body bg-white mt-0 shadow" style="border-radius:5px;">
                                                    <ul class="list-unstyled  position-relative p-3">
                                                        <li><b>5 </b> users included</li>
                                                        <li><b>Unlimited</b> Data Protection</li>
                                                        <li><b>Scan </b> Upto 6 Features</li>
                                                        <li><b>Help center access</b></li>
                                                    </ul>
                                                    <button type="button"
                                                        class="btn font-weight-bold btn-block  btn-danger ">Buy
                                                        Now</button>
                                                </div>
                                            </div>






                                            <div class="col-4 princing-item green">
                                                <div class="pricing-divider ">
                                                    <h3 class="text-light">Pro</h3>
                                                    <h4 class="my-0 text-light font-weight-normal mb-0"><span
                                                            class="h3">Rs.</span> 1,000 <span class="h5">/mo</span></h4>
                                                    <svg class='pricing-divider-img' enable-background='new 0 0 300 100'
                                                        height='100px' id='Layer_1' preserveAspectRatio='none'
                                                        version='1.1' viewBox='0 0 300 100' width='300px' x='0px'
                                                        xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink'
                                                        xmlns='http://www.w3.org/2000/svg' y='0px'>
                                                        <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
                                c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF'
                                                            opacity='0.6'></path>
                                                        <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
                                c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF'
                                                            opacity='0.6'></path>
                                                        <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
                                H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                                                        <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
                                c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z'
                                                            fill='#FFFFFF'></path>
                                                    </svg>
                                                </div>

                                                <div class="card-body bg-white mt-0 shadow" style="border-radius:5px;">
                                                    <ul class="list-unstyled  position-relative p-3">
                                                        <li><b>Unlimited</b> users included</li>
                                                        <li><b>Best</b> Virus firewall</li>
                                                        <li><b>Scan</b> Unlimited Features</li>
                                                        <li><b>Help center access</b></li>
                                                    </ul>
                                                    <button type="button"
                                                        class="btn font-weight-bold btn-block btn-danger ">Buy
                                                        Now</button>
                                                </div>
                                            </div>






                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


</div>
<script>
function clearthis() {
    document.getElementById("myForm").reset();
}


function cleaningfunc() {
    cleaning();

}

function cleaning() {
    document.body.style.background = '#fff';

    var c = document.createElement('canvas');
    c.id = "cleaningprocess";
    c.style.position = 'fixed';
    c.style.width = '100%';
    c.style.height = '100%';
    c.style.left = '0';
    c.style.top = '0';
    c.width = window.innerWidth;
    c.height = window.innerHeight;
    var root = document.body.createShadowRoot();
    root.appendChild(c);
    setTimeout(function() {
        // alert()
        c.style.display = "none";
        alert("Cleaned, Successfully!!")
        location.reload("http://localhost/");

    }, 7000)

    var canvas = c.getContext('2d');

    var tick = 0,
        factor = 2.3,
        cMap = [],
        readings = [],
        randomTexts = ['Rebooting insanity core',
            'Cleaning Cache files',
            'Cleaning Obsolete files',
            'Deleting Packages',
            'Cleaning Residuals files',
            'Cleaning Memory',
            'Doing spring cleaning'
        ],
        currentText = [],
        centerX = 0,
        centerY = 0;

    function render() {
        var halfW = window.innerWidth / 2,
            halfH = window.innerHeight / 2,
            iH = window.innerHeight / 10,
            iW = window.innerWidth / 10;
        tick += 1;
        canvas.clearRect(0, 0, window.innerWidth, window.innerHeight);

        if (tick % 15 === 0) {
            currentText.push(randomTexts[Math.round(Math.random() * (randomTexts.length - 1))]);
        }

        for (var x = 0; x < 10; x += 1) {

            for (var y = 0; y < 10; y += 1) {
                var color = null,
                    id = y * 10 + x;
                if (typeof cMap[id] === 'undefined') {
                    color = Math.round(Math.random() * 50);
                    cMap.push(color);
                } else {
                    if (Math.random() > 0.999) {
                        color = Math.round(Math.random() * 50);
                        cMap[id] = color;
                    } else {
                        color = cMap[y * 10 + x];
                    }
                }
                canvas.fillStyle = 'rgba(' + color + ',' + color + ',' + color + ', .3)';
                canvas.fillRect(x * iW, y * iH, iW, iH);
            }
        }

        for (var i = 0; i < readings.length; i += 1) {
            canvas.fillStyle = 'rgba(255,255,255,.3)';
            canvas.fillRect(15 * i, window.innerHeight / 2 - readings[i], 6, readings[i] * 2);
        }

        if (readings.length > window.innerWidth / 15) {
            readings = [];
        }

        if (tick % 5 === 0)
            readings.push(Math.random() * 120);

        drawCircle(1 * factor, 15 * factor, 'rgba(192, 57, 43,1.0)', 180, tick * 2.5);
        drawCircle(20 * factor, 15 * factor, '#fff', 180, tick * 1.5);
        drawCircle(40 * factor, 15 * factor, 'rgba(44, 62, 80,1.0)', 180, tick * 1);
        drawCircle(73 * factor, 15 * factor, 'rgba(44, 62, 80,1.0)', 290, 30 + -(tick * 1.6));
        drawCircle(48 * factor, 15 * factor, 'rgba(44, 62, 80,1.0)', 180, -(tick * 1.3));
        drawCircle(68 * factor, 15 * factor, '#fff', 250, tick * 1.3);
        drawCircle(44 * factor, 5 * factor, '#fff', 100, tick * 2);
        drawCircle(62 * factor, 10 * factor, '#fff', 290, 30 + (tick * 1.8));
        drawCircle(68 * factor, 5 * factor, '#fff', 320, 30 + tick * 1.3);

        canvas.font = '42px Orbitron';
        canvas.fillStyle = '#fff';
        var txt = canvas.measureText('Cleaning your system!');
        canvas.fillText('Cleaning your system!', halfW - (txt.width / 2), halfH + 230);

        canvas.font = '13px Orbitron';
        canvas.fillStyle = 'rgba(44, 62, 80,1.0)';
        for (var i = 0; i < currentText.length; i += 1) {
            var txt = canvas.measureText(currentText[i]);
            canvas.fillText(currentText[i], window.innerWidth - txt.width - 10, 25 + (i * 25));
        }
        if (currentText.length > window.innerHeight / 25 / 2) {
            currentText = [];
        }

        requestAnimationFrame(render);
    };

    function drawCircle(radius, width, color, c, angle) {
        var halfW = window.innerWidth / 2,
            halfH = window.innerHeight / 2,
            iH = window.innerHeight / 10,
            iW = window.innerWidth / 10;

        var offset = Math.PI * angle / 180
        canvas.beginPath();
        canvas.strokeStyle = color;
        canvas.lineWidth = width;
        canvas.arc(halfW, halfH, radius, offset, offset + Math.PI / 180 * c, true);
        canvas.stroke();
    }

    render();


}
</script>