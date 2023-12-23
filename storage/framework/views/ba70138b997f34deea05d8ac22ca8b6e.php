<!--[if BLOCK]><![endif]--><?php if($paginator->hasPages()): ?>
    <nav>
        <ul class="pagination">
            
            <!--[if BLOCK]><![endif]--><?php if($paginator->onFirstPage()): ?>
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link"><?php echo app('translator')->get('pagination.previous'); ?></span>
                </li>
            <?php else: ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo e($paginator->previousPageUrl(), false); ?>" rel="prev"><?php echo app('translator')->get('pagination.previous'); ?></a>
                </li>
            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->

            
            <!--[if BLOCK]><![endif]--><?php if($paginator->hasMorePages()): ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo e($paginator->nextPageUrl(), false); ?>" rel="next"><?php echo app('translator')->get('pagination.next'); ?></a>
                </li>
            <?php else: ?>
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link"><?php echo app('translator')->get('pagination.next'); ?></span>
                </li>
            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
        </ul>
    </nav>
<?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
<?php /**PATH C:\xampp\htdocs\sdrccoop\public_html_final\sdrcccoop\vendor\laravel\framework\src\Illuminate\Pagination/resources/views/simple-bootstrap-4.blade.php ENDPATH**/ ?>