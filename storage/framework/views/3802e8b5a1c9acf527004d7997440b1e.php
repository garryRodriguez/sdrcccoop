<?php if(Session::has('toastr')): ?>
    <?php
        $toastr     = Session::get('toastr');
        $type       = \Illuminate\Support\Arr::get($toastr->get('type'), 0, 'success');
        $message    = \Illuminate\Support\Arr::get($toastr->get('message'), 0, '');
        $options    = json_encode($toastr->get('options', []));
    ?>
    <script>
        (function () {
            admin.toastr.<?php echo e($type, false); ?>('<?php echo $message; ?>', <?php echo $options; ?>);
        }());
    </script>
<?php endif; ?><?php /**PATH /home/u152326917/domains/sdrcoop.com/public_html/vendor/open-admin-org/open-admin/src/../resources/views/partials/toastr.blade.php ENDPATH**/ ?>