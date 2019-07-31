<script>
    $(function() {
        $('.list-group-item').on('click', function() {
            $('.fa', this)
                .toggleClass('fa fa-chevron-right')
                .toggleClass('fa fa-chevron-down');
        });
    });
</script>
