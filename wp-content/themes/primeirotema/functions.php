<?php
// incluir arquivos de funcionts

require get_template_directory().'/include/mg_footer_functions.php';

// Hooks
add_action('shutdown', 'mg_fim');