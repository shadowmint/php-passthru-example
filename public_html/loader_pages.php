<html>
  <body>
  <a href="index.html">back</a>

  <div id="contents1">
    <b>
        Loading page 1...
    </b>
  </div>

  <div id="contents2">
    <b>
        Loading page 2...
    </b>
  </div>

  <div id="contents3">
    <b>
        Loading page 3...
    </b>
  </div>

  <div>
    <hr/>
      footer here...
  </div>

  <div id="deferred1" style="opacity: 0.5;">
    <?php passthru("echo page 1 stuff... && sleep 3 && echo done"); ?>
    <script>
      var deferred = document.getElementById("deferred1");
      var contents = document.getElementById("contents1");
      contents.innerHTML = deferred.innerHTML;
      deferred.parentNode.removeChild(deferred);
    </script>
  </div>

  <div id="deferred2" style="opacity: 0.5;">
    <?php passthru("echo page 2 stuff... && sleep 3 && echo done"); ?>
    <script>
      var deferred = document.getElementById("deferred2");
      var contents = document.getElementById("contents2");
      contents.innerHTML = deferred.innerHTML;
      deferred.parentNode.removeChild(deferred);
    </script>
  </div>

  <div id="deferred3" style="opacity: 0.5;">
    <?php passthru("echo page 3 stuff... && sleep 3 && echo done"); ?>
    <script>
      var deferred = document.getElementById("deferred3");
      var contents = document.getElementById("contents3");
      contents.innerHTML = deferred.innerHTML;
      deferred.parentNode.removeChild(deferred);
    </script>
  </div>

  </body>
</html>
