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
            	document.getElementById("subMenu").style.color = "#fff";
            })
            
            $(".ulID").on("mouseout",function(){
            	document.getElementById("subMenu").style.color = "#191919";
            })
            
            $('.subMenu').hover(function() {
                //show its submenu
                $('.ulID', this).fadeIn(800);

            }, function() {
                //hide its submenu
                $('.ulID', this).fadeOut(2);
            });
            
            function checkPassword(passInput) {
            	var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
            	
            	if(passInput.value.match(passw))
            		{
            			alert('abe')
            			return true;
            		}
            	else
            		{
            			alert('Your password must containt 8-15 characters, at least one lowercase letter, one uppercase letter and one numeric digit')
            			return false;
            		}
            }
			
			$('#reset').click(function() {
				alert("reset clicked");
				console.log("aaa");
			});

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
						$.post("sendmail.php", {
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
		
		$('.item').click(function(){
				
				var id = $(this).attr('id');
				
				window.location.href = "singleproduct.php?id=" + id;
			});
		
});