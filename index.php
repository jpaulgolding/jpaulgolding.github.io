<?php

//Add Google Search Console Meta Tags in Header

function twp_add_meta_tags() {
?>
<meta name="google-site-verification" content="TI0gAu4HFKDQfKpJTGa8Fzltma9tTuiKolVVRigRwVQ" />    

<?php }
add_action('wp_head', 'twp_add_meta_tags');