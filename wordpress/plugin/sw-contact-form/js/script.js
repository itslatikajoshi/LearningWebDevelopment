
jQuery(document).ready(function () {
    jQuery(".sw_new_lead_form").submit(function (e) {

        let name = jQuery("#name").val();
        let email = jQuery("#email").val();
        let mobile = jQuery("#mobile").val();
        if (name == '' || email == '' || mobile == '') {
            return false;
        } else {
            e.preventDefault();
            var formData = jQuery(".sw_new_lead_form").serializeArray();
            console.log(formData);
            jQuery.ajax({
                url: ajax_object.ajax_url,
                data: {
                    data: formData,
                    action: "sw_contact_form_filter"
                }, // form data
                type: 'POST', // POST
                async: true,
                beforeSend: function (xhr) {



                },
                success: function (data) {
                    let dataRes = JSON.parse(data);

                    if (dataRes.success == true) {
                        alert("Data submited succssfully.");
                        jQuery(".sw_new_lead_form")[0].reset();
                    }

                }
            });
        }




    });

});