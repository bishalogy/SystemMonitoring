<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<div class="home w-100 h-100 body_text_color" id="item-2" style="z-index:100">
    <div class="alert text-center pt-5">
        <h1>Monitoring Work Processes</h1>
        <h3>One tool – total visibility over your System</h3>
        <p>Displays all running status, Real-time views, interactive charts, reports <br>See what it can do
            for you…</p>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner text-light" style="height:430px;">
            <div class="carousel-item  active ">
                <div class="d-flex justify-content-center">
                    <div class="card bg-dark m-1 pt-4 pb-2 " style="width: 18rem;">
                        <div class="card-body ">

                            <h5 class="card-title text-center"> <i class="fa fa-server fa-3x pb-2"></i>
                                <p>System Information</p>
                            </h5>
                            <p class="card-tex mt-5" style=" text-align: justify;">&nbsp;&nbsp; &nbsp;
                                &nbsp; A computer system is a set of integrated devices that input, output,
                                process, and store data and information.
                            </p>
                            <!-- <a href="#" class="btn btn-success w-100"><i class="fa fa-eye pr-2"></i> Run
                                            Test</a> -->

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success w-100" data-toggle="modal" data-target="#one">
                                <i class="fa fa-eye pr-2"></i> RunTest
                            </button>

                            <!-- Modal -->
                            <div class="modal fade modal-dialog-modal-scrollable" id="one" tabindex="-1" role="dialog"
                                aria-labelledby="oneTitle" aria-hidden="true" style="background:rgba(30,30,30,0.9)">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content text-dark">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="fiveTitle"><i class="fa fa-server  pb-2"></i>
                                                <b>System
                                                    Information</b></h5>

                                        </div>
                                        <div class="modal-body "
                                            style="height:450px;overflow:hidden;overflow-y:scroll;">
                                            <table class='w-100 pl-5 pr-5 d-flex flex-column justify-content-left '
                                                id="systab"></table>
                                            <script>
                                            var systab = document.getElementById("systab");
                                            $.getJSON("./data/System(HW)/bios.json", function(result) {
                                                $.each(result, function(id, key) {
                                                    systab.innerHTML += `
                                                        <tr class='d-flex w-100 border-bottom pb-2 pt-2'>
                                                                <td class='w-50 text-uppercase font-weight-bold '> ${id}</td>
                                                                <td class='text-left'>${key}</td>
                                                            </tr>

                                                        `
                                                })
                                            });
                                            $.getJSON("./data/System(HW)/system.json", function(result) {
                                                $.each(result, function(id, key) {
                                                    systab.innerHTML += `
                                                    <tr class='d-flex w-100 border-bottom pb-2 pt-2'>
                                                                <td class='w-50 text-uppercase font-weight-bold '> ${id}</td>
                                                                <td class='text-left'>${key}</td>
                                                            </tr>
                                                    `

                                                })
                                            });
                                            </script>
                                        </div>
                                        <div class="modal-footer" style="margin:auto">
                                            <button type="button" class="btn btn-secondary" style="width:400px;"
                                                data-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-dark m-1 pt-4 pb-2 " style="width: 18rem;">

                        <div class="card-body">
                            <h5 class="card-title text-center"> <i class="fa fa-microchip fa-3x pb-2"></i>
                                <p>CPU</p>
                            </h5>
                            <p class="card-text  mt-5" style=" text-align: justify;"> &nbsp;&nbsp; &nbsp;
                                &nbsp;A central processor or main processor, is the electronic
                                circuitry within a computer that carries out the instructions</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success w-100" data-toggle="modal" data-target="#two">
                                <i class="fa fa-eye pr-2"></i> RunTest
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="two" tabindex="-1" role="dialog" aria-labelledby="twoTitle"
                                aria-hidden="true" style="background:rgba(30,30,30,0.9)">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content  text-dark">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="fiveTitle"><i class="fa fa-microchip  pb-2"></i>
                                                <b>CPU</b></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" style="height:450px;overflow:hidden;overflow-y:scroll;">
                                            <table class='w-100 pl-5 pr-5 d-flex flex-column   justify-content-left'
                                                id="cputab"></table>
                                            <script>
                                            $.getJSON("./data/CPU/cpu.json", function(result) {
                                                $.each(result, function(id, key) {
                                                    cputab.innerHTML += `
                                                <tr class='d-flex w-100 border-bottom pb-2 pt-2'>
                                                                <td class='w-50 text-uppercase font-weight-bold '> ${id}</td>
                                                                <td class='text-left'>${key}</td>
                                                            </tr>

                                            `

                                                })
                                            });
                                            </script>
                                        </div>
                                        <div class="modal-footer" style="margin:auto">
                                            <button type="button" class="btn btn-secondary" style="width:400px;"
                                                data-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-dark m-1 pt-4 pb-2" style="width: 18rem;">

                        <div class="card-body">
                            <h5 class="card-title text-center"> <i class="fas fa-memory fa-3x pb-2"></i>
                                <p>Memory</p>
                            </h5>
                            <p class="card-text  mt-5 " style=" text-align: justify;">&nbsp;&nbsp; &nbsp;
                                &nbsp;It refers to a device that is used to store information for
                                immediate use in a computer hardware device.</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success w-100" data-toggle="modal"
                                data-target="#three">
                                <i class="fa fa-eye pr-2"></i> RunTest
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="three" tabindex="-1" role="dialog" aria-labelledby="threeTitle"
                                aria-hidden="true" style="background:rgba(30,30,30,0.9)">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content text-dark">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="fiveTitle"><i class="fas fa-memory  pb-2"></i>
                                                <b>Memory</b></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body"
                                            style="height:450px;overflow:hidden;;overflow-y:scroll;">
                                            <table class='w-100 pl-5 pr-5 d-flex flex-column justify-content-left'
                                                id="memtab"></table>
                                            <script>
                                            $.getJSON("./data/Memory/memLayout.json", function(result) {
                                                $.each(result, function(i) {
                                                    $.each(result[i], function(id, key) {
                                                        memtab.innerHTML += `
                                                <tr class='d-flex w-100 border-bottom pb-2 pt-2'>
                                                                <td class='w-50 text-uppercase font-weight-bold '> ${id}</td>
                                                                <td class='text-left'>${key}</td>
                                                            </tr>

                                            `
                                                    })
                                                })
                                            });
                                            </script>
                                        </div>
                                        <div class="modal-footer" style="margin:auto">
                                            <button type="button" class="btn btn-secondary" style="width:400px;"
                                                data-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="carousel-item" style="height:500px;">
                <div class="d-flex justify-content-center ">

                    <div class="card bg-dark m-1 pt-4 pb-2 " style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center"> <i class="fas fa-laptop fa-3x pb-2"></i>
                                <p>Operating System</p>
                            </h5>
                            <p class="card-text  mt-5 " style=" text-align: justify;"> &nbsp;&nbsp; &nbsp;
                                &nbsp;An OS is system software that manages computer hardware,
                                software resources, and provides common services.</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success w-100" data-toggle="modal" data-target="#four">
                                <i class="fa fa-eye pr-2"></i> RunTest
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="four" tabindex="-1" role="dialog" aria-labelledby="fourTitle"
                                aria-hidden="true" style="background:rgba(30,30,30,0.9)">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content text-dark">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="fiveTitle"><i class="fas fa-laptop  pb-2"></i>
                                                <b>Operating System</b>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body "
                                            style="height:450px;overflow:hidden;;overflow-y:scroll;">
                                            <table class='w-100 pl-5 pr-5 d-flex flex-column justify-content-left'
                                                id="ostab"></table>
                                            <script>
                                            $.getJSON("./data/Os/osInfo.json", function(result) {
                                                $.each(result, function(id, key) {
                                                    ostab.innerHTML += `
                                                <tr class='d-flex w-100 border-bottom pb-2 pt-2'>
                                                                <td class='w-50 text-uppercase font-weight-bold '> ${id}</td>
                                                                <td class='text-left'>${key}</td>
                                                            </tr>

                                            `

                                                })
                                            });
                                            </script>
                                        </div>
                                        <div class="modal-footer" style="margin:auto">
                                            <button type="button" class="btn btn-secondary" style="width:400px;"
                                                data-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-dark m-1  pt-4 pb-2" style="width: 18rem;">

                        <div class="card-body">
                            <h5 class="card-title text-center"> <i class="fa fa-desktop fa-3x pb-2"></i>
                                <p>Graphics</p>
                            </h5>
                            <p class="card-text  mt-5" style=" text-align: justify;"> &nbsp;&nbsp; &nbsp;
                                &nbsp;Graphics are pictures and films created using computers. it
                                refers to computer-generated image data .</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success w-100" data-toggle="modal" data-target="#five">
                                <i class="fa fa-eye pr-2"></i> RunTest
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="five" tabindex="-1" role="dialog" aria-labelledby="fiveTitle"
                                aria-hidden="true" style="background:rgba(30,30,30,0.9)">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content text-dark">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="fiveTitle"><i class="fa fa-desktop  pb-2"></i>
                                                <b>Graphics</b></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body "
                                            style="height:450px;overflow:hidden;;overflow-y:scroll;">

                                            <table class='w-100 pl-5 pr-5 d-flex flex-column justify-content-left'
                                                id="graphics"></table>

                                            <script>
                                            $.getJSON("./data/Graphics/graphics.json", function(result) {
                                                $.each(result, function(i) {
                                                    $.each(result[i], function(j, obj) {
                                                        $.each(obj, function(id,
                                                                key)

                                                            {
                                                                graphics
                                                                    .innerHTML += `
                                                <tr class='d-flex w-100 border-bottom pb-2 pt-2'>
                                                                <td class='w-50 text-uppercase font-weight-bold '> ${id}</td>
                                                                <td class='text-left'>${key}</td>
                                                            </tr>

                                            `
                                                            }

                                                        )
                                                    })
                                                })
                                            });
                                            </script>
                                        </div>
                                        <div class="modal-footer" style="margin:auto">
                                            <button type="button" class="btn btn-secondary" style="width:400px;"
                                                data-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-dark m-1 pt-4 pb-2" style="width: 18rem;">

                        <div class="card-body">
                            <h5 class="card-title text-center"> <i class="fas fa-network-wired fa-3x pb-2"></i>
                                <p>Network</p>
                            </h5>
                            <p class="card-text mt-5 " style=" text-align: justify;"> &nbsp;&nbsp; &nbsp;
                                &nbsp;The Network Computer was a diskless desktop computer device
                                made by Oracle Corporation from about 1996 to 2000..</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success w-100" data-toggle="modal" data-target="#six">
                                <i class="fa fa-eye pr-2"></i> RunTest
                            </button>

                            <!-- Modal -->
                            <div id="six" class="modal fade" style="background:rgba(30,0,0,0.9)">
                                <div class="modal-dialog modal-confirm">
                                    <div class="modal-content ">
                                        <div class="modal-header alert-danger  d-flex align-items-center">
                                            <div class="icon-box bg-danger p-2 rounded-circle">
                                                <i class="fas fa-exclamation-triangle  fa-3x "></i>
                                            </div>

                                            <h4 class="modal-title ml-100 w-100 text-center font-weight-bold  "
                                                style="font-size:40px">Access Denied</h4>
                                        </div>
                                        <div class="modal-body alert-danger w-100 ">
                                            <p class="text-center">You need to have pro member subscription
                                                to access this feature.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn bg-danger btn-block " data-dismiss="modal">OK</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-item" style="height:500px;">
                <div class="d-flex justify-content-center">

                    <div class="card bg-dark m-1 pt-4 pb-2 " style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center"> <i class="fa fa-wifi fa-3x pb-2"></i>
                                <p>WIFI</p>
                            </h5>
                            <p class="card-text mt-5 " style=" text-align: justify;"> &nbsp;&nbsp; &nbsp;
                                &nbsp;Wi-Fi in Computer system uses radio waves to provide
                                wireless high-speed Internet and network connections</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success w-100" data-toggle="modal"
                                data-target="#seven">
                                <i class="fa fa-eye pr-2"></i> RunTest
                            </button>

                            <!-- Modal -->
                            <div id="seven" class="modal fade" style="background:rgba(30,0,0,0.9)">
                                <div class="modal-dialog modal-confirm">
                                    <div class="modal-content ">
                                        <div
                                            class="modal-header alert-danger  d-flex justify-content-center align-items-center">
                                            <div class="icon-box bg-danger  p-2 rounded-circle">
                                                <i class="fas fa-exclamation-triangle  fa-3x"></i>
                                            </div>
                                            <h4 class="modal-title ml-100 w-100 text-center font-weight-bold  "
                                                style="font-size:40px">Access Denied</h4>
                                        </div>
                                        <div class="modal-body alert-danger w-100 ">
                                            <p class="text-center">You need to be pro member subscription to
                                                access this feature.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn bg-danger btn-block " data-dismiss="modal">OK</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-dark m-1  pt-4 pb-2" style="width: 18rem;">

                        <div class="card-body">
                            <h5 class="card-title text-center"> <i class="fa fa-battery-half fa-3x pb-2"></i>
                                <p>Battery</p>
                            </h5>
                            <p class="card-text mt-5" style=" text-align: justify;"> &nbsp;&nbsp; &nbsp;
                                &nbsp;A battery is a hardware component that supplies power to a
                                device, enabling that device to work without a power cord.</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success w-100" data-toggle="modal"
                                data-target="#eight">
                                <i class="fa fa-eye pr-2"></i> RunTest
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="eight" tabindex="-1" role="dialog" aria-labelledby="eightTitle"
                                aria-hidden="true" style="background:rgba(30,30,30,0.9)">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content text-dark">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="fiveTitle"><i
                                                    class="fa fa-battery-half  pb-2"></i> <b>Battery</b>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body"
                                            style="height:450px;overflow:hidden;;overflow-y:scroll;">
                                            <table
                                                class='w-100 pl-5 pr-5 d-flex flex-column text-dark  justify-content-left'
                                                id="batterytab"></table>
                                            <script>
                                            $.getJSON("./data/Battery/Battery.json", function(result) {
                                                $.each(result, function(id, key) {
                                                    batterytab.innerHTML += `
                                                <tr class='d-flex w-100 border-bottom pb-2 pt-2'>
                                                                <td class='w-50 text-uppercase font-weight-bold '> ${id}</td>
                                                                <td class='text-left'>${key}</td>
                                                            </tr>

                                            `

                                                })
                                            });
                                            </script>
                                        </div>
                                        <div class="modal-footer" style="margin:auto">
                                            <button type="button" class="btn btn-secondary" style="width:400px;"
                                                data-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-dark m-1 pt-4 pb-2" style="width: 18rem;">

                        <div class="card-body">
                            <h5 class="card-title text-center"> <i class="fa fa-cube fa-3x pb-2"></i>
                                <p>Virtual Box</p>
                            </h5>
                            <p class="card-text mt-5" style=" text-align: justify;"> &nbsp;&nbsp; &nbsp;
                                &nbsp;Oracle VM VirtualBox (VB) is a free and VB open-source hosted
                                hypervisor for x86 virtualization, developed by Oracle Corporation.</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success w-100" data-toggle="modal" data-target="#nine">
                                <i class="fa fa-eye pr-2"></i> RunTest
                            </button>

                            <!-- Modal -->
                            <div id="nine" class="modal fade" style="background:rgba(30,0,0,0.9)">
                                <div class="modal-dialog modal-confirm">
                                    <div class="modal-content ">
                                        <div class="modal-header alert-danger d-flex align-items-center">
                                            <div class="icon-box bg-danger p-2 rounded-circle">
                                                <i class="fas fa-exclamation-triangle text-light fa-3x"></i>
                                            </div>
                                            <h4 class="modal-title ml-100 w-100 text-center font-weight-bold  "
                                                style="font-size:40px">Access Denied</h4>
                                        </div>
                                        <div class="modal-body alert-danger w-100 ">
                                            <p class="text-center">You need to be pro member subscription to
                                                access this feature.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn bg-danger btn-block " data-dismiss="modal">OK</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>