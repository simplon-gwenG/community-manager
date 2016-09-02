/**
* Fichier js pour la gestion des forms
*/

function sendAjaxContact(){
	$.ajax({
	  type: "POST",
	  url: "process.php",
	  data: { 
		  nom: $('#nom').val(), 
		  prenom: $('#prenom').val(),
		  ville: $('#ville').val(),
		  email: $('#email').val(),
		  telephone: $('#telephone').val(),
		  comment: $('#comment').val()
	  },
	  success: function (data) {
	     var res = eval("["+data+"]") ;
	     var content = '' ;
	     if(res[0].errors && typeof res[0].errors == 'object'){
	    	 content += '<h2>Le formulaire de contact contient des erreurs :</h2>';
			 if(res[0].errors.nom && res[0].errors.nom != '' && res[0].errors.nom != 'undefined' && typeof res[0].errors.nom != 'undefined'){
	    		 content += '<h3>- '+res[0].errors.nom+'</h3>';
	    	 }
	    	 if(res[0].errors.email && res[0].errors.email != '' && res[0].errors.email != 'undefined' && typeof res[0].errors.email != 'undefined'){
	    		 content += '<h3>- '+res[0].errors.email+'</h3>';
	    	 }
	    	 if(res[0].errors.telephone && res[0].errors.telephone != '' && res[0].errors.telephone != 'undefined' && typeof res[0].errors.telephone != 'undefined'){
	    		 content += '<h3>- '+res[0].errors.telephone+'</h3>';
	    	 }
	     }else if(res[0].message && res[0].message != '' && res[0].message != 'undefined' && typeof res[0].message != 'undefined'){
	    	 content += '<h3>'+res[0].message+'</h3>';
	     }
	     if($('#remercie2')) $('#remercie2').remove() ;
	     var _html = '<section id="remercie2" class="modal fade in" role="dialog>" tabindex="-1" style="display: block;" aria-hidden="false">';
	    	 _html += '<div class="modal-dialog">';
	    	 _html += '<div class="modal-content">';
	    	_html += '<div class="modal-header">';
	    	_html += '<button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="removeModal();">x</button>';
	    	_html += '<h1>Contact</h1>';
	    	 _html += '</div>';
	    	_html += '<div class="modal-body">';
	    	_html += '<div class="help-block">';
				_html += content ;
			_html += '</div>';
	    	_html += '</div>';
	    	_html += '<div class="modal-footer"><input type="button" value="OK" class="btn_ok" onclick="removeModal();" /></div>';
	    	 _html += '</div>';
	    	_html += '</div>';
	    	_html += '</section>' ;
	    $('body').append(_html);
	  }
	});
}

function removeModal(){
	$('#remercie2').remove() ;
}