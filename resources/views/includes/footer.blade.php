<script type="text/javascript" src="{{ asset('/js/jquery-3.3.1.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('/js/bootstrap.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/timeago.js/3.0.2/timeago.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/timeago.js/3.0.2/timeago.locales.min.js"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script>
    timeago().render(document.querySelectorAll('.timeago'), 'en')
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>