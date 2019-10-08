function blockTab(blc){
	blc.block({
        overlayCSS: {
            backgroundColor: '#CCF3FF',
            cursor: 'progress'
        },
        message: '<div class="loading-spinner" style="width: 200px; position: fixed;top: 50%;left: 50%;margin-top: -50px;margin-left: -100px;"><div class="progress progress-striped active"><div class="progress-bar progress-bar-success" style="width: 100%;"></div></div></div>',
        //message: '<img src="<?php echo base_url()?>assets/images/loading4.gif" /><strong>Proses sedang dilakukan...</strong>',
        css: {
            border: 'none',
            color: '#4D79FF',
            background: 'none',
            cursor: 'progress'
        }
    });
}
	
function unblockTab(blc){
	blc.unblock();
}