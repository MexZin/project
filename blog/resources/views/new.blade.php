<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    
    <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <p class="h5 my-0 me-md-auto fw-normal"><a href="/">Football</a></p>
      <nav class="my-2 my-md-0 me-md-3">
        <a class="p-2 text-dark" href="/pl">Premier League</a>
        <a class="p-2 text-dark" href="/laliga">LaLiga</a>
        <a class="p-2 text-dark" href="/seria">Seria A</a>
        <a class="p-2 text-dark" href="/bundesliga">Bundesliga</a>
        <a class="p-2 text-dark" href="/lig1">Ligue 1</a>
      </nav>
      <a class="btn btn-outline-primary" href="#">New Post</a>
    </header>
    
    <main class="container">
      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">New Post</h1>
        <p class="lead"></p>
      </div>

      <form action="" method="post">
        @csrf

        <div class="form-group">
          <label for="title">Enter title of post</label>
          <input type="text" name="title" placeholder="Enter post name" class="form-control">
        </div>

        <div class="form-group">
          <label for="text">Enter text</label>
          <textarea name="text" id="text" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Add post</button>
      </form>
      
    
      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="24" height="19">
            <small class="d-block mb-3 text-muted">© 2017-2021</small>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="link-secondary" href="#">Cool stuff</a></li>
              <li><a class="link-secondary" href="#">Random feature</a></li>
              <li><a class="link-secondary" href="#">Team feature</a></li>
              <li><a class="link-secondary" href="#">Stuff for developers</a></li>
              <li><a class="link-secondary" href="#">Another one</a></li>
              <li><a class="link-secondary" href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="link-secondary" href="#">Resource</a></li>
              <li><a class="link-secondary" href="#">Resource name</a></li>
              <li><a class="link-secondary" href="#">Another resource</a></li>
              <li><a class="link-secondary" href="#">Final resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="link-secondary" href="#">Team</a></li>
              <li><a class="link-secondary" href="#">Locations</a></li>
              <li><a class="link-secondary" href="#">Privacy</a></li>
              <li><a class="link-secondary" href="#">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </main><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div>
    

</body>
</html>