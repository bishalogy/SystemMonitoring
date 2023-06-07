<div class="container-fluid p-0 m-0 " id="go1"  >
    <div class="p-0 m-0" style="background:transparent"  >
        <div class="card-body pt-0" >
            <p class="card-text pt-0" >
                <table class="" id="systeminfo"></table>
                <script>
                $.getJSON("../data/inside_go/system_summary.json", function(result) {
                    $.each(result, function(i) {
                        $.each(result, function(j, obj) {
                            $.each(obj, function(id,
                                    key) {
                                    sysinfo = document.getElementById("systeminfo")
                                    sysinfo.innerHTML +=
                                        `<tr><td class='font-weight-bold'>` + id +
                                        `</td><td class='font-weight-bold'>` + key + `</td></tr>`
                                }

                            )
                        })
                    })
                });
                </script>

            </p>
        </div>
    </div>
</div>
