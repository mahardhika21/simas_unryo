
// fungsi validasi input user baak
function validate_baak()
        {
           let vd = $('#formBaak').validate({
                rules : {
                    username : {
                                    required       : true,
                                    minlength      : 5,
                                },
                    nama      : {required : true, minlength : 3,},
                    email     : {
                                    required : true,
                                    email : true,
                                },
                    phone : {
                                required  : true,
                                minlength : 9,
                                number    : true,
                            }

                },
                messages : {
                    username : {
                                    required       : "Username Tidak boleh dikosongkan",
                                    minlength      : "minmal panjang username 5 karakter",
                                },
                    nama      : {
                                    required       : "nama Tidak boleh dikosongkan",
                                    minlength      : "minmal panjang nama 3 karakter",
                                },
                    email     : "Format email salah, dan email tidak boleh dikosongkan",
                    phone : {
                                required  : "Phone number tidak boleh dikosongkan",
                                minlength : "minimal panjang 9 karakter",
                                number    : "Phone Number harus berupa angka 0-9",
                            },       

                },
                errorElement: "em",
                errorPlacement: function ( error, element ) {
                    // Add the `help-block` class to the error element
                    error.addClass( "help-block" );

                    // Add `has-feedback` class to the parent div.form-group
                    // in order to add icons to inputs
                    element.parents( ".col-sm-9" ).addClass( "has-feedback" );

                    if ( element.prop( "type" ) === "checkbox" ) {
                        error.insertAfter( element.parent( "label" ) );
                    } else {
                        error.insertAfter( element );
                    }

                    // Add the span element, if doesn't exists, and apply the icon classes to it.
                    if ( !element.next( "span" )[ 0 ] ) {
                        $( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
                    }
                },
                success: function ( label, element ) {
                    // Add the span element, if doesn't exists, and apply the icon classes to it.
                    if ( !$( element ).next( "span" )[ 0 ] ) {
                        $( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
                    }
                },
                highlight: function ( element, errorClass, validClass ) {
                    $( element ).parents( ".col-sm-" ).addClass( "has-error" ).removeClass( "has-success" );
                    $( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
                },
                unhighlight: function ( element, errorClass, validClass ) {
                    $( element ).parents( ".col-sm-9" ).addClass( "has-success" ).removeClass( "has-error" );
                    $( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
                }
            });

           console.log(vd);
        }    
      