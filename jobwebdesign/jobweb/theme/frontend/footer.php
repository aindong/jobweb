</div>


	</div>
	<!-- jquery -->
	<script src="scripts/jquery.js"></script>
	<script type="text/javascript">




		var loginShow = false;

		$(function(){
			$("#loginForm").hide();


			$(".login").click(function() {
				console.log(loginShow);

				if(loginShow == false)
				{
					$("#loginForm").slideDown(500);
					loginShow = true;	
				}
				else
				{
					$("#loginForm").slideUp(500);
					loginShow = false;	
				}
				
			});
		});

		
	</script>

	
</body>

</html>