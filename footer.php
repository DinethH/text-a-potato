
	<br>
	<br>
	<br>
	<br>


 <script>
      document.getElementById("toggleMenuButton").addEventListener("click", function() {
		  if (this.icon == 'menu' ) {
			  document.querySelector('nav').style.transform = "translateY(0) rotateX(0deg)";
			  this.icon = 'close';
		  } else {
			  document.querySelector('nav').style.transform = "translateY(-500px) rotateX(-90deg)";
			  this.icon = 'menu';
		  }
        
		
      });
    </script>

</body></html>