@if (session('toastr'))
    <script>
         $.notify({
            // options
            icon: 'error',
            title: '',
            message: '{{session('toastr')['msg']}}',
            url: '',
            target: '_blank'
           },{
            // settings
            element: 'body',
            position: null,
            type: "success",
            allow_dismiss: true,
            newest_on_top: false,
            showProgressbar: false,
            placement: {
                from: "bottom",
                align: "right"
            },
            offset: 20,
            spacing: 10,
            z_index: 1031,
            delay: 5000,
            timer: 1000,
            url_target: '_blank',
            mouse_over: null,
            animate: {
                enter: 'animated fadeInDown',
                exit: 'animated fadeOutUp'
            },
            onShow: null,
            onShown: null,
            onClose: null,
            onClosed: null,
            icon_type: 'class',
            template2: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                '<i class="material-icons">close</i>' +
                '<i class="material-icons" data-notify="icon">add_alert</i>' +
                '<span data-notify="title">{1}</span> ' +
                '<span data-notify="message">{2}</span>' +
                '<div class="progress" data-notify="progressbar">' +
                    '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                '</div>' +
                '<a href="{3}" target="{4}" data-notify="url"></a>' +
            '</div>',
            template : `
                <div class="alert alert-with-icon col-xs-11 col-sm-5 alert alert-{0}" role="alert data-notify="container">
                    <i class="material-icons" data-notify="icon">add_alert</i>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span data-notify="message">{2}</span>
                </div>
            `,
        });
    </script>
@endif
