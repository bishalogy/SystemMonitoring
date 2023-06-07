<div class="container-fluid p-0 m-0" id="go6" >
    <div class="p-0 m-0" style="background:transparent"  >
        <div class="card-body pt-0" >
            <p class="card-text pt-0" >
                <table class="" id="drives"></table>
                <script>
                $.getJSON("../data/inside_go/drives.json", function(result) {
                    $.each(result, function(i) {
                        $.each(result, function(j, obj) {
                            $.each(obj, function(id,
                                    key) {
                                        drives = document.getElementById("drives")
                                        drives.innerHTML +=
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
