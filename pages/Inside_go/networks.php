<div class="container-fluid p-0 m-0" id="go8">
    <div class="p-0 m-0" style="background:transparent">
        <div class="card-body pt-0">
            <p class="card-text pt-0">
                <table class="" id="network" style="text-transform:capitalize"></table>
                <script>
                $.getJSON("../data/Networks/networkInterfaces.json", function(result) {
                    $.each(result, function(i) {
                        $.each(result[i], function(id, key) {
                            network = document.getElementById("network")
                            network.innerHTML +=
                                `<tr><td class='font-weight-bold' style='width:250px'>` +
                                id +
                                `</td><td class='font-weight-bold'>` + key +
                                `</td></tr>`

                        })
                        network.innerHTML += '<hr>'
                    })
                });
                </script>

            </p>

        </div>
    </div>
</div>
