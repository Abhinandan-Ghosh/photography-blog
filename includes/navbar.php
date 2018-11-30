   <nav class="navbar navbar-expand-lg navbar-light sticky-top ">
  <a class="navbar-brand" href="index.php">Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link <?php if($page == 'home') echo 'active'; ?>" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="" data-toggle="modal" data-target="#modalContactForm">Contact</a>
      <a class="nav-item nav-link <?php if($page == 'about') echo 'active'; ?>" href="about.php">About</a>
    </div>
  </div>
</nav>


<!-- Contact Modal -->
<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold pad-left " style="padding-left: 32px;">Write to us</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="md-form topmargin col-md-6">
          <i class="fa fa-user prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="form34">Your name</label>
          <input type="text" id="form34" class="form-control validate">
        </div>

        <div class="md-form topmargin col-md-6">
          <i class="fa fa-envelope prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="form29">Your email</label>
          <input type="email" id="form29" class="form-control validate">
        </div>
            </div>
            
        <div class="md-form topmargin ">
          <i class="fa fa-tag prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="form32">Subject</label>
          <input type="text" id="form32" class="form-control validate">
          
        </div>

        <div class="md-form topmargin">
          <i class="fa fa-pencil prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="form8">Your message</label>
          <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
          
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-dark">Send</button>
      </div>
    </div>
  </div>
</div>

