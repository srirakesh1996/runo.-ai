<form class="modal-form" action="#" method="post" id="demo-form">
    <div class="form-group">
        <input type="text" placeholder="Name" name="your_name" autocomplete="off" required />
    </div>
    <div class="form-group">
        <input type="email" placeholder="Email ID" name="your_email" autocomplete="off" required />
    </div>
    <div class="form-group">
        <input type="tel" placeholder="Phone No." name="your_phone" maxlength="13" autocomplete="off" required />
    </div>
    <div>
        <p class="agree-text">By clicking here I agree to the <a href="/privacy-policy/">privacy policy</a></p>
    </div>
    <div class="form-group">
        <button id="demo-form-btn" type="submit" name="submit" class="demo-btn demo-submit">Submit</button>
    </div>
</form>


<script type="text/javascript">
    jQuery(function($) {
        $("#superlead-form").on('submit', function(event) {
            event.preventDefault();
            let formData = $(this).serializeArray().reduce(function(obj, item) {
                obj[item.name] = item.value;
                obj["custom_page"] = "Home";
                return obj;
            }, {});
            submitForm("superlead-form", formData, "2eddbc70-045d-41ff-8866-dbf34f73f6f1")
        });

        $("#demo-form").on('submit', function(event) {
            event.preventDefault();
            let formData = $(this).serializeArray().reduce(function(obj, item) {
                obj[item.name] = item.value;
                obj["custom_page"] = "Home";
                return obj;
            }, {});
            submitForm("demo-form", formData, "2eddbc70-045d-41ff-8866-dbf34f73f6f1")
        });
    });
</script>



<script>
    function submitForm(formId, formData, formToken) {
        jQuery(function($) {
            $(`#${formId}-btn`).prop("disabled", true);
            const params = new URLSearchParams(window.location.search);
            const utmSource = params.get("utm_source");
            const utmCampaign = params.get("utm_campaign");
            // const notes = `This lead has reached out to our website using utm_source as ${
            //   utmSource || "N/A"
            // } and utm_campaign as ${utmCampaign || "N/A"}`;
            //formData["your_notes"] = notes;
            formData["custom_source"] = "Website Enquiry- IB";
            formData["custom_status"] = "Api Allocation";
            if (utmSource) formData["custom_utm source"] = utmSource;
            if (utmCampaign) formData["custom_utm campaign"] = utmCampaign;
            $.ajax({
                    type: "POST",
                    url: `https://api-call-crm.runo.in/integration/webhook/wb/5d70a2816082af4daf1e377e/${formToken}`,
                    data: JSON.stringify(formData),
                    success: function() {},
                    headers: {
                        "Content-Type": "application/json",
                    },
                    contentType: "application/json",
                })
                .done(function(data) {
                    console.log(data);
                    $(`#${formId}`)[0].reset();
                    $(`#${formId}-btn`).prop("disabled", false);
                    $("#modal").modal("hide");
                    showThankYou();
                    trackingListener();
                    //Disabled as it's not working
                    //gtag_report_conversion();
                })
                .fail(function(a, b) {
                    console.log(a, b);
                    $(`#${formId}`)[0].reset();
                    $(`#${formId}-btn`).prop("disabled", false);
                });
        });
    }
</script>