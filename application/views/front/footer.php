  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <hr>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xs-6">
          By <a href="https://anjaszzz.my.id/">Mandiri verse</a>
        </div>
        <div class="col-xs-6" align="right">
    <a style="position: fixed; bottom: 20px; right: 20px;" onclick="scrollToTop()" >
        <i class="fa fa-arrow-up fa-2x" aria-hidden="true"></i>
    </a>
</div>
      </div>
    </div>
  </footer>
  <script>
function scrollToTop() {
    const scrollToTop = window.setInterval(function() {
        const pos = window.pageYOffset;
        if (pos > 0) {
            window.scrollTo(0, pos - 21); 
        } else {
            window.clearInterval(scrollToTop);
        }
    }, 16); // 60 fps
}
</script>
  </body>

  </html>