
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
{{-- confirm script --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js"></script>

@stack('scripts')
<script>
    function deleteconfirm(url,type) {
        $.confirm({
            title: 'are you sure',
            content: 'Simple confirm! '+ type +'?',
            buttons: {
                confirm: function() {

                    window.location.href=url;
                },
                cancel: function() {

                },

            }
        });
    }
</script>
