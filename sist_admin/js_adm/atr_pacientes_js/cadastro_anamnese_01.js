  
	  $("#medic_in").hide();
	  $("#anomalia_in").hide();
	  $("#tratamento_in").hide();
	  $("#amamentacao_in").hide();
	  $("#trauma_in").hide(); 


		function_remedio_select_js = function (){
			  if($('#remedio_select_js').val() ==  ""||"nao" ){
			     $("#medic_in").hide();
			    }
			   if($('#remedio_select_js').val() == "sim" ){
			     $("#medic_in").show(); 
			    }
	      }

		function_anomalia_select_js = function (){
			  if($('#anomalia_select_js').val() == ""||"nao" ){

			     $("#anomalia_in").hide();
			    }
			   if($('#anomalia_select_js').val() == "sim" ){
			     $("#anomalia_in").show(); 
			    }
	      }
	    function_tratamento_select_js = function (){
			  if($('#tratamento_select_js').val() == ""||"nao" ){

			     $("#tratamento_in").hide();
			    }
			   if($('#tratamento_select_js').val() == "sim" ){
			     $("#tratamento_in").show(); 
			    }
	      }

	    function_amamentacao_select_js = function (){
			  if($('#amamentacao_select_js').val() == "" || "nao"){

			     $("#amamentacao_in").hide(); 
			    }

			   if($('#amamentacao_select_js').val() == "sim" ){
			     $("#amamentacao_in").show(); 
			    }

			      if($('#amamentacao_select_js').val() == "um pouco" ){
			     $("#amamentacao_in").show(); 
			    }
	      }

	    function_trauma_select_js = function (){
			  if($('#trauma_select_js').val() == "" || "nao sabe informar" || "nunca ocorreu" ){

			     $("#trauma_in").hide(); 
			    }

			   if($('#trauma_select_js').val() == "sim faz menos de um mes"  ){
			     $("#trauma_in").show(); 
			    }

			      if($('#trauma_select_js').val() == "sim faz mais de um mes" ){
			     $("#trauma_in").show(); 
			    }

			     if($('#trauma_select_js').val() == "sim faz mais de seis meses"){
			     $("#trauma_in").show(); 
			    }
	      }








