	$(document).ready(function(){
		$('#home').click(function() {
		$('#additem.active').removeClass('active');
		$('#trece.active').removeClass('active');
		$(this).addClass('active');
		$("#dva").hide();
		$("#tri").hide();
		$('#jedan').toggle('slow', function() {
		// Animation complete.
		});
	});
	$('#additem').click(function() {
		$('#home.active').removeClass('active');
		$('#trece.active').removeClass('active');
		$(this).addClass("active");
		$("#jedan").hide();
		$("#tri").hide();
		$('#dva').toggle('slow', function() {
		// Animation complete.
		});
	});
	$('#trece').click(function() {
		$('#home.active').removeClass('active');
		$('#additem.active').removeClass('active');
		$(this).addClass("active");
		$("#jedan").hide();
		$("#dva").hide();
		$('#tri').toggle('slow', function() {
		// Animation complete.
		});
	});
	
	function showRecords(){
		$.ajax({
			type:"POST",
			url:"process.php",
			data:"action=showdata",
			success:function(data){
				$('#output').html(data);
			}
		})
	}
	
	$('#add').click(function() {
				var name = $('#name').val();
				var brand = $('#brand').val();
				var price = $('#price').val();
				var quantity = $('#quantity').val();
				var img = $('#img').val();
				var comment = $('#comment').val();
				var capacity = $('#capacity').val();
				var color = $('#color').val();
				
				if(name == "" || brand == "" || price == "" || quantity == "" || img == "" || comment == ""){
					alert("Please give all info about product");
					return false;
				}
				
				$.ajax({
					type: "POST",
					data: "name="+name+"&brand="+brand+"&price="+price+"&quantity="+quantity+"&img="+img+"&comment="+comment+"&capacity="+capacity+"&color="+color+"&action=add",
					url: "process.php",
					success: function(result) {
						if(name == "" || brand == "" || price == "")
						{
							alert("Form not complete");
						}
						else
						{
							alert("Item Added !");
							$('#items-table').reset();
						}
					}
				})
		});
	
	$('#add').click(function(){
        $('#formAdd')[0].reset();
		});
	
	$('#addcrs').click(function() {

					var crs = $('#crs').val();

					$.ajax({
						type: "POST",
						data: "crs="+crs+"&action=addcrs",
						url: "process.php",
						success: function(result) {
							if(crs == "")
							{
								alert("Choose picture!");
							}
							else
							{
								alert("Carousel Picture Added");
							}
						}
					})
			});
			
	$('.delete').click(function(){
		
		var rem = this;
		var id = this.id;
		var splitid = id.split("_");
		
		var deleteid = splitid[1];
		
		$.ajax({
			type:"POST",
			url:"process.php",
			data:"id="+deleteid+"&action=delete",
			success:function(response){
				$(rem).closest('tr').css('background', 'tomato');
				$(rem).closest('tr').fadeOut(800, function(){
					$(this.remove());
				});
			}
		})
	});
	
	$('#update').click(function(){
		var idupdate = $('#id-update').val();
		var nameupdate = $('#name-update').val();
		var priceupdate = $('#price-update').val();
		var quantityupdate = $('#quantity-update').val();
		var detailsupdate = $('#comment-update').val();

		$.ajax({
			type:"POST",
			url:"process.php",
			data:"id="+idupdate+"&name="+nameupdate+"&price="+priceupdate+"&quantity="+quantityupdate+"&comment="+detailsupdate+"&action=update",
			success:function(result){
				alert("Item Updated");
				window.location.replace("adminpanel.php");
			}
		})
	});
	
	$('.update-admin').click(function(){
		
		var id = $(this).attr('id');
		window.location.href = "update.php?id=" + id;
	});
	
});