<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adarsh singh</title>
    <link
      rel="icon"
      type="image/x-icon"
      href="./assets/images/linkedin-profile-adarsh.jpeg"
    />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <script
      src="https://kit.fontawesome.com/73b8bfb0d7.js"
      crossorigin="anonymous"
    ></script>
    <script src="./assets/js/script.js" defer></script>
  </head>
  <body>
    <header>
      <div class="overlay">
        <div class="info">
          <img
            src="./assets/images/linkedin-profile-adarsh.jpeg"
            alt="profile"
          />
          <h1>Adarsh Singh</h1>
          <h3>I am <b>a web developer</b></h3>
          <div class="action-buttons">
            <button>Coffee With Me</button>
            <button>Hire Me</button>
          </div>
        </div>
        <br />
        <div
          id="scroller"
          onclick="scrollToNext()"
          class="scroll-elem text-white"
        >
          <p>Learn more about what I do</p>
          <i id="facebook" class="fas fa-arrow-up"></i>
        </div>
      </div>
    </header>
    <!-- About me -->
    <section id="about-me">
      <img id="circles" src="./assets/images/circles.png" alt="circles" />
      <div class="row content">
        <div>
          <h3>About me</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic
            pariatur rerum, magni harum facere deserunt. Labore, repellendus
            illum earum eos adipisci nostrum aliquid hic quos quo tenetur minus
            incidunt eligendi. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Illo autem architecto accusantium, unde, odio
            veritatis sapiente soluta nesciunt aliquid nulla suscipit dicta
            necessitatibus vel, dignissimos sint fuga voluptate dolorem
            accusamus!
          </p>

          <button id="resume">Download Resume</button>
        </div>
        <div>
          <img
            src="./assets/images/undraw_code_review_re_woeb.svg"
            alt="developer"
          />
        </div>
      </div>
      <div
        id="scroller"
        onclick="scrollToNext()"
        class="scroll-elem text-accent"
      >
        <p class="text-accent">My Recent Works</p>
        <i id="facebook" class="fas fa-arrow-up"></i>
      </div>
    </section>

    <!-- Recent works -->

    <section id="recent-works">
      <div class="projects-wrapper">
        <h3>My Recent Works</h3>
        <div class="projects">
          
        </div>
      </div>
    </section>

    <!-- social links -->
    <div class="social-links-wrapper text-white">
      <span class="text-verticle"><p>Follow</p></span>
      <a href="#facebook"><i id="facebook" class="fab fa-facebook"></i></a>
      <a href="#instagram"><i id="instagram" class="fab fa-instagram"></i></a>
      <a href="#linkedin"><i id="linkedin" class="fab fa-linkedin"></i></a>
      <a href="#envelope"><i id="envelope" class="fas fa-envelope"></i></a>
    </div>
  </body>
</html>
