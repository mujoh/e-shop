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
			
			$('.img').click(function(){
				alert("Clicked");
			});
        });