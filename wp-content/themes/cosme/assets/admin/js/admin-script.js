(function(){
	'use strict';

   
    var tabElements = document.querySelectorAll('[data-block-title]');
    tabElements.forEach((element)=>{
        element.addEventListener('click', (e)=>{
            e.preventDefault();
            document.querySelector('.cosme-panel-tab-active').classList.remove('cosme-panel-tab-active');
            var tab = element.dataset.tab;
            element.classList.add('cosme-panel-tab-active');
            document.querySelector('.cosme-panel-content-tabs .cosme-panel-tab.cosme-panel-tab-active').classList.remove('cosme-panel-tab-active');
            document.querySelector('[data-type="'+ tab +'"]').classList.add('cosme-panel-tab-active');


        })
    })
       



	
	window.addEventListener('load', function(){
        const buttonElement = document.getElementById('starter-install');
        if( !buttonElement) return;
        buttonElement.addEventListener('click', (e) => {
            if( buttonElement.dataset.status == 'active' )
                return;
            e.preventDefault();

            buttonElement.innerHTML = '<i class="dashicons dashicons-update-alt"></i> Installing…';

            const formData = new FormData();
            formData.append( 'action', 'cosme_install_starter_plugin' );
            formData.append( 'nonce', cosme_localize.nonce );

            
            fetch( cosme_localize.ajax_url, {
                method: "POST",
                credentials: 'same-origin',
                body: formData
            })
            .then((response) => response.json())
            .then((data) => {

                if( data.success ){
                    buttonElement.innerHTML = '<i class="dashicons dashicons-saved"></i> Activated';

                    setTimeout( function() {
                        buttonElement.innerHTML = 'Redirecting…';  

                        setTimeout( function() {

							window.location = buttonElement.getAttribute('href');

						}, 1000 );
                    }, 500 );
                }
                

            })
            .catch((error) => {
                output.innerHTML = '<span>'+Codegear_Starter_localize.failed_message+'</span>';
            });

        });
    })

})();