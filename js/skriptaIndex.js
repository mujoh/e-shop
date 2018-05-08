   $(document).ready(function(){
            //-- Click on detail
            $("ul.menu-items > li").on("click",function(){
                $("ul.menu-items > li").removeClass("active");
                $(this).addClass("active");
            })

            $(".attr,.attr2").on("click",function(){
                var clase = $(this).attr("class");

                $("." + clase).removeClass("active");
                $(this).addClass("active");
            })

            //-- Click on QUANTITY
            $(".btn-minus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    if (parseInt(now) -1 > 0){ now--;}
                    $(".section > div > input").val(now);
                }else{
                    $(".section > div > input").val("1");
                }
            })            
            $(".btn-plus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    $(".section > div > input").val(parseInt(now)+1);
                }else{
                    $(".section > div > input").val("1");
                }
            }) 
            
            $(".ulID").on("mouseover",function(){
				var elementId = $(this).data('submenu-id');
            	document.getElementById(elementId).style.color = "#fff";
            })
            
            $(".ulID").on("mouseout",function(){
				var elementId = $(this).data('submenu-id');
            	document.getElementById(elementId).style.color = "#191919";
            })
            
            $('.subMenu').click(function() {
                //show its submenu
                $('.ulID', this).toggle(500);
            });
			
			
			$('#reset').click(function() {
				alert("reset clicked");
				console.log("aaa");
			});
			
			$('.item').click(function(){
				
				var id = $(this).attr('id');
				window.location.href = "singleproduct.php?id=" + id;
			});
			
			$('.place-order').click(function(){
				var total = $(this).attr('id');
				var name = $('#hidden_name').val();
				var uid = $('#user_id').val();
				var firstname = $('#firstname').val();
				var lastname = $('#lastname').val();
				var street = $('#user_street').val();
				var city = $('#user_city').val();
				var country = $('#user_country').val();
				var quantity = $('#hidden_quantity').val();
				
				$.ajax({
					type:"POST",
					url:"process.php",
					data:"total="+total+"&name="+name+"&uid="+uid+"&firstname="+firstname+"&lastname="+lastname+"&street="+street+"&city="+city+"&country="+country+"&quantity="+quantity+"&action=placeorder",
					success:function(){
						alert("Processed");
						window.location.href="controller/unsetcart.php";
					}
				})
			});
			
			$('.login').click(function(){
				window.location.href = "loginform.php";
			});
			
			$('#search').click(function(){
				var search = $('#search-field').val();
				
				$.ajax({
					type:"POST",
					url:"searchresults.php",
					data:{search:search},
					success:function(){
						window.location.href="searchresults.php?id="+search;
					}
				});
			});
			
			$('#search-field').keypress(function(e){
				var search = $('#search-field').val();
				
				if(e.which == 13){
					$('#search').click();
				}
			});
			
        })

		//script for sending email
		var ajax = {
			isSubmiting: false,
			send: function() {
				
				if(ajax.isSubmiting == false) {
					ajax.isSubmiting = true;
					
					var userName = $("input[name=name]").val();
					var userEmail = $("input[name=email]").val();
					var subject = $("input[name=subject]").val();
					var userComments = $("textarea").val();
					
					if(userName == "" || userEmail == "" || userComments == "")
						alert("Form not complete");
					else {
						
						ajax.SetText("Sending...");
						$.post("controller/sendmail.php", {
							name: userName, email: userEmail, subject: subject, comments: userComments	
						}, function(data) {
							if(data == "true") {
								ajax.SetText("Sent!");	
							} else {
								ajax.SetText("Send mail");
								alert(data);	
							}
							
							ajax.isSubmiting = false;
						});
					}
				}
				else alert("You can only send 1 email at a time");
			},
			SetText: function(text) {
				$("input[type=button]").val(text);
			}
		}
		
		function CheckPassword(inputtxt)   
		{   
			var passw = /((?=.{8,})(?=.*[A-Z])(?=.*[0-9])(?=.*[a-z]))/g; 
			
			if(inputtxt.value.match(passw))   
			{   
				return true;

			}  
			else  
			{   
				alert('Your password must be 8 characters or more long, have one uppercase, one lowercase letter and one number. Please try again.')  
				return false;
			}  
		}  