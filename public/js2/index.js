function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

$(document).ready(function () {
    // password and conf password validation
    $("#confirm_password").bind('keyup change', function () {

        check_Password($("#password").val(), $("#confirm_password").val())

    })

    $("#btn-register").click(function () {

        check_Password($("#password").val(), $("#confirm_password").val())

    });

    // email and retype email validation
    $("#retype_email").bind('keyup change', function () {

        check_Email($("#email").val(), $("#retype_email").val())

    })

    $("#btn-register").click(function () {

        check_Email($("#email").val(), $("#retype_email").val())

    });


})

function check_Password(Pass, Con_Pass) {

    if (Pass === "") {
    } else if (Pass === Con_Pass) {

        $("#btn-register").removeAttr("onclick");
        $('#confirm_password_msg').show();
        $("#confirm_password_msg").html("<i class='fas fa-check mr-2'></i>");

        setTimeout(function () {
            $('#confirm_password_msg').fadeOut('slow');
        }, 3000);

    } else {
        $("#confirm_password").focus();
        $('#confirm_password_msg').show();
        $("#confirm_password_msg").html("<i class='fas fa-times mr-2'></i>");

        setTimeout(function () {
            $('#confirm_password_msg').fadeOut('slow');
        }, 3000);

    }

}

// email and retype email check
function check_Email(Email, Con_email) {

    if (Email === "") {
    } else if (Email === Con_email) {

        $("#btn-register").removeAttr("onclick");
        $('#retype_email_msg').show();
        $("#retype_email_msg").html("<i class='fas fa-check mr-2'></i>");

        setTimeout(function () {
            $('#retype_email_msg').fadeOut('slow');
        }, 3000);

    } else {
        $("#retype_email").focus();
        $('#retype_email_msg').show();
        $("#retype_email_msg").html("<i class='fas fa-times mr-2'></i>");

        setTimeout(function () {
            $('#retype_email_msg').fadeOut('slow');
        }, 3000);

    }

}

function showPass() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}


$(function () {
    $("#example1").DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
    // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});


// docs review floating button

$(".ba-we-love-subscribers-fab").click(function () {
    $('.ba-we-love-subscribers-fab .wrap').toggleClass("ani");
    $('.ba-we-love-subscribers').toggleClass("open");
    $('.img-fab.img').toggleClass("close");
});


// save as permanent add
$(document).ready(function () {
    $("#chk").click(function () {
        var chkStatus = this.checked;
        if (chkStatus == true) {
            document.getElementById('TempoCountry').value = document.getElementById('CurrentCountry').value;
            document.getElementById('TempoProvince').value = document.getElementById('CurrentProvince').value;
            document.getElementById('TempoDistrict').value = document.getElementById('CurrentDistrict').value;
            document.getElementById('TempoVDC').value = document.getElementById('CurrentVDC').value;
            document.getElementById('TempoWard').value = document.getElementById('CurrentWard').value;
            document.getElementById('TempoTole').value = document.getElementById('CurrentTole').value;
            document.getElementById('TempoHouseno').value = document.getElementById('CurrentHouseno').value;
            document.getElementById('TempoContactno').value = document.getElementById('CurrentContactno').value;
        } else {
            document.getElementById('TempoCountry').value = '';
            document.getElementById('TempoProvince').value = '';
            document.getElementById('TempoDistrict').value = '';
            document.getElementById('TempoVDC').value = '';
            document.getElementById('TempoWard').value = '';
            document.getElementById('TempoTole').value = '';
            document.getElementById('TempoHouseno').value = '';
            document.getElementById('TempoContactno').value = '';

        }
    });


    // next step
    // $('.btnNext').on('click', function() {
    //     var parent_fieldset = $(this).parents('div');
    //     var next_step = true;
    //     // navigation steps / progress steps
    //     // var current_active_step = $(this).parents('.f1').find('.f1-step.active');
    //     // var progress_line = $(this).parents('.f1').find('.f1-progress-line');
    //
    //     // fields validation
    //     parent_fieldset.find('input[required="required"],input[required],select[required], select[required="required"]').each(function() {
    //         console.log($(this).val());
    //         if( ($(this).val() === "") || ($(this).val() === "-1" )) {
    //             console.log($(this).attr("name"));
    //             $(this).addClass('input-error-convocation');
    //             next_step = false;
    //         }
    //         else {
    //             $(this).removeClass('input-error-convocation');
    //         }
    //     });
    //     // fields validation
    //
    //     if( next_step ) {
    //         parent_fieldset.fadeOut(400, function() {
    //             // change icons
    //             current_active_step.removeClass('active').addClass('activated').next().addClass('active');
    //             // progress bar
    //             bar_progress(progress_line, 'right');
    //             // show next step
    //             $(this).next().fadeIn();
    //             // scroll window to beginning of the form
    //             scroll_to_class( $('.f1'), 20 );
    //         });
    //     }
    //
    // });


    // submit
    $('form').on('submit', function (e) {
        var errors = false;
        // fields validation
        $(this).find('input[required="required"],input[required="true"],select[required],input[required], select[required="required"]').each(function () {
            if ($(this).val() === "" || $(this).val() === "-1") {
                $(this).addClass('input-error-convocation');
                e.preventDefault();
                errors = true;
            } else {
                $(this).removeClass('input-error-convocation');
            }
        });
        // fields validation
        if (errors) {
            alert('Please Fill out the required fields');
        }

    });

})

$('input,select').on('focus', function () {
    $(this).removeClass('input-error-convocation');
});
