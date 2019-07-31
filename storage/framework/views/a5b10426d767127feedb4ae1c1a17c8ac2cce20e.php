<script>
    $('#fe_vence').datepicker({
        uiLibrary: 'bootstrap4',iconsLibrary: 'fontawesome',
        format: '<?php echo e(config("app.date_format_js")); ?>',
        locale: 'es-es',
        weekStartDay: 1,
        size: 'small'
    });
    $('#fe_certifica').datepicker({
        uiLibrary: 'bootstrap4',iconsLibrary: 'fontawesome',
        format: '<?php echo e(config("app.date_format_js")); ?>',
        locale: 'es-es',
        weekStartDay: 1,
        size: 'small'
    });

    $(function() {
        $('.list-group-item').on('click', function() {
            $('.fa', this)
                .toggleClass('fa fa-chevron-right')
                .toggleClass('fa fa-chevron-down');
        });

    });

</script>
<?php /**PATH C:\laragon\www\HerBerk\resources\views/juradas/partials/script_juradas.blade.php ENDPATH**/ ?>