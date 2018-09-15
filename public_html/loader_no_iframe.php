<html>
  <body>
  <a href="index.html">back</a>

  <div id="contents">
    <h1>
        Loading...
    </h1>
  </div>

  <div>
    <hr/>
      footer here...
  </div>

  <!-- After the rest of the page has loaded, render the content -->
  <div id="deferred" style="display: none;">
    <?php passthru("echo script stuff... && sleep 1 && echo 1 && sleep 2 && echo 2 && sleep 1 && echo 3 && sleep 1 && echo 4"); ?>
  </div>

  <script>
    // Once the slow content is loaded, swap it up into the block at the top, replacing the loader.
    var deferred = document.getElementById('deferred');
    var contents = document.getElementById('contents');
    contents.innerHTML = deferred.innerHTML;
    deferred.parentNode.removeChild(deferred);
  </script>

  </body>
</html>
