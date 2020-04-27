    $(document).ready(function() {
                        $("#jobsheet").autocomplete({
                            //define callback to format results
                            source: function(req, add){
				//pass request to server
				$.getJSON("../view/enter_emp_hours.php", req, function(data) {
							
				//create array for response objects
				var suggestions = [];
							
				//process response
				$.each(data, function(i,val){								
					suggestions.push(val);
                                    });
							
				//pass array to callback
				add(suggestions);
                                });
                            },					
                            //define select handler
                            select: function(e, ui) {
				 $("#jobsheet").val(ui.item.value);		

                            }
			});	
                    });
