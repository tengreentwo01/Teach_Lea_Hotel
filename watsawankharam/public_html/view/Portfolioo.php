<button id="button1">Change Image 1</button>
<button id="button2">Change Image 2</button>
<img id="myImage" src="image1.jpg" alt="Image 1" width=100%">

<script>
  document.getElementById('button1').addEventListener('click', function() {
    document.getElementById('myImage').src = '/img/97255.jpg';
  });

  document.getElementById('button2').addEventListener('click', function() {
    document.getElementById('myImage').src = '/img/97255.jpg';
  });
</script>
