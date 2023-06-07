<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <title>Scan Me© - Inside Go</title>
    <style>
    #canvas-basic {
        position: absolute;
        display: block;
        width: 100%;
        height: 100%;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;

    }
    </style>
</head>

<body>

    <div class="container-fluid p-0 " style="height:100vh">
        <canvas id="canvas-basic"></canvas>
        <div class="container-fluid text-light position-fixed"
            style="text-align:right;height:8vh;background:rgba(0,0,0,0.3)">
            System Information report written at: <span id="times"></span>
            <script>
            firsttimedate()
            setInterval(firsttimedate, 2000)

            function firsttimedate() {
                date = Date()
                document.getElementById("times").innerHTML = date
            }
            </script>
            <br> System Name: DESKTOP-H121CR8
            [System Summary]
        </div>
        <div class="container-fluid d-flex position-relative p-1" style='top:8vh'>
            <?php include"Inside_go/container.php"?>

            <!-- inside go -- time-- storage -- processor -- wifi -->
            <div class="d-flex flex-column ml-1" style="width:400px;background:rgba(0,0,0,0)">
                <div class='mt-0 ml-1 border m-1'>
                    <div class="container font-weight-bold p-4" style="background:rgba(255,255,255,0.3);color:black;">
                        <span id="times1"></span>
                    </div>
                    <script>
                    timedate()
                    setInterval(timedate, 1000)

                    function timedate() {
                        date = new Date()
                        document.getElementById("times1").innerHTML = date
                    }
                    </script>
                </div>
                <div class='mt-0 ml-1 border'>
                    <div class="container font-weight-bold p-1 pb-3 w-100"
                        style="background:rgba(255,255,255,0.3);color:white;">
                        <canvas id="myChart" width='20px' style="color:white"></canvas>
                        <script>
                        var ctx = document.getElementById('myChart').getContext('2d');
                        var chart = new Chart(ctx, {
                            // The type of chart we want to create
                            type: 'pie',

                            // The data for our dataset
                            data: {
                                labels: ['C', "D", 'E'],
                                datasets: [{
                                    backgroundColor: ['rgba(255,0,0,0.8)', 'rgba(0,255,0,0.6)',
                                        'rgba(0,0,255,0.8)'
                                    ],
                                    borderColor: 'rgba(0,0,0,0.3)',
                                    data: [1000, 450, 400]
                                }]
                            },

                            // Configuration options go here
                            options: {
                                legend: {
                                    display: true,
                                    labels: {
                                        fontColor: 'black'
                                    }
                                },
                                title: {
                                    display: true,
                                    text: 'Storage Size(In GB)',
                                    fontColor: 'black'
                                }
                            }
                        });
                        </script>
                    </div>
                </div>
                <div class='mt-0 ml-1 border m-1'>
                    <div class="container font-weight-bold p-1 w-100"
                        style="background:rgba(255,255,255,0.3);color:white;">
                        <canvas id="myChart1" width='20px'></canvas>
                        <script>
                        var ctx = document.getElementById('myChart1').getContext('2d');
                        thirdChart()
                        setInterval(thirdChart, 2000)

                        function thirdChart() {
                            var chart = new Chart(ctx, {
                                // The type of chart we want to create
                                type: 'line',

                                // The data for our dataset
                                data: {
                                    labels: [0, 10, 20, 30, 40, 50, 70, 80, 90, 100],
                                    datasets: [{

                                        pointBackgroundColor: 'rgba(255,0,0,0.5)',
                                        backgroundColor: ['red', 'blue', 'green', 'red', 'blue',
                                            'green'
                                        ],
                                        borderColor: 'rgba(255,255,255,0.5)',
                                        data: [
                                            Math.floor(Math.random() * 101),
                                            Math.floor(Math.random() * 101),
                                            Math.floor(Math.random() * 101),
                                            Math.floor(Math.random() * 101),
                                            Math.floor(Math.random() * 101),
                                            Math.floor(Math.random() * 101),
                                            Math.floor(Math.random() * 101),
                                            Math.floor(Math.random() * 101),
                                            Math.floor(Math.random() * 101),
                                            Math.floor(Math.random() * 101),
                                            Math.floor(Math.random() * 101)


                                        ]
                                    }]
                                },

                                // Configuration options go here
                                options: {
                                    scales: {
                                        yAxes: [{
                                            stacked: true,

                                        }]

                                    },
                                    legend: {
                                        display: false,
                                        labels: {
                                            fontColor: 'white'
                                        }
                                    },
                                    title: {
                                        display: true,
                                        text: 'CPU Monitoring',
                                        fontColor: 'black'
                                    }
                                }
                            });
                        }
                        </script>
                    </div>
                </div>

                <div class='mt-0 ml-1 border'>
                    <div class="container font-weight-bold p-1 pb-3 w-100"
                        style="background:rgba(255,255,255,0.3);color:white;">
                        <canvas id="radar-chart" width="200px" height="150px"></canvas>
                        <script>
                        fourthChart()
                        setInterval(fourthChart, 3000)

                        function fourthChart() {
                            new Chart(document.getElementById("radar-chart"), {
                                type: 'radar',
                                data: {
                                    labels: ["Strength", "Speed", "Users"],
                                    datasets: [{
                                        label: "Wifi 1",
                                        fill: true,
                                        backgroundColor: "",
                                        borderColor: "green",
                                        pointBorderColor: "white",
                                        pointBackgroundColor: "blawhiteck",
                                        data: [Math.floor(Math.random() * 101) + 80, Math.floor(Math
                                            .random() * 101) + 50, Math.floor(Math.random() *
                                            101) + 50]
                                    }, {
                                        label: "wifi 2",
                                        fill: true,
                                        backgroundColor: "",
                                        borderColor: "yellow",
                                        pointBorderColor: "white",
                                        pointBackgroundColor: "black",
                                        data: [Math.floor(Math.random() * 101) + 80, Math.floor(Math
                                            .random() * 101) + 50, Math.floor(Math.random() *
                                            101) + 50]
                                    }, {
                                        label: "wifi 2 ",
                                        fill: true,
                                        backgroundColor: "",
                                        borderColor: "red",
                                        pointBorderColor: "white",
                                        pointBackgroundColor: "black",
                                        data: [Math.floor(Math.random() * 101) + 80, Math.floor(Math
                                            .random() * 101) + 50, Math.floor(Math.random() *
                                            101) + 50]
                                    }, ]
                                },
                                options: {
                                    legend: {
                                        display: false,
                                        labels: {

                                            fontColor: 'black'
                                        }
                                    },
                                    title: {
                                        display: true,
                                        fontColor: 'black',
                                        text: 'Wifi Network Monitoring'
                                    }
                                }
                            });
                        }
                        </script>
                    </div>

                </div>

            </div>



        </div>

    </div>


    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js">
    </script>

</body>

</html>
<script src="../scripts/granim.js"></script>
<script>
var granimInstance = new Granim({
    element: '#canvas-basic',
    direction: 'left-right',
    isPausedWhenNotInView: true,
    states: {
        "default-state": {
            gradients: [
                ['#ff9966', '#ff5e62'],
                ['#00F260', '#0575E6'],
                ['#e1eec3', '#f05053']
            ]
        }
    }
});
</script>
