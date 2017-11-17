<?php

/**
 * Mari's Sprout custom CSS.
 * 
 */
function si_add_css() {
	?>
		<style type="text/css">
			

    
/*/CUSTOM CSS ESTIMATE/*/
#header .inner .history_message .open {
    display: none;
    }
#items .items .item .column p {
    font-size: 14px;
    font-weight: 400;
}
#notes .item .header h3 {
    font-size: 13px;
    }
    
#totals .items .item .total {
    font-weight: 600;
}
#totals .items .item h3 {
    font-weight: 600;
}
#intro .inner .column span {
    color: rgba(255, 255, 255, 0.37);
    }
 
 /*/CUSTOM CSS ESTIMATE/*/
    
		</style>
	<?php
}
add_action( 'si_head', 'si_add_css' );